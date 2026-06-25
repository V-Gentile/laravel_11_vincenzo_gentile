<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DigimonRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:4',
            'level' => 'required',
            'type' => 'required|min:3',
            'img' => 'required|image'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.min' => 'Per il nome almeno 4 caratteri',
            'level.required' => 'Il livello è obbligatorio',
            'type.required' => 'Il tipo è obbligatorio',
            'type.min' => 'Per il tipo almeno 3 caratteri',
            'img.required' => "L'immagine è obbligatoria",
            'img.image' => 'Il file deve essere di tipo immagine'

        ];
    }
}
