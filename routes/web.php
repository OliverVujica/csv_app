<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class,'Index'])->name('index');
Route::get("/product/edit/{id}", [ProductController::class, 'productEdit'])->name("product.edit");
Route::post("/product/update", [ProductController::class, 'productUpdate'])->name("product.update");

Route::get('/product/import_product', function(){
		return view('product.import');
	});
Route::get("/product/export_product", [ProductController::class, 'exportCsv']);
Route::post("/product/import_product", [ProductController::class, 'importProducts']);