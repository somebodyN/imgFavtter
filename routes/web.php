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


Route::get('fav', 'TwitterController@getFav');

Route::get('/login/twitter', 'TwitterController@login');
Route::get('/login/twitter/callback', 'TwitterController@callback');
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
