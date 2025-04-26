<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRouteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'train_id' => 'required|exists:trains,id',
            'origin_station_id' => 'required|exists:stations,id|different:destination_station_id',
            'destination_station_id' => 'required|exists:stations,id',
        ];
    }

    public function messages(): array
    {
        return [
            'origin_station_id.required' => 'La estación de origen es obligatoria.',
            'destination_station_id.required' => 'La estación de destino es obligatoria.',
            'origin_station_id.different' => 'La estación de origen y destino deben ser diferentes.',
        ];
    }
}
