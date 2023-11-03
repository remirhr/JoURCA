<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassement7Request extends FormRequest
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
            'idEquipeC7' => ['required']
        ];
    }
    public function messages()
    {
        return [
                'idEquipeC7.required' => 'Il faut spécifier un numéro d\équipe !'
            ];
    }
    public function attributes()
    {
        return [
                'idEquipeC7' => 'idEquipeC7'
            ];
    }
}
