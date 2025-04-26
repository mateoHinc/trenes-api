<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use App\Models\Route;

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

    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            if ($this->train_id && $this->origin_station_id && $this->destination_station_id) {
                $exists = Route::where('train_id', $this->train_id)
                    ->where('origin_station_id', $this->origin_station_id)
                    ->where('destination_station_id', $this->destination_station_id)
                    ->where('id', '<>', $this->route('id'))
                    ->exists();

                if ($exists) {
                    $validator->errors()->add('route', 'Esta combinación de tren, origen y destino ya existe.');
                }
            }
        });
    }
}
