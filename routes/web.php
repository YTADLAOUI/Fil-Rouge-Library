<?php

use App\Http\Controllers\AuteureController;
use App\Http\Controllers\BibliController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\livreController;
use App\Http\Controllers\PromoController;
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
Route::get('biblio', [BiblioLivewire::class, 'render']);
Route::get('/ddd', function () {
    return view('bibliotique');
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
    Route::resource('/auteur',AuteureController::class);
    Route::resource('/categorie',CategorieController::class);
    Route::resource('/livre',livreController::class);
     Route::resource('/bibli',BibliController::class);
    
});
