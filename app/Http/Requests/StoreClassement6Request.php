<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassement6Request extends FormRequest
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
            'idEquipeC6' => ['required']
        ];
    }
    public function messages()
    {
        return [
                'idEquipeC6.required' => 'Il faut spécifier un numéro d\équipe !'
            ];
    }
    public function attributes()
    {
        return [
                'idEquipeC6' => 'idEquipeC6'
            ];
    }
}

