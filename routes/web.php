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
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\RegisterController;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [RegisterController::class, 'index'])->name('register.index');
Route::post('/submit', [RegisterController::class, 'insert_data'])->name('register.save');
Route::post('/submitt', [LoginController::class, 'verify_data'])->name('login.check');
Route::post('/submittt', [BookController::class, 'publish_book'])->name('home.save');

Route::get('/viewBook', [ReaderController::class, 'viewBook'])->name('reader.viewbook');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('login', array(
//     'uses' => 'MainController@showLogin',
// ));
// // route to process the form
// Route::post('login', array(
//     'uses' => 'MainController@doLogin',
// ));
// Route::get('logout', array(
//     'uses' => 'MainController@doLogout',
// ));