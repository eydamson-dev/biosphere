<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterForm extends Component
{

  public $username;
  public $password;
  public $password_confirmation;

  public $first_name;
  public $last_name;
  public $birth_date;

  public $phone_number;
  public $email;
  public $bitcoin_wallet;
  public $referral_name;

  public $currentStep = 1;
  public $totalSteps = 3;

  public function mount()
  {
    $this->currentStep = 1;
  }

  public function render()
  {
    return view('livewire.register-form');
  }

  public function toArray() {
    return array(
      'username' => $this->username,
      'password' => $this->password,
      'first_name' => $this->first_name,
      'last_name' => $this->last_name,
      'birth_date' => $this->birth_date,
      'phone_number' => $this->phone_number,
      'email' => $this->email,
      'bitcoin_wallet' => $this->bitcoin_wallet,
      'referral_name' => $this->referral_name,
    );
  }

  public function register()
  {
    $this->validateFields();

    $values = $this->toArray();
    $user = User::create($values);
    Auth::login($user);

    session()->flash('success', 'You have sucessfully registered an account.');
    return redirect()->to('/');
  }

  public function next()
  {
    $this->validateFields();
    $this->currentStep += 1;
    if($this->currentStep > $this->totalSteps) $this->currentStep = $this->totalSteps;
  }

  public function previous()
  {
    $this->validateFields();
    $this->currentStep -= 1;
    if($this->currentStep < 1) $this->currentStep = 1;
  }

  public function validateFields()
  {
    $this->resetErrorBag();
    if ($this->currentStep == 1) {

      $this->validate([
        'username' => 'required|unique:users|alpha_num',
        'password' => 'required|confirmed',
      ]);
    } else if ($this->currentStep == 2) {

      $this->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'birth_date' => 'required',
      ]);
    } else if($this->currentStep == 3) {

      $this->validate([
        'phone_number' => 'required',
        'email' => 'required|unique:users'
      ]);
    }
  }
}
