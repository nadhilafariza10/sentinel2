<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapelController;


Route::get('/', function () {
    return view('welcome');
});

route::get('/register',[RegistrationController::class,'register']);
route::post('/register',[RegistrationController::class,'postRegister']);

route::get('/login',[LoginController::class,'login'])->name('login');
route::post('/login',[LoginController::class,'postLogin'])->name('postLogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

route::get('/home',[HomeController::class,'home'])->name('home');

route::get('/mapel', [MapelController::class,'mapel'])->middleware('admin');
