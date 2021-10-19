<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LineOfBuisnessController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MsEducationController;
use App\Http\Controllers\OrgnisationsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
//without authenticate routes
Route::get('/', function () {
    return view('welcome');
});

// Normal User Routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin Routes
Route::group(['middleware' => ['admin']], function () {
    Route::get('admin', [HomeController::class, 'admin'])->name('admin.dashboard');
    //Configurations
    Route::get('configurations', [LineOfBuisnessController::class, 'configuation'])->name('configuation.index');
    //Line Of Buisness
    Route::get('lineofbuisness', [LineOfBuisnessController::class, 'index'])->name('lineofbuisness.index');
    Route::get('lineofbuisness/create', [LineOfBuisnessController::class, 'create'])->name('lineofbuisness.create');
    Route::post('lineofbuisness/store', [LineOfBuisnessController::class, 'store'])->name('lineofbuisness.store');
    //Locations
    //get locations
    Route::get('country-state-city', [LocationController::class, 'index']);
    Route::post('get-states-by-country', [LocationController::class, 'getState']);
    Route::post('get-cities-by-state', [LocationController::class, 'getCity']);

    Route::get('state', [LocationController::class, 'state'])->name('state.index');
    Route::get('city', [LocationController::class, 'city'])->name('city.index');
    //Education
    Route::get('educattion', [MsEducationController::class, 'index'])->name('education.index');
    Route::get('education/create', [MsEducationController::class, 'create'])->name('education.create');
    Route::post('education/store', [MsEducationController::class, 'store'])->name('education.store');
    // Orgnisations
    //Orgnisations Master
    Route::get('orgnisations', [OrgnisationsController::class, 'index'])->name('orgnisations.index');
    Route::get('orgnisations/create', [OrgnisationsController::class, 'create'])->name('orgnisations.create');
    Route::post('orgnisations/store', [OrgnisationsController::class, 'store'])->name('orgnisations.store');
    Route::get('orgnisations/edit', [OrgnisationsController::class, 'edit'])->name('orgnisations.edit');
    Route::get('orgnisations/delete/{id}', [OrgnisationsController::class, 'delete'])->name('orgnisation.delete');
    //Employee Profile
    Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('employee/create', [EmployeeController::class, 'index'])->name('employee.index');

    //Role
    Route::get('role/index', [RoleController::class, 'index'])->name('role.index');
    Route::get('role/cretae', [RoleController::class, 'create'])->name('role.create');
    Route::post('role/store', [RoleController::class, 'store'])->name('role.store');
    //User
    Route::prefix('user')->name('user')->group(function () {
        Route::get('index', [UserController::class, 'index'])->name('.index');
        Route::get('creta', [UserController::class, 'create'])->name('.create');
        Route::post('store', [UserController::class, 'store'])->name('.store');
    });
});
