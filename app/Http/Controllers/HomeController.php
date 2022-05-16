<?php

namespace App\Http\Controllers;

use App\Models\AdviseModel;
use App\Models\CarsModel;
use App\Models\CartsModel;
use App\Models\ContactModel;
use App\Models\ImagesModel;
use App\Models\OrdersModel;
use App\Models\UsersModel;
use App\Models\EstimateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {

        // $carsVolvo = CarsModel::where('brand', "Volvo")->get();
        // $carsAudi = CarsModel::where('brand', "Audi")->get();
        // $carsBMW = CarsModel::where('brand', "BMW")->get();
        $carsVolvo = DB::table('cars')->join('images', 'cars.id', '=', 'images.car_id')->where('brand_id', '1')->groupBy('car_id')->orderByDesc('car_id')->limit(6)->get();
        $carsAudi = DB::table('cars')->join('images', 'cars.id', '=', 'images.car_id')->where('brand_id', '2')->groupBy('car_id')->orderByDesc('car_id')->limit(6)->get();
        $carsBMW = DB::table('cars')->join('images', 'cars.id', '=', 'images.car_id')->where('brand_id', '3')->groupBy('car_id')->orderByDesc('car_id')->limit(6)->get();
        $carsNew =  DB::table('cars')->join('images', 'cars.id', '=', 'images.car_id')->groupBy('car_id')->orderByDesc('car_id')->orderByDesc('car_id')->limit(6)->get();
        return view('home.child.index',  ['carsVolvo' => $carsVolvo, 'carsAudi' => $carsAudi, 'carsBMW' => $carsBMW, 'carsNew' => $carsNew]);
    }
    public function category(Request $request)
    {


        //   $carsNew =  DB::table('cars')->join('images', 'cars.id', '=', 'images.car_id')->groupBy('car_id')->orderByDesc('car_id')->get();
        $carsNew =  DB::table('cars')->join('brands', 'cars.brand_id', '=', 'brands.id')->join('images', 'cars.id', '=', 'images.car_id')->select('cars.*', 'images.url', 'brands.name as nameBrand');

        if ($brand = $request->query('brand')) {


            $carsNew = $carsNew->where('brand_id', $brand);
        }
        if ($year = $request->query('year')) {

            $carsNew = $carsNew->where('year', $year);
        }
        if ($search = $request->query('search')) {

            $carsNew = $carsNew->where('cars.name', 'LIKE', '%' . $search . '%');
        }
        // if (($brand = $request->query('brand')) && ($year = $request->query('year'))) {

        //     $carsNew =  DB::table('cars')->join('images', 'cars.id', '=', 'images.car_id')->where('brand_id', $brand)->where('year', $year)->groupBy('car_id')->orderByDesc('car_id')->get();
        // }
        $carsNew = $carsNew->groupBy('cars.id')->orderByDesc('cars.id')->get();

        return view('home.child.category',  ['carsNew' => $carsNew]);
    }
    public function post(Request $request, $id)
    {
        // $car = CarsModel::where('id', $id)->first();
        $car =  DB::table('cars')->join('brands', 'cars.brand_id', '=', 'brands.id')->select('cars.*', 'brands.name as nameBrand')->where("cars.id", $id)->first();

        $imagesCar = ImagesModel::where('car_id', $id)->get();
        if ($car->seats == "4 Chỗ")
            $estimate = EstimateModel::where('id', 1)->first();
        else {
            $estimate = EstimateModel::where('id', 2)->first();
        }
        if ($car)
            return view('home.child.single-post', ['car' => $car, 'images' => $imagesCar, 'estimate' => $estimate]);
        else {
            return redirect("/");
        }
    }
    public function orders()
    {
        if (!session("user"))
            return redirect("/")->with('error', 'Vui lòng đăng nhập');
        $advise =  DB::table('orders')->join('cars', 'cars.id', '=', 'orders.car_id')->join('images as images', 'images.car_id', '=', 'orders.car_id')->select('orders.*', 'cars.*', 'images.*', 'orders.id as order_id')->where('user_id',  session("user")["id"])->groupBy('orders.id')->orderByDesc('orders.id')->get();

        return view('home.child.cart', ["cart" => $advise]);
    }
    public function deleteOrder(Request $request, $id)
    {

        $deleted = OrdersModel::find($id);
        if ($deleted) {
            if ($request->has(['cause'])) {
                $cause = $request->cause;
                $deleted->cause = $cause;
            }
            $deleted->status = 3;
            $deleted->save();
        }

        return back()->with('success', 'Hủy Đơn Hàng Thành Công');
    }
    // public function importCart($id)
    // {
    //     $car = CarsModel::where('id', $id)->first();
    //     $avatarCar = ImagesModel::where('car_id', $id)->first();
    //     if ($car) {

    //         $cartSession = session('cart');
    //         if (isset($cartSession[$id])) {
    //             $cartSession[$id]->sl += 1;
    //         } else {
    //             $cartSession[$id] = (object) array(
    //                 'info' => $car,
    //                 'avatar' => $avatarCar->url,
    //                 'sl' => 1,
    //             );
    //         }

    //         session(['cart' => $cartSession]);
    //         return response()->json(["success" => "Thêm Giỏ Hàng Thành Công", "cartCount" => count(session('cart'))]);
    //     }
    //     $error = ["error" => "Thiếu Dữ Liệu"];
    //     return response()->json($error);
    //     // return redirect("/cart");

    // }
    public function submitAdvise(Request $request)
    {

        if ($request->has(['car_id', 'email', 'name', 'address', 'phone', 'note'])) {
            $input = $request->only('car_id', 'email', 'name', 'address', 'phone', 'note');
            $input["user_id"] = session("user")["id"];
            $getMyOrder = OrdersModel::where('car_id', $input['car_id'])->where('user_id', session('user')['id'])->where('status', 0)->first();
            // if ($getMyOrder) {
            //     return back()->with('error', 'Bạn đã yêu cầu tư vấn sản phẩm này!');
            // }
            // Lấy danh sách các nhân viên có order
            $getManager =  DB::table('users')->join('orders', 'users.id', '=', 'orders.employee')->select(DB::raw('count(*) as count, employee'))->where('users.role', 2)->where('orders.status', 0)->groupBy('orders.employee')->get();

            // Lấy danh sách nhân viên
            $getManager0 = UsersModel::where("role", 2)->get();
            //Nếu các nhân viên ko có order
            if (!$getManager->count()) {
                //nhân viên được chỉ định là nhân viên đầu tiên
                $employee = UsersModel::where("role", 2)->first();
                if ($employee)
                    $input["employee"] =  $employee->id;
                else {
                    $input["employee"] = 1;
                }
            }
            //nếu có danh sách nhân viên
            if ($getManager0) {
                //lấy từng nhiên viên ra tìm nhân viên nào chưa có đơn nào thì cho nhân viên đó làm employee
                foreach ($getManager0 as $item) {
                    $checkManagerHaveInOrders = ordersModel::where('employee', $item->id)->first();

                    if (!$checkManagerHaveInOrders) {
                        $input["employee"] = $item->id;
                        break;
                    }
                }
            }
            //   echo $input["employee"];
            // nếu vẫn chưa có nhân viên nào phụ trách tư vấn tức là ở trên cùng đã tìm được nhân viên tư vấn thì tìm người có số tư vấn nhỏ nhất lấy
            if (empty($input["employee"])) {

                $min = 0;
                $employee = 0;

                foreach ($getManager as $item) {
                    if ($min == 0) {
                        $min = $item->count;
                        $employee = $item->employee;
                    }
                    if ($min > 0 && $min > $item->count) {
                        $min = $item->count;
                        $employee = $item->employee;
                    }
                }
                $input["employee"] = $employee;
                $insert = OrdersModel::create($input);
            } else {

                $insert = OrdersModel::create($input);
            }



            // // echo $count / sizeof($getManager);
            // $insert = OrdersModel::create($input);
            return back()->with('success', 'Cảm ơn bạn đã quan tâm đến sản phẩm, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!');
        }
    }
    public function checkout(Request $request, $id)
    {
        if (!session("user"))
            return redirect("/")->with('error', 'Vui lòng đăng nhập');

        $getOrders = OrdersModel::where("id", $id)->first();
        if ($getOrders) {
            $getCar = CarsModel::where("id", $getOrders->car_id)->first();
            if ($getCar) {
                return view('home.child.checkout', ["car" => $getCar, "order" => $getOrders]);
            }
        }

        return back()->with('error', 'Không tìm thấy đơn hàng');
    }
    public function submitCheckout(Request $request, $id)
    {

        $order = OrdersModel::find($id);
        if ($order) {
            $order->status = 2;
            $order->save();
            return redirect("/")->with('success', 'Mua Thành Công');
        }
        return redirect("/")->with('error', 'Không tìm thấy đơn hàng!');
    }
    public function contact()
    {
        return view('home.child.contact');
    }
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|max:255|email:rfc,dns',
            'phone' => 'required|min:3|max:255',
            'note' => 'required|min:3|max:2000',

        ]);
        if ($request->has(['name', 'email', 'phone', 'note'])) {
            $input = $request->only('name', 'email', 'phone', 'note');
            ContactModel::create($input);
            return redirect("/")->with('success', 'Cảm ơn bạn đã liên hệ với chúng tôi');
        }
        return redirect("/")->with('error', 'Thiếu Dữ Liệu');
    }
    public function service()
    {
        return view('home.child.service');
    }
    //User   
    public function login(Request $request)
    {
        $error = [];

        if ($request->has(['email', 'password'])) {
            $input = $request->only('email', 'password');
            $login = UsersModel::where("email", $input["email"])->where("password", $input["password"])->first();
            if ($login) {
                $saveSession = ["id" => $login["id"], "email" => $login["email"], "role" => $login["role"], "name" => $login["name"], "address" => $login["address"], "phone" => $login["phone"]];
                session(["user" => $saveSession]);

                return response()->json(["success" => "Đăng Nhập Thành Công"]);
            } else {
                $error = ["error" => "Sai Thông Tin"];
                return response()->json($error);
            }
        }
        $error = ["error" => "Thiếu Dữ Liệu"];
        return response()->json($error);
    }
    // public function register(Request $request)
    // {
    //     if ($request->has(['email', 'password', 'password2'])) {

    //         $input = $request->only('email', 'password', 'password2');
    //         if ($input["password"] != $input["password2"])
    //             return redirect("/")->with('error', 'Nhập lại mật khẩu không giống!');
    //         $login = UsersModel::where("email", $input["email"])->first();
    //         if ($login)
    //             return redirect("/")->with('error', 'Email đã tồn tại!');
    //         // UsersModel::create($input);
    //         // return redirect("/")->with('success', 'Đăng Ký Thành Công');
    //     }
    //     return redirect("/")->with('error', 'Thiếu Dữ Liệu');
    // }
    public function register(Request $request)
    {

        if ($request->has(['email', 'password', 'password2', 'name', 'address', 'phone'])) {
            $error = [];
            $input = $request->only('email', 'password', 'password2', 'name', 'address', 'phone');
            if ($input["password"] != $input["password2"]) {
                // return redirect("/")->with('error', 'Nhập lại mật khẩu không giống!');
                $error = ["error" => "Nhập Lại Mật Khẩu Không Đúng"];
            }
            $login = UsersModel::where("email", $input["email"])->first();
            if ($login) {
                // return redirect("/")->with('error', 'Email đã tồn tại!');
                $error = ["error" => "Email đã tồn tại"];
            }
            if (empty($error)) {
                UsersModel::create($input);
                return response()->json(["success" => "Đăng Ký Thành Công"]);
            } else {
                return response()->json($error);
            }
        }
        return response()->json(["error" => "Thiếu Dữ Liệu"]);

        // return redirect("/")->with('error', 'Thiếu Dữ Liệu');
        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA',
        // ]);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }
}
