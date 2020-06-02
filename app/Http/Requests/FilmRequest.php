<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titre' => ['required', 'string', 'max:100'],
            'anneeSortie' => ['required', 'year', 'max:2020'],
            'categorie_id' => ['required', 'unsignedBigInteger', 'max:10'],
            'description' => ['required', 'text', 'max:1000'],
        ];
    }
}
