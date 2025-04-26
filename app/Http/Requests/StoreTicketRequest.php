<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'schedule_id' => 'required|exists:schedules,id',
            'seat_number' => 'required|integer|min:1',
            'status' => 'in:reserved,cancelled,used'
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'El usuario es obligatorio.',
            'user_id.exists' => 'El usuario no existe.',
            'schedule_id.required' => 'El horario es obligatorio.',
            'schedule_id.exists' => 'El horario no existe.',
            'seat_number.required' => 'El número de asiento es obligatorio.',
            'seat_number.integer' => 'El número de asiento debe ser un número entero.',
            'seat_number.min' => 'El número de asiento debe ser al menos 1.',
            'status.in' => 'El estado debe ser reserved, cancelled o used.',
        ];
    }
}
