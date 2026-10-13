
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/games', [GameController::class, 'index'])
    ->name('games.index');

Route::get('/game/{slug}', [GameController::class, 'show'])
    ->name('games.show');

