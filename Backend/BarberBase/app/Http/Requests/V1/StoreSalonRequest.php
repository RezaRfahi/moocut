<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalonRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'address' => 'required|string',
            'tel' => 'required|string|unique:salons',
            'postcode' => 'required|string|unique:salons',
            'establish' => 'required|date',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
            'breaks' => 'nullable|string',
        ];
    }
}
