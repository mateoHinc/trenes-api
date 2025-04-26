<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'sometimes|exists:users,id',
            'schedule_id' => 'sometimes|exists:schedules,id',
            'seat_number' => 'sometimes|integer|min:1',
            'status' => 'sometimes|in:reserved,cancelled,used'
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.exists' => 'El usuario no existe.',
            'schedule_id.exists' => 'El horario no existe.',
            'seat_number.integer' => 'El número de asiento debe ser un número entero.',
            'seat_number.min' => 'El número de asiento debe ser al menos 1.',
            'status.in' => 'El estado debe ser reserved, cancelled o used.',
        ];
    }
}
