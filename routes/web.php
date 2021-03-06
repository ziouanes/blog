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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::view('/', 'layouts.site');

Route::get('/', function () {
    return redirect(app()->getLocale());
});
// Route::redirect('/', '/en');
Route::get('/', function () {
    return view('layouts.site');
});
Route::get('/tours', 'tours@showString')->name('layouts.tourGrid');

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => 'en|fr'],
    'middleware' => 'setlocale',
], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');






    //     Route::get('/contact', 'contact@showString')->name('contact');


    //     //Route::get('/home', 'HomeController@index')->name('home');
    //     //     //Auth::routes();
    //     Route::get('/Admin', 'adminconroller@index');
});

// Route::post('ajouter', 'adminconroller@ajouter');



// Route::get('contact', function () {
//     return view('layouts.contact');
// });


//Route::view('/welcome', 'welcome');


//Route::view('/example', 'example', ['info' => 'very good']);


// Route::get('/example', function () {
//     return view('example', ['name' => 'hamza']);
// });


// Route::get('/home', 'HomeController@index')->name('home');
