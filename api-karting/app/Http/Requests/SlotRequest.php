<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlotRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'time' => 'required|date_format:H:i',
            'date' => 'required|date_format:Y-m-d',
            'available' => 'boolean',
        ];
    }
}
