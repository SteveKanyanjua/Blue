<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blues', [BlueController::class, 'index'])->middleware('auth');
Route::get('/blues/create',[BlueController::class,'create']);
Route::post('/blues',[BlueController::class,'store']);
Route::get('/blues/{id}', [BlueController::class, 'show'])->middleware('auth');
Route::delete('/blues/{id}',[BlueController::class,'destroy'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
