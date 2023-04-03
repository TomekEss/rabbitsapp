<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RabbitController;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login", [UserController::class, 'login']);

Route::view("/register",'register');
Route::post("/register", [UserController::class, 'register']);

Route::get("/", [RabbitController::class, 'index']);

Route::get("detail/{id}", [RabbitController::class, 'details']);
//Strona wszystkie króliki
Route::get("/allrabbits", [RabbitController::class, 'allrabbits']);
//Wyszukiwanie
Route::get("search",[RabbitController::class,'search']);