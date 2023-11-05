<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
/* 'idParticipant' => '22200942',
                'NomP' => 'Rahir',
                'PrenomP' =>  'Rémi',
                'DateDeNaissance'=> '2004-09-22',
                'NumeroEtudiant'=> '22200942',
                'pdp' => 'img/participant/remirahir.png',
                'idComposante' => '1'*/
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => ['required','unique'],
            'NomP' => ['required'],
            'PrenomP' => ['required'],
            'DateDeNaissance' => ['required'],
            'NumeroEtudiant' => ['required','unique'],
            'idComposante' => ['required']

        ];
    }
    public function messages()
    {
        return [
                'id.required' => 'Il faut spécifier un numéro étudiant !',
                'NomP.required' => 'Il faut spécifier un nom de famille !',
                'PrenomP.required' => 'Il faut spécifier un prénom !',
                'DateDeNaissance.required' => 'Il faut spécifier une date de naissance au format YYYY-MM-JJ !',
                'NumeroEtudiant.required' => 'Il faut spécifier un numéro étudiant (une deuxième fois) !',
                'idComposante.required' => 'Il faut spécifier une composante !',
                'idParticipant.unique' => 'le numéro saisi a déjà été inscrit !',
                'idNumeroEtudiant.unique' => 'le numéro saisi a déjà été inscrit !'
            ];
    }
    public function attributes()
    {
        return [
            'id' =>'id',
            'NomP' => 'NomP',
            'PrenomP' => 'PrenomP' ,
            'DateDeNaissance' => 'DateDeNaissance',
            'NumeroEtudiant' =>'NumeroEtudiant',
            'idComposante' => 'idComposante'
            ];
    }
}
