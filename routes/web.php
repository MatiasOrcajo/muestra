<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactoMailable;

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

Route::get('/api/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/api/categorias', 'App\Http\Controllers\ProductController@getCategories')->name('product.getCategories');
Route::get('/api/categoria/{id?}', 'App\Http\Controllers\ProductController@showCategory')->name('category.showCategory');
Route::get('/api/producto/{slug?}', 'App\Http\Controllers\ProductController@showProduct')->name('product.showProduct');

Route::post('/api/contact', 'App\Http\Controllers\ProductController@store');

Route::group(['prefix' => '/panel','middleware' => ['auth']], function(){
        Route::get('/dashboard', 'App\Http\Controllers\AdminController@index')->name('dashboard');
});

// Route::get('/panel/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('{any}', function(){
    return view('app');
})->where('any', '.*');




// Route::get('/api/products', 'App\Http\Controllers\ProductController@index');
