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

Route::get('/user', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home/', function () {
//     Route::get('/home/', [homeController::class, 'home']);
// });

use App\Http\Controllers\homeController;

Route::get('/home', [homeController::class, 'show']);
Route::get('/array', [homeController::class, 'array']);
Route::get('/topics', [topicsController::class, 'index']);

