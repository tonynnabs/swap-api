<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PlanetsController;
use App\Http\Controllers\VehicleController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('people', [PeopleController::class, 'index'])->name('people.index');
    Route::get('people/{id}', [PeopleController::class, 'show'])->name('people.show');

    Route::get('planets', [PlanetsController::class, 'index'])->name('planets.index');
    Route::get('planet/{id}', [PlanetsController::class, 'show'])->name('planet.show');


    Route::get('vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('vehicle/{id}', [VehicleController::class, 'show'])->name('vehicle.show');
});
