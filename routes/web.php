<?php

use App\Http\Controllers\MovieController;
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
    return view('welcome');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('addmovie',function(){
    return view('addmovie');
});

Route::get('eachmovie/{id}',[MovieController::class,'eachMovie'])->name('each');

Route::POST('/savemovie',[MovieController::class,'savemovie'])->name('savemovie');

require __DIR__.'/auth.php';
