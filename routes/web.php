<?php

use App\Http\Controllers\PagesController;
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


// Route::get('/hello', function () {
//     return '<h1>Hello World</h1>';
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user '.$name.' with an id of '.$id.'.';
// });

// you usually dont want to return a view from your route, but set a controller
// create controller with artisan make:controller PagesController (PascalCase and plural)

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');



