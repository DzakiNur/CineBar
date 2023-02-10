<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AdminController;

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

Route::get ('/home', function() {
    return view ('user.home');
});

Route::get ('/', function() {
    return view ('welcome');
});


//route admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//route users
Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser');
Route::post('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
Route::post('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');

//route films
Route::get('/films', [FilmController::class, 'films'])->name('films');
Route::get('/createFilm', [FilmController::class, 'createFilm'])->name('createFilm');
Route::post('/storeFilm', [FilmController::class, 'storeFilm'])->name('storeFilm');
Route::get('/editFilm/{id}', [FilmController::class, 'editFilm'])->name('editFilm');
Route::post('/updateFilm/{id}', [FilmController::class, 'updateFilm'])->name('updateFilm');
Route::post('/deleteFilm/{id}', [FilmController::class, 'deleteFilm'])->name('deleteFilm');

//route register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/storeRegister', [RegisterController::class, 'storeRegister'])->name('storeRegister');

//route login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/storeLogin', [LoginController::class, 'storeLogin'])->name('storeLogin');

//route logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
