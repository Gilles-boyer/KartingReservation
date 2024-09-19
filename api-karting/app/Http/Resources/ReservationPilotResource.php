<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationPilotResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'arrived' => $this->arrived,
            'reservation_id' => $this->reservation_id,
            'pilot_id' => $this->pilot_id,
            'payment_id' => $this->payment_id,
            'formula_id' => $this->formula_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
