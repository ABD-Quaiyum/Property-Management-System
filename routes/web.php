<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PropertyController;
Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('property', PropertyController::class);