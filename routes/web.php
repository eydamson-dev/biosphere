<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Session;
use App\Http\Controllers\TransactionController;
use App\Models\ContentInfo;
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
  return view('introduction', [
    "content" => ContentInfo::getContent('introduction')
  ]);
});

Route::get('/home', function () {
  return view('introduction', [
    "content" => ContentInfo::getContent('landing-page')
  ]);
});

Route::get('/game-1', function () {
  return view('introduction', [
    "content" => ContentInfo::getContent('game-1')
  ]);
});

Route::get('/game-2', function () {
  return view('introduction', [
    "content" => ContentInfo::getContent('game-2')
  ]);
});

Route::get('/dashboard', function () {
  $user = auth()->user();
  return view('dashboard', [
    'transactions' => $user->transactions
  ]);
})->middleware('auth');

Route::get('/add-transaction', function () {
  return view('add-transaction');
})->middleware('auth');

Route::post('/add-transaction', [TransactionController::class, 'store']);
Route::get('/delete-transaction/{id}', function ($id) {

  $result = Transaction::find($id);

  if ($result) {
    $result->delete();
    return redirect()->to('dashboard');
  }

  return back();
});

Route::get('/login', [Session::class, 'create']);
Route::post('/login', [Session::class, 'store']);
Route::get('/logout', [Session::class, 'destroy']);
Route::get('/register', [RegisterController::class, 'create']);

