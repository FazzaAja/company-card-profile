<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group that
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::resource('products', ProductController::class)->except(['show', 'index', 'create', 'edit']);

Route::get('admin', [
    'as' => 'admin.index',
    'uses' => 'ProductController@index'
]);

Route::get('admin/{product}/edit', [
    'as' => 'products.edit',
    'uses' => 'ProductController@edit'
]);

Route::get('admin/create', [
    'as' => 'admin.create',
    'uses' => 'ProductController@create'
]);

Route::get('admin/{slug}', [
    'as' => 'products.show',
    'uses' => 'ProductController@show'
]);

//

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/{slug}', [
    'as' => 'profile.detail',
    'uses' => 'HomeController@show'
]);

//
