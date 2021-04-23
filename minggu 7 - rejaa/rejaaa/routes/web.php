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
    return view('welcome');

});

Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel </p> ';
});
Route::get('page/{nomor}', function ($nomor) {
    return 'Ini Halaman ke-' . $nomor;
});
/*
Route::get('user', 'ManagementUserController@index');

//Route::get('user', 'ManagementUserController@index');
Route::resource('user', 'ManagementUserController');
 


Route::group(['namespace'=> 'Frontend'], function()
    {
        Route::resource('home','HomeController');
    });

Route::group(['namespace'=> 'Backend'], function()
{
    Route::resource('dashboard','DashboardController');


});

*/
Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::middleware(['web' , 'auth'])->group(function () {
        Route::resource('dashboard', DashboardController::class);
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['namespace' => 'Frontend'], function ()
    {
        Route::get('/', 'HomeController@index');
        Route::resource('home', 'HomeController');

    });
Route::group(['middleware' => ['web','auth']], function(){
    Route::group(['namespace'=> 'Backend'], function()
    {
        Route::resource('dashboard','DashboardController');
    });

});
