<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = User::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'username' => $this->faker->userName,
      'email' => $this->faker->unique()->safeEmail(),
      'email_verified_at' => now(),
      'password' => 'password', // password
      'first_name' => $this->faker->firstName,
      'last_name' => $this->faker->lastName,
      'birth_date' => $this->faker->date,
      'phone_number' => $this->faker->phoneNumber,
      'bitcoin_wallet' => $this->faker->uuid,
      'referral_name' => $this->faker->userName,
    ];
  }

  /**
   * Indicate that the model's email address should be unverified.
   *
   * @return \Illuminate\Database\Eloquent\Factories\Factory
   */
  public function unverified()
  {
    return $this->state(function (array $attributes) {
      return [
        'email_verified_at' => null,
      ];
    });
  }
}
