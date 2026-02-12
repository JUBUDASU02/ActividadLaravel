<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMotoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Cambiar si usas autorización
    }

    public function rules(): array
    {
        return [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'cc' => 'required|integer|min:50|max:2000',
            'fuel_type' => 'required|in:Gasolina,Eléctrica,Híbrida',
            'price' => 'required|numeric|min:0',
            'stock' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }
}
