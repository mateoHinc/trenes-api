<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRouteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'traind_id' => 'sometimes|exists:trains,id',
            'origin_station_id' => 'sometimes|exists:stations,id|different:destination_station_id',
            'destination_station_id' => 'sometimes|exists:stations,id',
        ];
    }

    public function messages(): array
    {
        return [
            'origin_station_id.different' => 'La estación de origen y destino deben ser diferentes.',
        ];
    }
}
