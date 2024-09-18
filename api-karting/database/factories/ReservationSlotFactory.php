<?php

namespace Database\Factories;

use App\Models\ReservationSlot;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReservationSlot>
 */
class ReservationSlotFactory extends Factory
{
    protected $model = ReservationSlot::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reservation_id' => \App\Models\Reservation::all()->random()->id,
            'slot_id' => \App\Models\Slot::all()->random()->id,
        ];
    }
}
