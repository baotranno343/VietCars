<?php

namespace App\Http\Controllers;

use App\Models\BrandsModel;
use App\Models\CarsModel;
use App\Models\CartsModel;
use App\Models\ContactModel;
use App\Models\EstimateModel;
use App\Models\ImagesModel;
use App\Models\OrdersModel;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
        $countOrders =  OrdersModel::count();
        $countUsers = UsersModel::count();
        $countCars = CarsModel::count();
        $countContact = ContactModel::count();
        $orders = OrdersModel::orderByDesc('id');
        if (session("user")["role"] == 2) {
            $orders = $orders->where("employee", session("user")["id"]);
        }
        $orders = $orders->get();
        return view('admin.child.index', ["countOrders" => $countOrders, "countUsers" => $countUsers, "countCars" => $countCars, "orders" => $orders, "countContact" => $countContact]);
    }
    //Product
    public function products()
    {
        $cars = CarsModel::orderByDesc('id')->get();

        return view('admin.child.products.products', ["cars" => $cars]);
    }
    public function createProductView()
    {
        $brands = BrandsModel::orderByDesc('id')->get();

        return view('admin.child.products.createProduct', ["brands" => $brands]);
    }
    public function editProductView($id)
    {
        $car = CarsModel::find($id);
        if ($car)
            return view('admin.child.products.editProduct', ["car" => $car]);
        else {
            return redirect("/admin/products");
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'content' => 'required|min:3|max:2000',
            'price' => 'required|min:3|max:255',
            'km' => 'required|max:255',
            'year' => 'required|min:3|max:255',
            'type' => 'required|min:3|max:255',
            'seats' => 'required|min:3|max:255',
            'attachment' => 'required',
        ]);

        if ($request->has(['name', 'content', 'brand_id', 'price', 'km', 'year', 'type', 'seats'])) {
            $input = $request->only('name', 'content', 'brand_id', 'price', 'km', 'year', 'type', 'seats');

            $insert = CarsModel::create($input);
        }

        $files = $request->file('attachment');

        if ($request->hasFile('attachment')) {
            foreach ($files as $file) {
                $file->store('public/images/');
                ImagesModel::create(['car_id' => $insert->id, 'url' => 'storage/images/' . $file->hashName()]);
            }
        }
        return back()->with('success', 'Thêm Thành Công');
    }
    public function editProduct(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'content' => 'required|min:3|max:2000',
            'brand_id' => 'required|max:255',
            'price' => 'required|min:3|max:255',
            'km' => 'required|max:255',
            'year' => 'required|min:3|max:255',
            'type' => 'required|min:3|max:255',
            'seats' => 'required|min:3|max:255',
        ]);
        if ($request->has(['name', 'content', 'brand_id', 'price', 'km', 'year', 'type', 'seats'])) {
            $input = $request->only('name', 'content', 'brand_id', 'price', 'km', 'year', 'type', 'seats');
            $car = CarsModel::find($id);
            $car->name = $input["name"];
            $car->content = $input["content"];
            $car->brand_id = $input["brand_id"];
            $car->price = $input["price"];
            $car->km = $input["km"];
            $car->year = $input["year"];
            $car->type = $input["type"];
            $car->seats = $input["seats"];
            $car->save();
        }
        return back()->with('success', 'Sửa Thành Công');
    }
    public function deleteProduct($id)
    {
        OrdersModel::where("car_id", $id)->delete();
        ImagesModel::where("car_id", $id)->delete();
        CarsModel::find($id)->delete();
        return back()->with('success', 'Xóa Thành Công');
    }
    //Orders
    public function Orders(Request $request)
    {
        $countOrders =  OrdersModel::count();
        $endDate = date('Y-m-d H:i:s');
        $startDate = date('Y-m-d H:i:s', strtotime('-7 days'));

        $countWeekOrders = DB::table('orders')->whereBetween('created_at', [$startDate, $endDate])->count();
        $endDate = date('Y-m-d H:i:s');
        $startDate = date('Y-m-d H:i:s', strtotime('-30 days'));
        $countMonthOrders = DB::table('orders')->whereBetween('created_at', [$startDate, $endDate])->count();
        $endDate = date('Y-m-d H:i:s');
        $startDate = date('Y-m-d H:i:s', strtotime('-90 days'));
        $countQuarterOrders = DB::table('orders')->whereBetween('created_at', [$startDate, $endDate])->count();

        // $countCars = CarsModel::count();
        $orders = OrdersModel::orderByDesc('id');
        $status = $request->query('status');
        if ($request->has('status'))
            $orders = OrdersModel::where("status", $status);
        if (session("user")["role"] == 2) {
            $orders = $orders->where("employee", session("user")["id"]);
        }
        $orders = $orders->get();

        return view('admin.child.orders.orders', ["orders" => $orders,  "countOrders" => $countOrders, "countWeekOrders" => $countWeekOrders, "countMonthOrders" => $countMonthOrders, "countQuarterOrders" => $countQuarterOrders]);
    }
    public function editOrderView($id)
    {
        $order = OrdersModel::find($id);
        $car = CarsModel::where("id", $order->car_id)->first();


        return view('admin.child.orders.editOrder', ["order" => $order, "car" => $car]);
    }
    public function deleteOrder($id)
    {
        if (session('user')['role'] == 2) {
            return back()->with('error', 'Không được quyền xóa!');
        }
        $order = OrdersModel::find($id);
        if ($order) {
            $order->delete();
            return back()->with('success', 'Xóa Đơn Hàng Thành Công');;
        }
        return back()->with('error', 'Xóa thất bại không tìm thấy đơn hàng!');
    }
    public function changeStatusOrder(Request $request, $id)
    {
        if ($request->has(['status'])) {
            $getOrder = OrdersModel::find($id);
            if ($getOrder) {
                $getOrder->status = $request->status;
                $getOrder->save();
            }
        }
        return back()->with('success', 'Sửa Trạng Thái Thành Công');
    }
    public function exportPdf($id)
    {
        $orders = OrdersModel::where("id", $id)->first();

        $order =  DB::table('orders')->join('cars', 'orders.car_id', '=', 'cars.id')->where("orders.id", $id)->first();
        $data = [
            'order' => $order,

        ];

        $pdf = PDF::loadView('admin.child.orders.invoice', $data);
        $pdf->setOptions(['defaultFont' => 'sans-serif']);
        // Render the HTML as PDF
        return $pdf->download('invoice.pdf');
    }
    public function invoice()
    {

        return view("admin.child.orders.invoice");
    }
    //Users
    public function Users()
    {
        $users = UsersModel::orderByDesc('id')->get();

        return view('admin.child.users.users', ["users" => $users]);
    }
    public function edit_user_view($id)
    {
        $user = UsersModel::find($id);
        $orders = OrdersModel::where("user_id", $id)->get();
        return view('admin.child.users.editUser', ["user" => $user, "orders" => $orders]);
    }
    public function editUser(Request $request, $id)
    {

        if ($request->has(['role'])) {
            $user =  UsersModel::find($id);
            $user->role = $request->role;
            $user->save();
            return back()->with('success', 'Sửa Thành Công');
        }
        return back()->with('error', 'Lỗi Dữ Liệu');
    }
    public function deleteUser($id)
    {
        if (session('user')['role'] == 2) {
            return back()->with('error', 'Không được quyền xóa!');
        }
        $orders = OrdersModel::where("user_id", $id)->get();

        $orderUser = OrdersModel::where("user_id", $id)->first();
        if ($orderUser)
            $orderUser->delete();
        $user = UsersModel::find($id);
        if ($user)
            $user->delete();
        return back()->with('success', 'Xóa Thành Công');
    }


    //Product
    public function brands()
    {
        $brands = BrandsModel::orderByDesc('id')->get();
        return view('admin.child.brands.Brands', ["brands" => $brands]);
    }
    public function createBrandView()
    {

        return view('admin.child.brands.createBrand');
    }
    public function editBrandView($id)
    {
        $brand = BrandsModel::find($id);
        if ($brand)
            return view('admin.child.brands.editBrand', ["brand" => $brand]);
        else {
            return redirect("/admin/brands");
        }
    }

    public function createBrand(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',

        ]);

        if ($request->has(['name'])) {
            $input = $request->only('name');
            $insert = BrandsModel::create($input);
        }

        return back()->with('success', 'Thêm Thành Công');
    }
    public function editBrand(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',

        ]);
        if ($request->has(['name'])) {
            $input = $request->only('name');
            $car = BrandsModel::find($id);
            $car->name = $input["name"];

            $car->save();
        }
        return back()->with('success', 'Sửa Thành Công');
    }
    public function deleteBrand($id)
    {
        if (session('user')['role'] == 2) {
            return back()->with('error', 'Không được quyền xóa!');
        }
        BrandsModel::find($id)->delete();
        return back()->with('success', 'Xóa Thành Công');
    }
    //Contact
    public function contact()
    {
        $contact = ContactModel::orderByDesc('id')->get();
        return view('admin.child.contact.contact', ["contact" => $contact]);
    }
    public function deleteContact($id)
    {
        if (session('user')['role'] == 2) {
            return back()->with('error', 'Không được quyền xóa!');
        }
        $contact = ContactModel::find($id);
        if ($contact) {
            $contact->delete();
            return back()->with('success', 'Xóa Thành Công');
        }
        return back()->with('error', 'Không tìm thấy sản phẩm');
    }

    //Estimate
    public function estimate()
    {
        $estimate = EstimateModel::get();
        return view('admin.child.estimate.estimate', ["estimate" => $estimate]);
    }

    public function editEstimateView($id)
    {
        $estimate = EstimateModel::find($id);
        if ($estimate)
            return view('admin.child.estimate.editEstimate', ["estimate" => $estimate]);
        else {
            return redirect("/admin/estimate");
        }
    }


    public function editEstimate(Request $request, $id)
    {
        $validated = $request->validate([
            'thuetruocba' => 'required',
            'baohiemthanvo' => 'required',
            'phidichvudangky' => 'required',
            'baohiemdansu' => 'required',
            'phibaotriduongbo' => 'required',
            'phicapbienso' => 'required',
            'phidangkiem' => 'required',

        ]);
        if ($request->has(['thuetruocba', 'baohiemthanvo', 'phidichvudangky', 'baohiemdansu', 'phibaotriduongbo', 'phicapbienso', 'phidangkiem'])) {
            $input = $request->only('thuetruocba', 'baohiemthanvo', 'phidichvudangky', 'baohiemdansu', 'phibaotriduongbo', 'phicapbienso', 'phidangkiem');
            $estimate = EstimateModel::find($id);
            $estimate->thuetruocba = $input["thuetruocba"];
            $estimate->baohiemthanvo = $input["baohiemthanvo"];
            $estimate->phidichvudangky = $input["phidichvudangky"];
            $estimate->baohiemdansu = $input["baohiemdansu"];
            $estimate->phibaotriduongbo = $input["phibaotriduongbo"];
            $estimate->phicapbienso = $input["phicapbienso"];
            $estimate->phidangkiem = $input["phidangkiem"];
            $estimate->save();
            return back()->with('success', 'Sửa Thành Công');
        }
        return back()->with('error', 'Lỗi');
    }
}
