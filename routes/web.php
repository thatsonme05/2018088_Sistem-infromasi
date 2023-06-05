<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardCatController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\DashboardTransactionController;

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

    return view('home',[
        "title"=> "home",
    ]);
   
});

Route::get('/info', function () {
    return view('info',[
        "title"=> "Information",
    ]);
});


Route::get('/post', [PostController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
});

Route::resource('/dashboard/cats', DashboardCatController::class)->middleware('auth');
Route::resource('/dashboard/orders', DashboardOrderController::class)->middleware('auth');
Route::resource('/dashboard/transactions', DashboardTransactionController::class)->middleware('auth');