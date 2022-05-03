<?php

use App\Http\Controllers\PitStopController;
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

Route::get('/', [PitStopController::class, 'index']);
Route::get('importindb/', [App\Http\Controllers\PitStopController::class, 'importInDB']);
Route::resource('racenames','RaceNameController');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource("/driver", App\Http\Controllers\Admin\DriverController::class)->middleware("auth");
Route::resource("/racenames", App\Http\Controllers\Admin\RacenameController::class)->middleware("auth");



require __DIR__.'/auth.php';
