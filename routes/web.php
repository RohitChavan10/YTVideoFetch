<?php
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [VideoController::class, 'index'])->name('videos.index');
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');