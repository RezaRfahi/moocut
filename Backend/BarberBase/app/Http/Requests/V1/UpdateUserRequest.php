<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'nullable|string|min:8',
            'is_barber' => 'required|boolean',
            'phone' => 'required|string|unique:users',
            'nation_code' => 'nullable|string|unique:users,',
            'is_admin' => 'boolean',
            'birthday' => 'nullable|date',
            'vote' => 'nullable|integer',
            'address' => 'nullable|string|max:255',
        ];
    }
}
