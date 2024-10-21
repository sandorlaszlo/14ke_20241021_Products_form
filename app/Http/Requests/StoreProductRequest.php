<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code' => ['required', 'size:5'],
            'name' => ['required', 'string', 'max:10'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'price' => ['required', 'numeric', 'min:1'],
            'color' => ['required', 'in:red,green,blue'],
            'description' => ['nullable', 'string', 'max:1000'],
        ];
    }

    public function messages(): array 
    {
        return [
            'required' => 'A(z) :attribute mező kitöltése kötelező.',
            'code.size' => 'A(z) :attribute mezőnek 5 karakter hosszúnak kell lennie.',
        ];
    }
}
