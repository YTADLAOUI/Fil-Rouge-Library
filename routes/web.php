<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRegisterController;
use App\Models\Branche;
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

Route::get('/', function () {
    return redirect('/login');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/promo',PromoController::class);
    Route::resource('/branch',BranchController::class);
    Route::resource('/class', ClassController::class);
    Route::resource('/register',UserRegisterController::class);
});
