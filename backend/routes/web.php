<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HighScoreController;
Route::get('/', function () {
    return view('welcome');
});


Route::post('/api/highscore',[HighScoreController::class,'store']);

