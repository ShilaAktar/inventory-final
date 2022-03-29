<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\OrderController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('backend.pages.dashboard');
});

 Route::get('/order', function () {
 return view('backend.pages.order');
});

Route::get('/product',function(){
    return view('backend.pages.product.productList');
});

// url,controller name, controller method,route name
Route::get('/category/list',[CategoryController::class,'createCategory'])->name('create.list');
Route::get('/category/form',[CategoryController::class, 'categoryForm'])->name('category.form');
Route::post('/category/post',[CategoryController::class,'categoryPost'])->name('category.post');


//Route::get('/category/form',[CategoryController::class,'categoryForm'])->name('category.form');
//Route::post('/category/post',[CategoryController::class,'categoryPost'])->name('category.post');

Route::get('/product/create', [ProductController::class, 'createProduct'])->name('product.create');
Route::get('/prouct', [ProductController::class, 'product'])->name('product');
Route::post('/prouct.store', [ProductController::class, 'productstore'])->name('product.store');

// Route::get('products/list',[ProductController::class,'list'])->name('product.list');
// Route::get('/productform',[ProductController::class,'Productform'])->name('product.form');


Route::get('/order',[OrderController::class,'Orderlist'])->name('order.list');
Route::get('/employee',[EmployeeController::class,'Employeelist'])->name('employee.list');
Route::get('/employeeform',[EmployeeController::class,'Employeeform'])->name('employee.form');