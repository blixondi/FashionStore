<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/pria', [ProductController::class, 'index_pria'])->name('Pria');
Route::get('/wanita', [ProductController::class, 'index_wanita'])->name('Wanita');
Route::get('/anak', [ProductController::class, 'index_anak'])->name('Anak');
Route::resource("products", ProductController::class);


Route::middleware(['can:is-admin'])->group(function () {
    Route::get('/admin', [ProductController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/category', [CategoryController::class, 'indexadmin'])->name('admcategory.index');
    Route::get('/admin/product', [ProductController::class, 'indexadmin'])->name('admproduct.index');
    Route::get('/admin/product/{id}', [ProductController::class, 'adminshow'])->name('admproduct.detail');
    Route::get('/admin/product/edit/{product}', [ProductController::class, 'adminedit']);
    Route::post('/admin/product/update/{product}', [ProductController::class, 'update'])->name('product.update');

    Route::get('/admin/product/show/create_product', [ProductController::class, 'admincreate']);
    Route::post('/admin/product/show/store_product', [ProductController::class, 'store'])->name('products.store');
    Route::post('/admin/productdelete', [ProductController::class, 'destroy'])->name('products.delete');

    Route::get('/admin/customer', [CustomerController::class, 'indexcust'])->name('admcustomer.index');
    Route::get('/admin/staff', [CustomerController::class, 'indexstaff'])->name('admstaff.index');
    Route::get('/admin/owner', [CustomerController::class, 'indexowner'])->name('admowner.index');

    Route::get('/admin/type', [TypeController::class, 'indexadmin'])->name('admtype.index');
    Route::get('/admin/type/editform/{type}', [TypeController::class, 'adminedit']);
    Route::post('/admin/deletetype', [TypeController::class, 'destroy'])->name('type.delete');

    Route::get('/admin/update_category/{id}', [CategoryController::class, 'updateCat']);

    Route::post('/admin/create_customer', [CustomerController::class, 'storeCust'])->name('customers.storeCust');
    Route::post('/admin/create_staff', [CustomerController::class, 'storeStaff'])->name('customers.storeStaff');
    Route::post('/admin/create_owner', [CustomerController::class, 'storeOwner'])->name('customers.storeOwner');

    Route::get('/admin/update_adm_customer/{id}', [CustomerController::class, 'updateAdmCust'])->name('customers.updateAdmCust');
    Route::get('/admin/update_adm_staff/{id}', [CustomerController::class, 'updateAdmStaff'])->name('customers.updateAdmStaff');
    Route::get('/admin/update_adm_owner/{id}', [CustomerController::class, 'updateAdmOwner'])->name('customers.updateAdmOwner');

    Route::get('/admin/update_customer/{id}', [CustomerController::class, 'updateCust']);
    Route::get('/admin/update_staff/{id}', [CustomerController::class, 'updateStaff']);
    Route::get('/admin/update_owner/{id}', [CustomerController::class, 'updateOwner']);

    Route::post('/admin/delete_category', [CategoryController::class, 'deleteData'])->name('categories.deleteData');

    Route::post('/admin/delete_customer', [CustomerController::class, 'deleteData'])->name('customers.deleteData');

    Route::resource("categories", CategoryController::class);
    Route::resource("customers", CustomerController::class);
    Route::resource("type", TypeController::class);
});



Route::middleware(['auth'])->group(function () {
    Route::post("/product/addcart/{product}", [ProductController::class, "addcart"]);
    Route::get('/cart', [CustomerController::class, "cart"])->name('cart');
    Route::post('/deletecart/{item}', [ProductController::class, "deletecart"])->name('deletecart');
    Route::post('/checkout', [CustomerController::class, "checkout"]);
    Route::get('/profile', [CustomerController::class, "checkTransaction"])->name('profile');
    Route::get('/profile/edit', [CustomerController::class, "editProfile"]);
    Route::put('/profile/update', [CustomerController::class, "updateProfile"]);
    Route::post('/updatecart', [ProductController::class, 'updatecart']);
    Route::get('/transaction/{id}', [CustomerController::class, "detailTransaction"]);
});
