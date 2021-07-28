<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('register_form');
Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('login_form');
Route::post('/admin/login', [LoginController::class, 'loginAdmin'])->name('login_admin');
Route::post('/admin/register', [RegisterController::class, 'RegisterAdmin'])->name('register_admin');




Route::group(['middleware'=>'auth:admin'], function ()
{
        Route::resource('produk', ProdukController::class);
        Route::resource('transaksi', TransaksiController::class);
        
        Route::get('/delete/{id}', [ProdukController::class, 'destroy'])->name('delete');
});


Route::post('/beli', [HomeController::class, 'beli'])->name('beli')->middleware('auth');



Route::group(['middleware'=>'auth'], function ()
{

    
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');

Route::get('/summary/{id}', [HomeController::class, 'summary'])->name('summary')->where('id','(.*)');

Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

Route::post('/add_cart/{id}', [HomeController::class, 'add_cart'])->name('add_cart');

});
