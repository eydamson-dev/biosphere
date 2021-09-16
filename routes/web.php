<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Session;
use App\Models\Transaction;
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
    return view('introduction');
});

Route::get('/home', function () {
    return view('landing-page');
});

Route::get('/game-1', function () {
    return view('game-play-1');
});

Route::get('/game-2', function () {
    return view('game-play-2');
});

Route::get('/dashboard', function() {
  $user=auth()->user();
  return view('dashboard', [
    'transactions'=> $user->transactions
  ]);
})->middleware('auth');

Route::get('/login', [Session::class, 'create']);
Route::post('/login', [Session::class, 'store']);
Route::get('/logout', [Session::class, 'destroy']);
Route::get('/register', [RegisterController::class, 'create']);

