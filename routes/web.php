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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberregistrationController;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();



// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('index');


















//Member Registration Controller
Route::get('/member/registration', [MemberRegistrationController::class, 'start'])->name('start');
Route::get('/member/details', [MemberRegistrationController::class, 'member_details'])->name('member_details');
Route::post('/member_registration/post', [MemberRegistrationController::class, 'member_registration_post']);


