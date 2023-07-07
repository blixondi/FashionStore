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

Route::get('/admin', function () {
    return view('admin.adminhome');
});

Route::get('/pria', [ProductController::class, 'index_pria'])->name('Pria');
Route::get('/wanita', [ProductController::class, 'index_wanita'])->name('Wanita');
Route::get('/anak', [ProductController::class, 'index_anak'])->name('Anak');

Route::get('/admin', [ProductController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/category', [CategoryController::class, 'indexadmin'])->name('admcategory.index');
Route::get('/admin/product', [ProductController::class, 'indexadmin'])->name('admproduct.index');
Route::get('/admin/product/{id}', [ProductController::class, 'adminshow'])->name('admproduct.detail');
Route::get('/admin/product/edit/{product}', [ProductController::class, 'adminedit']);
Route::post('/admin/product/update/{product}', [ProductController::class, 'update'])->name('product.update');

Route::get('/admin/product/show/create_product', [ProductController::class, 'admincreate']);
Route::post('/admin/product/show/store_product', [ProductController::class, 'store'])->name('products.store');
Route::post('/admin/productdelete', [ProductController::class, 'destroy'])->name('products.delete');

Route::get('/admin/customer', [CustomerController::class, 'indexadmin'])->name('admcustomer.index');

Route::get('/admin/type', [TypeController::class, 'indexadmin'])->name('admtype.index');
Route::get('/admin/type/editform/{type}', [TypeController::class, 'adminedit']);
Route::post('/admin/deletetype', [TypeController::class, 'destroy'])->name('type.delete');

Route::get('/admin/update_category/{id}', [CategoryController::class, 'updateCat']);
Route::get('/admin/update_customer/{id}', [CustomerController::class, 'updateCust']);
Route::post('/admin/delete_category', [CategoryController::class, 'deleteData'])->name('categories.deleteData');
Route::post('/admin/delete_customer', [CustomerController::class, 'deleteData'])->name('customers.deleteData');



Route::resource("products", ProductController::class);
Route::resource("categories", CategoryController::class);
Route::resource("customers", CustomerController::class);
Route::resource("type", TypeController::class);

// Route::get('/product',[ProductController::class,'indexcustomer'])->name('custproduct.index');

Route::post("/product/addcart/{product}", [ProductController::class, "addcart"]);
Route::get('/cart', [CustomerController::class, "cart"])->name('cart');
Route::post('/deletecart/{item}', [ProductController::class, "deletecart"])->name('deletecart');
Route::post('/checkout', [CustomerController::class, "checkout"]);
<<<<<<< Updated upstream


Route::get('/profile', [CustomerController::class, "checkTransaction"])->name('profile');
Route::get('/profile/edit', [CustomerController::class, "editProfile"]);
Route::put('/profile/update', [CustomerController::class, "updateProfile"]);


=======
Route::get('/profile', [CustomerController::class, "checkTransaction"]);
Route::post('/updatecart',[ProductController::class,'updatecart']);
>>>>>>> Stashed changes

Route::get('/transaction/{id}', [CustomerController::class, "detailTransaction"]);
