<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\backend\WelcomeController;

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
    return 'Users.index';
});

Route::group(['namespace'=>'jobsite',],function() {
 Route::get('admin', [MainController::class, 'login']);
 Route::get('dashborad', [MainController::class, 'welcome']);
 Route::get('/', [MainController::class, 'index']);
});

Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
Route::get('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::get('/auth/check',[MainController::class,'check'])->name('auth.check');

Route::get('/admin/dashboard',[MainController::class,'dashborad']);

