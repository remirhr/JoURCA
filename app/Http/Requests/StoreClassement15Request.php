<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassement15Request extends FormRequest
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
            'idEquipeC15' => ['required']
        ];
    }
    public function messages()
    {
        return [
                'idEquipeC15.required' => 'Il faut spécifier un numéro d\équipe !'
            ];
    }
    public function attributes()
    {
        return [
                'idEquipeC15' => 'idEquipeC15'
            ];
    }
}
