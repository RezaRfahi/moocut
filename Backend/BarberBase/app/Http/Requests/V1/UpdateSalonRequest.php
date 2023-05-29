<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSalonRequest extends FormRequest
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
            'tel' => 'required|string|unique:salons,tel,' . $this->route('salon')->id,
            'postcode' => 'required|string|unique:salons,postcode,' . $this->route('salon')->id,
            'establish' => 'required|date',
            'status' => 'required|string',
            'start' => 'required|date_format:H:i:s',
            'finish' => 'required|date_format:H:i:s',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
            'breaks' => 'nullable|string',
        ];
    }
}
