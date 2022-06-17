<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

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

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/about',[AboutController::class,'index']);
// Route::get('/about',[AboutController::class,'index']);

// Route::get('/member',function(){
//     return view('member.index');
// });
// Route::get('/member',[MemberController::class,'index']);


// Route::get('/admin',function(){
//     return view('admin.index');
// });
// Route::get('/admin',[AdminController::class,'index']);

Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/member',[MemberController::class,'index'])->name('mem');
Route::get('/about',[AboutController::class,'index'])->name('aboutme');
Route::get('/admin',[AdminController::class,'index'])->name('adm')->middleware('check');;

Route::get('/dashboard',function(){
    return view('admin.dashboard.page');
});