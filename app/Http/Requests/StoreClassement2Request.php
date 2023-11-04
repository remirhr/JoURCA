<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassement2Request extends FormRequest
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
            'idEquipeC2' => ['required','unique']
        ];
    }
    public function messages()
    {
        return [
                'idEquipeC2.required' => 'Il faut spécifier un numéro d\équipe !'
                ,
                'idEquipeC2.unique' => 'le numéro d\équipe est déjà dans le classement !'
            ];
    }
    public function attributes()
    {
        return [
                'idEquipeC2' => 'idEquipeC2'
            ];
    }
}
