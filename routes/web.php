<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TelegramController;

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

Route::get('/lang/{lang}', function ($lang) {
    session(['lang'=>$lang]);
    return back();
});
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('catalog/{catalog_id}', [MainController::class, 'catalog_products'])->name('catalog_products');
Route::get('/product/{slug}', [MainController::class, 'productDetail'])->name('productDetail');
Route::post('/send-message', [TelegramController::class, 'sendMessage'])->name('telegram.send_message');
Route::post('/index-message', [TelegramController::class, 'indexMessage'])->name('telegram.index_message');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
