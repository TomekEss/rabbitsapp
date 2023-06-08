<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RabbitController;
use App\Http\Controllers\CageController;
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
//Formularz dodania nowego krola
Route::view("/addrabbit", 'addrabbit');
Route::post("/creatrabbit", [RabbitController::class, 'creatnewrabbit']);
//Usuwanie królika
Route::get("/deleterabbit/{id}", [RabbitController::class, 'deleterabbit']);
//Widok klatek
Route::get('/cages', [CageController::class, 'index']);
//Widok formularza nowej klatki
Route::view('/newcage', 'newcage')->name('addcage');
//Dodanie nowego oczka
Route::post('/createcage',[CageController::class,'createcage'])->name('createcage');
//Usuwanie klatki
Route::get("/deletecage/{id}", [CageController::class, 'deletecage']);
