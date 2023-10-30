<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEpreuveRequest extends FormRequest
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
                'title' => ['required', 'max:100'],
                'description' => ['required'],
                'img' => ['required', 'min:0']
            ];
     
    }
    public function messages()
    {
        return [
                'title.required' => 'Il faut spécifier un intitulé',
                'description.required' => 'Il faut spécifier une description',
                'img.required' => 'Il faut spécifier une image'
            ];
    }
    public function attributes()
    {
        return [
                'title' => 'title',
                'description' => 'description',
                'img' => 'img'  
            ];
    }
}
