<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortopolioController;
use App\Http\Controllers\HomeController;

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
})->name('login');

Route::get('home',[HomeController::class,'show']);
Route::post('user/auth',[UserController::class,'auth']);

Route::get('/template', function (){
    return view('template');
});
Route::post('user/auth',[Usercontroller::class,'auth']);
Route::get('user/logout',[Usercontroller::class,'logout']);



Route::get('profil',[ProfilController::class,'show']);
// Route::get('profil/add',[ProfilController::class,'add']);
Route::post('profil/create',[ProfilController::class,'create']);
Route::post('profil/edit/{id}',[ProfilController::class,'edit']);
Route::post('profil/update/{id}',[ProfilController::class,'update']);

Route::get('/portopolio',[PortopolioController::class,'show']);
Route::get('portopolio/add',[PortopolioController::class,'add']);
Route::post('portopolio/create',[PortopolioController::class,'create']);
Route::get('portopolio/hapus/{id}',[PortopolioController::class,'hapus']);
Route::get('portopolio/edit/{id}',[PortopolioController::class,'edit']);
Route::post('portopolio/update/{id}',[PortopolioController::class,'update']);
Route::post('portopolio/cari',[PortopolioController::class,'search']);

