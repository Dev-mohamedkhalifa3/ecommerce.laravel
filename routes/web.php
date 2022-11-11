<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;

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
/*********User Routes */
Route::get("/",[userController::class,"login"]);
Route::get("/login",[userController::class,"login"])->name("login");
Route::post("/postlogin",[userController::class,"postlogin"]);
Route::get("/register",[userController::class,"register"]);
Route::post("/postregister",[userController::class,"postregister"]);
Route::get("/logout",[userController::class,"logout"]);
/*********User Routes */
/*********product Routes */
Route::get("/product/index",[productController::class,"index"]);
Route::get("/product/add",[productController::class,"add"]);
Route::post("/product/store",[productController::class,"store"]);



