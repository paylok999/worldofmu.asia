<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'getIndex']);

Route::get('/register', [HomeController::class, 'register']);
Route::post('/register', [HomeController::class, 'postRegister']);

Route::get('/roadmap', [HomeController::class, 'roadmap']);

Route::get('/rankings', [HomeController::class, 'rankings']);

//Route::get('/', function () {
//    return view('welcome');
//});
