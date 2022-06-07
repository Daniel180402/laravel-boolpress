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

/* Route::get('/', function () {
    return view('guest.home');
}); */

Auth::routes();

/* Route::middleware('auth')->get('/admin', 'Admin\HomeController@index'); */


/* Route::get('/home', 'Guest\HomeController@index')->name('home'); */

Route::middleware('auth')
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoryController');
});

Route::get('/contacts', 'Guest\ContactsController@contact')->name('guest.contact');
Route::post('/contacts', 'Guest\ContactsController@mailSend')->name('guest.sendMail');
Route::get('/thanks', 'Guest\ContactsController@thanks')->name('guest.thanks');

//sempre dopo mai prima, sovvrascrive
Route::get('/{any}', 'Guest\HomeController@index')->where('any','.*');
