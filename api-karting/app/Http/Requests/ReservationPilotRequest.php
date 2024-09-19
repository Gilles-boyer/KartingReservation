<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationPilotRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'arrived' => 'boolean',
            'reservation_id' => 'required|exists:reservations,id',
            'pilot_id' => 'required|exists:pilots,id',
            'payment_id' => 'nullable|exists:payments,id',
            'formula_id' => 'required|exists:formulas,id',
        ];
    }
}
