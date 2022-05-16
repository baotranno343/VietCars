<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home
Route::get('/', [HomeController::class, 'index']);


Route::get('/category', [HomeController::class, 'category']);

Route::get('/post/{id}', [HomeController::class, 'post']);


Route::get('/orders', [HomeController::class, 'orders']);
Route::post('/order/{id}/delete', [HomeController::class, 'deleteOrder']);
Route::get('/checkout/{id}', [HomeController::class, 'checkout']);
Route::post('/checkout/{id}', [HomeController::class, 'submitCheckout']);
Route::post('/car/{id}/advise', [HomeController::class, 'submitAdvise']);


Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contact', [HomeController::class, 'submitContact']);
Route::get('/service', [HomeController::class, 'service']);


//user

Route::post('/login', [HomeController::class, 'login']);
//Route::post('/register', [HomeController::class, 'register']);
Route::get('/logout', [HomeController::class, 'logout']);
//End Home

Route::middleware([CheckAdmin::class])->group(function () {
    //

    //Admin
    //Index
    Route::get('/admin', [AdminController::class, 'index']);
    //products
    Route::get('/admin/products', [AdminController::class, 'products']);
    Route::get('/admin/add-product', [AdminController::class, 'createProductView']);
    Route::post('/admin/add-product', [AdminController::class, 'createProduct']);
    Route::delete('/admin/products/delete/{id}', [AdminController::class, 'deleteProduct']);
    Route::get('/admin/products/edit/{id}', [AdminController::class, 'editProductView']);
    Route::put('/admin/products/edit/{id}', [AdminController::class, 'editProduct']);
    //Orders
    Route::get('/admin/orders', [AdminController::class, 'orders']);
    Route::delete('/admin/orders/delete/{id}', [AdminController::class, 'deleteOrder']);
    Route::get('/admin/orders/{id}', [AdminController::class, 'editOrderView']);
    Route::post('/admin/orders/{id}', [AdminController::class, 'changeStatusOrder']);
    Route::get('/admin/orders/{id}/pdf', [AdminController::class, 'exportPdf']);

    //User
    Route::get('/admin/users', [AdminController::class, 'users']);
    Route::get('/admin/users/{id}', [AdminController::class, 'edit_user_view']);
    Route::put('/admin/users/{id}', [AdminController::class, 'editUser']);
    Route::delete('/admin/users/delete/{id}', [AdminController::class, 'deleteUser']);

    //Brand
    Route::get('/admin/brands', [AdminController::class, 'brands']);
    Route::get('/admin/add-brand', [AdminController::class, 'createBrandView']);
    Route::post('/admin/add-brand', [AdminController::class, 'createBrand']);
    Route::delete('/admin/brands/delete/{id}', [AdminController::class, 'deleteBrand']);
    Route::get('/admin/brands/edit/{id}', [AdminController::class, 'editBrandView']);
    Route::put('/admin/brands/edit/{id}', [AdminController::class, 'editBrand']);

    //Brand
    Route::get('/admin/estimate', [AdminController::class, 'estimate']);
    Route::get('/admin/estimate/edit/{id}', [AdminController::class, 'editEstimateView']);
    Route::put('/admin/estimate/edit/{id}', [AdminController::class, 'editEstimate']);


    //contact
    Route::get('/admin/contact', [AdminController::class, 'contact']);
    Route::delete('/admin/contact/delete/{id}', [AdminController::class, 'deleteContact']);
    //End Admin
});
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
