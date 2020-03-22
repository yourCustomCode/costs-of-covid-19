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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/profile', 'HomeController@index')->name('profile');

Route::post('/profile/submit/user', 'FormController@updateUser')->name('updateUser');
Route::post('/profile/submit/revenue/last', 'FormController@addRevLast')->name('addRevLast');
Route::post('/profile/submit/revenue/current', 'FormController@addRevCurrent')->name('addRevCurrent');


//GET API
Route::get('/api/total/', 'DataController@getTotal');
Route::get('/api/recent/credit', 'DataController@getRecentCredits');
Route::get('/api/recent/rev/last', 'DataController@getRecentRevLast');
Route::get('/api/recent/rev/real', 'DataController@getRecentRevReal');
Route::get('/api/recent/rev/exp', 'DataController@getRecentRevExp');
