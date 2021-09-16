<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class Session extends Controller
{
  public function destroy()
  {
    Auth::logout();

    return redirect()->to('/')->with('success', 'Good bye!!');
  }

  public function create()
  {
    return view('login');
  }

  public function store()
  {
    $values = request()->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    if(Auth::attempt($values))  {
      return redirect('/')->with('success', 'Welcome back!');
    } else {
      return back()->withInput()->withErrors(['username'=>'Username or password does not match']);
    }
  }
}
