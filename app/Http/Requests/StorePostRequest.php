<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'author' => 'required|string|min:3|max:255',
            'price' => 'required|numeric',
        ];
    }

    // creo la funzione che traduca i messaggi di errore
    public function messages()
    {
        return [
            'title.min' => 'il nome non può essere minore di 3 caratteri',
            'author.min' => 'il nome dell/autore non può essere minore di 3 caratteri',
            'price' => 'devi insesrire un prezzo ',
        ];
    }
}
