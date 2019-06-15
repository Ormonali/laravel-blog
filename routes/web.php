<?php

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
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', 'Pagescontroller@index');
Route::resource('/posts', 'Postscontroller');

Route::get('/posts/tags/{tag}', 'TagsController@index');
