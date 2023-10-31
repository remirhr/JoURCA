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
            'NomEquipe' => ['required', 'max:100'],
                'Slogan' => ['required'],
                'idParticipant1' => ['required']
                
                
        ];
    }
    public function messages()
    {
        return [
            'NomEquipe.required' => 'Il faut spécifier un nom',
            'Slogan.required' => 'Il faut spécifier un slogan',
            'idParticipant1.required' => 'Il faut un membre'
            ];
    }
    public function attributes()
    {
        return [
            'NomEquipe' => 'NomEquipe',
            'Slogan' => 'Slogan',
            'idParticipant1' => 'idParticipant1',
            'idParticipant2' => 'idParticipant2',
            'idParticipant3' => 'idParticipant3',
            'idParticipant4' => 'idParticipant4',
            'idParticipant5' => 'idParticipant5',
            'idParticipant6' => 'idParticipant6'
            ];
    }
}
