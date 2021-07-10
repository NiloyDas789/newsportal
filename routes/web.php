<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//Frontend Routes
Route::get( '/', 'App\Http\Controllers\FrontController@home' )->name( '/' );
Route::get( '/news/{slug}', 'App\Http\Controllers\FrontController@news' )->name( 'website.news' );
Route::get( '/catagory/{id}', 'App\Http\Controllers\FrontController@catagory' )->name( 'website.catagory' );

Route::get('/search-content','App\Http\Controllers\FrontController@searchContent');




// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/app', function () {
//     return view('layouts.app');
// });

Route::get('/master', function () {
    return view('master.master');
});

Route::get('/news_main', function () {
    return view('master.main');
});

Route::get('/basic', function () {
    return view('newsPortal.basic');
});
Route::get('/about', function () {
    return view('newsPortal.about');
});
// Route::get('/catagory', function () {
//     return view('newsPortal.catagory');
// });
Route::get('/contact', function () {
    return view('newsPortal.contact');
});
Route::get('/post', function () {
    return view('newsPortal.post');
});


// admin pannel routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {





    Route::resource('catagory', 'App\Http\Controllers\CatagoryController');
    Route::resource('tag', 'App\Http\Controllers\TagController');
    Route::resource('post', 'App\Http\Controllers\PostController');
    Route::resource('reporter', 'App\Http\Controllers\ReporterController');

    Route::get('/adm', function () {
        return view('master.admin2');
    })->name('admin2');

   Route::get('setting','App\Http\Controllers\SettingController@edit')->name('setting.edit');
   Route::post('setting','App\Http\Controllers\SettingController@update')->name('setting.update');


});
