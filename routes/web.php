<?php

use App\Http\Controllers\ProfileController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('profiles')->name('profile.')->group(function () {
    Route::get('setup', [ProfileController::class, 'setup'])->name('setup');
    Route::get('/{profile}', [ProfileController::class, 'show'])->name('show');
    Route::post('setup', [ProfileController::class, 'setupPost']);
});

Route::view('terms-and-condition', 'terms-and-condition');
