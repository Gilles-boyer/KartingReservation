<?php

namespace Database\Factories;

use App\Models\ReservationPilot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReservationPilot>
 */
class ReservationPilotFactory extends Factory
{
    protected $model = ReservationPilot::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'arrived' => $this->faker->boolean,
            'reservation_id' => \App\Models\Reservation::all()->random()->id,
            'pilot_id' => \App\Models\Pilot::all()->random()->id,
            'payment_id' => \App\Models\Payment::all()->random()->id,
            'formula_id' => \App\Models\Formula::all()->random()->id,
        ];
    }
}
