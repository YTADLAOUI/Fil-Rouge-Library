<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
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
// Route::get('/s', function () {
//     return view('addUser');
// });
Route::post('/register',[UserController::class,'create'])->name('addUsers');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/s', function () {
        return view('crud.addUser');});
    Route::resource('/promo',PromoController::class);
    Route::resource('/branch',BranchController::class);
    Route::get('/class', function () {
        return view('crud.class');});

});
