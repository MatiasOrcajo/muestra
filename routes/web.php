<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactoMailable;
use App\Models\SeoGlobal;

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
        Route::get('/categories', 'App\Http\Controllers\AdminController@categories')->name('dashboard.categories');
        Route::get('/products', 'App\Http\Controllers\AdminController@products')->name('dashboard.products');
        Route::post('/create-category', 'App\Http\Controllers\AdminController@createCategory')->name('dashboard.create.category');
        Route::get('/category/{category}', 'App\Http\Controllers\AdminController@showCategory')->name('dashboard.show.category');
        Route::delete('/delete-category/{category}', 'App\Http\Controllers\AdminController@deleteCategory')->name('dashboard.delete.category');
        Route::post('/edit-category/{category}', 'App\Http\Controllers\AdminController@editCategory')->name('dashboard.edit.category');
        Route::get('/edit/{slug}', 'App\Http\Controllers\AdminController@editProduct')->name('dashboard.edit.product');
        Route::post('/update-product', 'App\Http\Controllers\AdminController@updateProduct')->name('dashboard.update.product');
        Route::delete('/delete-product/{product}', 'App\Http\Controllers\AdminController@deleteProduct')->name('dashboard.delete.product');
        Route::post('/create-product', 'App\Http\Controllers\AdminController@createProduct')->name('dashboard.create.product');
        Route::get('/texts', 'App\Http\Controllers\AdminController@texts')->name('dashboard.texts');
        Route::post('/create-texts', 'App\Http\Controllers\AdminController@createTexts')->name('dashboard.create.texts');
        Route::post('/edit-texts', 'App\Http\Controllers\AdminController@editTexts')->name('dashboard.edit.texts');
        Route::get('/seo', 'App\Http\Controllers\AdminController@seoGlobal')->name('dashboard.seo');
        Route::post('/add-seo', 'App\Http\Controllers\AdminController@addSeoGlobal')->name('dashboard.add.seo');
        Route::get('/logout', 'App\Http\Controllers\AdminController@logout')->name('dashboard.logout');

        // subcategorias

        Route::get('/subcategory/{subcategory}', 'App\Http\Controllers\AdminController@showSubcategory')->name('dashboard.show.subcategory');
        Route::post('/create-subcategory', 'App\Http\Controllers\AdminController@createSubcategory')->name('dashboard.create.subcategory');

        
});

// Route::get('/panel/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('{any}', function(){
    $seo = SeoGlobal::first();
    $head = $seo->head;
    $body = $seo->body;

    return view('app', compact('head', 'body'));
})->where('any', '.*');


// Route::get('/api/products', 'App\Http\Controllers\ProductController@index');
