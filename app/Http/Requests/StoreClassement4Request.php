<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassement4Request extends FormRequest
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
            'idEquipeC4' => ['required','unique']
        ];
    }
    public function messages()
    {
        return [
                'idEquipeC4.required' => 'Il faut spécifier un numéro d\équipe !',
                'idEquipeC4.unique' => 'le numéro d\équipe est déjà dans le classement !'
            ];
    }
    public function attributes()
    {
        return [
                'idEquipeC4' => 'idEquipeC4'
            ];
    }
}
