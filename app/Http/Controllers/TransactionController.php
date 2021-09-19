<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
  public function store()
  {
    $values = request()->validate([
      'bitcoin_amount' => 'required|numeric',
      'bitcoin_wallet' => 'required',
      'transaction_date' => 'required|date'
    ]);


    $user = Auth::user();
    $user->transactions()->create($values);

    // $transaction = Transaction::create($values);

    return redirect()->to('/dashboard');
  }
}
