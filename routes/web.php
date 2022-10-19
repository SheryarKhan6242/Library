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
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\RegisterController;
use App\Models\Reader;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [RegisterController::class, 'index'])->name('view.register');
Route::get('/login', [LoginController::class, 'index'])->name('view.login');

Route::get('/logout', [LogoutController::class, 'logout'])->name('session.logout');

Route::get('/viewBook', [ReaderController::class, 'viewBook'])->name('reader.viewbook');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/register-submit', [RegisterController::class, 'insert_data'])->name('register.save');

Route::post('/login', [LoginController::class, 'verify_data'])->name('verify.login');
Route::post('/book-submit', [BookController::class, 'publish_book'])->name('publish.book');

// Route::get('ajaxRequest', [AjaxController::class, 'ajaxRequest']);
Route::post('/ajaxRequest', [AjaxController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');

Route::post('/book-return', [BookController::class, 'return_book'])->name('book.return');

Route::post('/book-extend', [BookController::class, 'extend_date'])->name('book.extend');

Route::get('/view-bookings', [ReaderController::class, 'mybookings'])->name('view.mybookings');

Route::get('/popup', [ReaderController::class, 'popup'])->name('return.popup');

// Route::post('/View-profile', [ViewReservedBookController::class, 'index'])->name('view.reservedbook');

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

// Route::view('session.logout', function () {
//     if (session()->has('key')) {
//         session()->pull('key');
//     }
//     return redirect('login.verify');
// });

// Route::get('/login', function () {
//     if (session()->has('key')) {
//         return view('reader')
//     }
//     return view('login.verify');
// });