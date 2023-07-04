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

Route::get('/admin', function(){
    return view('admin.adminhome');
});
Route::get('/admin/category',[CategoryController::class,'indexadmin'])->name('admcategory.index');
Route::get('/admin/product',[ProductController::class,'indexadmin'])->name('admproduct.index');
Route::get('/admin/product/{id}',[ProductController::class,'adminshow'])->name('admproduct.detail');
Route::get('/admin/product/edit/{id}',[ProductController::class,'adminedit'])->name('admproduct.edit');
Route::get('/admin/customer',[CustomerController::class,'indexadmin'])->name('admcustomer.index');
Route::get('/admin/type',[TypeController::class,'indexadmin'])->name('admtype.index');
Route::get('/admin/create_category/{id}', [CategoryController::class, 'updateCat']);


Route::get('/pria',[ProductController::class, 'index_pria'])->name('Pria');
Route::get('/wanita',[ProductController::class, 'index_wanita'])->name('Wanita');
Route::get('/anak',[ProductController::class, 'index_anak'])->name('Anak');

Route::resource("products", ProductController::class);
Route::resource("categories", CategoryController::class);

Route::get('/product',[ProductController::class,'indexcustomer'])->name('custproduct.index');
Route::post("/product/addcart/{product}",[ProductController::class,"addcart"]);

Route::get('/cart',[CustomerController::class,"cart"]);
Route::post('/checkout',[CustomerController::class,"checkout"]);

Route::get('/test', function(){
    return view('main.twst');
});
Route::get('/profile',[CustomerController::class,"checkTransaction"]);
