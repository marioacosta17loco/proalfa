<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controller\ProductoController;
use APP\Http\Controller\CatalogoController;
use APP\Http\Controller\ArchivoController;
use APP\Http\Controller\CartController;
use APP\Http\Controller\PedidoController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/products', [App\Http\Controllers\CatalogoController::class, 'index'])->name('products');


Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/hola', function () {
    return view('hola');
});
Route::get('/index14', function () {
    return view('index14');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'getUser']);
Route::get('pedidos/pdf', [App\Http\Controllers\PedidoController::class, 'pdf'])->name('pedidos.pdf');
Route::get('pedidos/confirmacion', [App\Http\Controllers\PedidoController::class, 'confirmacion'])->name('pedidos.confirmacion');


Route::middleware(['auth:sanctum','verified'])->group(function(){
Route::get('/shop', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
Route::post('/cleaar', [App\Http\Controllers\CartController::class, 'cleaar'])->name('cart.cleaar');
});

Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::resource('/productos', App\Http\Controllers\ProductoController::class);
});

Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::resource('/archivos', App\Http\Controllers\ArchivoController::class);
});

Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::resource('/pedidos', App\Http\Controllers\PedidoController::class);
});

