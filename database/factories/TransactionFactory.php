<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'bitcoin_amount' => rand(100, 1000),
          'bitcoin_wallet' => $this->faker->uuid,
          'transaction_date' => $this->faker->dateTime
        ];
    }
}
