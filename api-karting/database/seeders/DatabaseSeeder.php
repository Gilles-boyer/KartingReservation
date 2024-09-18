<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Reservation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Slot;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //client
        Client::factory()->count(50)->create();
        Reservation::factory()->count(20)->create();
        // User::factory(10)->create();

        //Slot::class
        $days = ['Wednesday', 'Saturday', 'Sunday'];
        $startTimes = ['09:00', '13:00'];
        $endTimes = ['12:00', '18:00'];

        foreach ($days as $day) {
            foreach ($startTimes as $index => $startTime) {
                $start = Carbon::createFromTimeString($startTime);
                $end = Carbon::createFromTimeString($endTimes[$index]);

                while ($start->lessThan($end)) {
                    Slot::create([
                        'time' => $start->format('H:i'),
                        'date' => now()->next($day)->format('Y-m-d'),
                        'available' => true,
                    ]);
                    $start->addMinutes(15);
                    echo "Created slot at " . $start->format('H:i') . " on " . now()->next($day)->format('Y-m-d') . "\n";
                }
            }
        }
    }
}
