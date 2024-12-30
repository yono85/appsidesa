<?php

use Illuminate\Support\Facades\Route;
$routes = '\App\Http\Controllers';

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

Route::get('/chatbot', function () {
    // return view('welcome');
    return view('testing.chatbot');
});

Route::match(['get', 'post'], '/botman', $routes . '\BotManController@handle');

Route::group(['prefix' => '/', 'middleware' => 'CheckLogout'], function() use ($routes){
    Route::get('/', $routes . '\home\index@main');
    Route::get('/pengaduan', $routes . '\home\index@mail');
    Route::get('/login', $routes . '\home\index@login');
});

Route::post('/login', $routes . '\access\index@login');
Route::post('/mail/create', $routes . '\mail\index@create');

Route::get('/dashboard/logout', $routes . '\access\index@logout');

Route::group(['prefix' => '/dashboard', 'middleware' => 'CheckLogin'], function() use ($routes){
    Route::get('/', $routes . '\dashboard\index@main');
});