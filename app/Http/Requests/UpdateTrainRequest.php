<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTrainRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:trains,name,' . $this->route('id'),
            'capacity' => 'required|integer|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'name.unique' => 'Ya existe un tren con ese nombre.',
            'capacity.integer' => 'La capacidad debe ser un número entero.',
            'capacity.min' => 'La capacidad debe ser al menos 1.',
        ];
    }
}
