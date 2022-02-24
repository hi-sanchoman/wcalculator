<?php

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

Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);

Route::get('/calc/{slug}', [App\Http\Controllers\SiteController::class, 'showCategory']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('managers', App\Http\Controllers\ManagerController::class);


Route::resource('categories', App\Http\Controllers\CategoryController::class);


Route::resource('products', App\Http\Controllers\ProductController::class);


Route::resource('materials', App\Http\Controllers\MaterialController::class);


Route::resource('addons', App\Http\Controllers\AddonController::class);


Route::resource('increments', App\Http\Controllers\IncrementController::class);


Route::resource('products.advantages', App\Http\Controllers\ProductAdvantageController::class);
Route::resource('products.inners', App\Http\Controllers\InnerController::class);
Route::resource('products.attributes', App\Http\Controllers\AttributeController::class);

// Route::group(['prefix' => 'products',], function() {
// 	Route::get('/products/{id}/advantages', [App\Http\Controllers\ProductAdvantageController::class, 'index'])->name('products.advantages');
// 	Route::get('/products/{id}/advantages/{adv}/edit', [App\Http\Controllers\ProductAdvantageController::class, 'show'])->name('products.advantages.edit');
// 	Route::resource('productAdvantages', App\Http\Controllers\ProductAdvantageController::class);
// });




