<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodolistController;
use App\Http\Controllers\registeraddController;
 
 
Route::get('/', function () {
    return view('front.login');
});

 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/edit/{id}', [HomeController::class, 'edit']);
    Route::get('/delete/{id}', [HomeController::class, 'delete']);
    Route::get('/adminpage', [HomeController::class, 'admin']);
    Route::get('/userlist', [HomeController::class, 'userlist']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::get('/about', [HomeController::class, 'about']);
    Route::get('/learnmore', [HomeController::class, 'learnmore']);
    Route::put('/update-data/{id}', [HomeController::class, 'update']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/contact_mail',[HomeController::class, 'contact_mail_send']);
    Route::get('/todolist',[TodolistController::class, 'index'])->name('index');
    Route::post('/todolist',[TodolistController::class, 'store'])->name('store');
    Route::delete('/{todolist:id}',[TodolistController::class, 'destroy'])->name('destroy');
    Route::get('/registeradd', [registeraddController::class, 'registeradd'])->name('registeradd');
    Route::post('/registeradd', [registeraddController::class, 'registeraddPost'])->name('registeradd');
  
});