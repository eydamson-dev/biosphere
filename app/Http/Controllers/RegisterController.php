<?php

namespace App\Http\Controllers;

class RegisterController extends Controller
{
  function create() {
    return view('signup');
  }
}
