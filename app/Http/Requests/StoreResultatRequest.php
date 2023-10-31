<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResultatRequest extends FormRequest
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
            'id' => ['required', 'max:100'],
                
                
        ];
    }
    public function messages()
    {
        return [
                'id.required' => 'Il faut spécifier un numéro d\'équipe.'
            ];
    }
    public function attributes()
    {
        return [
                'id' => 'id'
            ];
    }
}
