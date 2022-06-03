<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get("/", [AuthController::class, "loginPage"])->name("home");
Route::get("/register", [AuthController::class, "registerPage"])->name("register");
Route::get("/forgot", [AuthController::class, "forgotPage"])->name("forget");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");

Route::post("login", [AuthController::class, "login"])->name("doLogin");
Route::post("/register", [AuthController::class, "register"])->name("doRegister");
Route::post("/forgot", [AuthController::class, "forgot"])->name("doForgot");

Route::get("/home", [UserController::class, "home"])->name("index");

Route::get("/test", [AuthController::class, "test"]);
Route::get("/{username}", [UserController::class, "user"])->name("user");
