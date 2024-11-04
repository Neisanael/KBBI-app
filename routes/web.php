<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('homepage');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'create']);
    Route::post('/store', [HomeController::class, 'store'])->name('dictionary.store');
    Route::get('/show', [HomeController::class, 'show'])->name('dictionary.show');
    Route::get('/edit', [HomeController::class, 'edit'])->name('dictionary.edit');
    Route::put('/update', [HomeController::class, 'update'])->name('update');
    Route::delete('/destroy', [HomeController::class, 'destroy'])->name('destroy');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
/**Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');**/
//Route::get('/test', function(){
//    return view('adminHomepage');
//});
