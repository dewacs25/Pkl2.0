<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/blog', [HomeController::class,'blogAll']);
Route::get('/contact2', [HomeController::class,'contact2']);





Route::get('/detail/{id}/{judul}', [DetailController::class,'index']);
Route::get('/blog/{id}/{judul}', [HomeController::class,'Blog']);


Route::get('/admin', function () {
    return view('admin/index');
})->middleware('admin.auth');
Route::get('/admin/blog', function () {
    return view('admin/blog');
})->middleware('admin.auth');



Route::get('/admin/layanan', function () {
    return view('admin/layanan');
})->middleware('admin.super');

Route::get('/admin/content', function () {
    return view('admin/content');
})->middleware('admin.super');


Route::get('/admin/configMain', function () {
    return view('admin/configMain');
})->middleware('admin.super');

Route::get('/admin/contact', function () {
    return view('admin/contact');
})->middleware('admin.super');

Route::get('/admin/totalProject', function () {
    return view('admin/totalProject');
})->middleware('admin.super');

Route::get('/admin/mediaSosial', function () {
    return view('admin/mediaSosial');
})->middleware('admin.super');

Route::get('/admin/DataAdmin', function () {
    return view('admin/DataAdmin');
})->middleware('admin.super');

Route::get('admin/auth/login',[AdminLogin::class,'login'])->name('admin.login');
Route::post('admin/auth/login',[AdminLogin::class,'login_action'])->name('admin.login.action');
Route::get('admin/auth/logout',[AdminLogin::class,'logoutAdmin'])->name('admin.logout');