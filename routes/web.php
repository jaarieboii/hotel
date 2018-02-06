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
use App\Roomtype;

Route::get('/', 'NewsController@index');
Route::get('/waw', function(){
   return view('waw');
});
Route::get('/activity', 'ActivityController@index');



// reservation //




//route::get('/roomtype', function(){
//    $roomtype = Roomtype::all();
//
//    return view('roomtype.index', compact('roomtype'));
//});

Auth::routes();

Route::get('/reservation', 'ReservationsController@index');
Route::get('/reservation/create', 'ReservationsController@create');
Route::post('/reservation', 'ReservationsController@store');
Route::get('/reservation/show/{id}', 'ReservationsController@show');
Route::DELETE('/reservation/{id}', 'ReservationsController@delete');
Route::get('/reservation/{id}/edit', 'ReservationsController@edit');
Route::post('/reservation/{id}', 'ReservationsController@update' );

Route::get('/roomtype', 'RoomtypesController@index');
Route::get('/roomtype/create', 'RoomtypesController@create');
Route::post('/roomtype', 'RoomtypesController@store');
Route::get('/roomtype/show/{id}', 'RoomtypesController@show');
Route::DELETE('/roomtype/{id}', 'RoomtypesController@delete');
Route::get('/roomtype/{id}/edit', 'RoomtypesController@edit');
Route::post('/roomtype/{id}', 'RoomtypesController@update' );

Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('admin')->group(function(){
        // roomtype //

Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('home');
    });