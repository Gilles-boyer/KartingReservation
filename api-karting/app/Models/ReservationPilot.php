<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationPilot extends Model
{
    use HasFactory;

    protected $fillable = [
        'arrived',
        'reservation_id',
        'pilot_id',
        'payment_id',
        'formula_id',
    ];
}
