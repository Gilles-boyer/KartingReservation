<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = Payment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commentaire' => $this->faker->sentence,
            'type' => $this->faker->randomElement(['cash', 'credit', 'debit']),
            'date' => $this->faker->date('Y-m-d'),
            'amount' => $this->faker->randomFloat(2, 1, 50),
        ];
    }
}
