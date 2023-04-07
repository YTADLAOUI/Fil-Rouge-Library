<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LiverValidation extends FormRequest
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
            'titre' => 'required|string|max:255',
            'datePublication' => 'required|date',
            'quantite_total' => 'required|int',
            'quantite_calcul'=>'required|int',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categories_id' => 'required|int',
            'auteure_id' => 'required|int',
        ];
    }
}
