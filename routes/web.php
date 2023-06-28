<?php

use App\Http\Controllers\CategoryController;
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
Route::get('/admin/type',[TypeController::class,'indexadmin'])->name('admtype.index');


Route::get('/pria',[ProductController::class, 'index_pria']);
Route::get('/wanita',[ProductController::class, 'index_wanita']);
Route::get('/anak',[ProductController::class, 'index_anak']);
