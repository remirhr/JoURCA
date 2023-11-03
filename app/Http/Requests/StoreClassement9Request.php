<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassement9Request extends FormRequest
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
            'idEquipeC9' => ['required']
        ];
    }
    public function messages()
    {
        return [
                'idEquipeC9.required' => 'Il faut spécifier un numéro d\équipe !'
            ];
    }
    public function attributes()
    {
        return [
                'idEquipeC9' => 'idEquipeC9'
            ];
    }
}
