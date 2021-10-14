<?php

use App\Http\Controllers\LineOfBuisnessController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MsEducationController;
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
Route::get('admin', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Configurations
Route::get('configurations', [LineOfBuisnessController::class, 'configuation'])->name('configuation.index');
//Line Of Buisness
Route::get('lineofbuisness', [LineOfBuisnessController::class, 'index'])->name('lineofbuisness.index');
Route::get('lineofbuisness/create', [LineOfBuisnessController::class, 'create'])->name('lineofbuisness.create');
Route::post('lineofbuisness/store', [LineOfBuisnessController::class, 'store'])->name('lineofbuisness.store');
//Locations
Route::get('state', [LocationController::class, 'state'])->name('state.index');
Route::get('city', [LocationController::class, 'city'])->name('city.index');
//Education
Route::get('educattion', [MsEducationController::class, 'index'])->name('education.index');
Route::get('education/create', [MsEducationController::class, 'create'])->name('education.create');
Route::post('education/store', [MsEducationController::class, 'store'])->name('education.store');
