<?php

use App\Http\Controllers\AuteureController;
use App\Http\Controllers\BibliController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\livreController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ResController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Livewire\BiblioLivewire;
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
 Route::get('comment', function () {
    return view('comment');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/promo',PromoController::class)->except('create','show');
    Route::resource('/branch',BranchController::class)->except('create','show');
    Route::resource('/class', ClassController::class)->except('create','show');
    Route::resource('/register',UserRegisterController::class)->except('create','show');
    Route::resource('/auteur',AuteureController::class)->except('create','show');
    Route::resource('/categorie',CategorieController::class)->except('create','show');
    Route::resource('/livre',livreController::class)->except('create','show');
    Route::resource('/bibli',BibliController::class)->only('index','show');
    Route::post('reservation/{id}',[ResController::class,'reservation']);
    Route::get('personelResrvation',[ResController::class,'index']);
    Route::delete('reservation/{id}',[ResController::class,'destroy']);
    Route::get('/reservationTotal',[ResController::class,'toutReservation']);
});
// Route::get('reservation/{$id}',[ReservationController::class,'resrevation'])->name('test.reservation');