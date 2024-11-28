<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActiviteRequest extends FormRequest
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
            'trimestre' => 'string',
            'mois' => 'string',
            'compagnie_id' => 'integer',
            'users_id' => 'integer',
            'volume_conference' => 'required|integer',
            'chiffre_conference' => 'required|integer',
            'volume_reservation' => 'required|integer',
            'chiffre_reservation' => 'required|integer',
            'volume_location' => 'required|integer',
            'chiffre_location' => 'required|integer',
            'volume_pelerinage' => 'required|integer',
            'chiffre_pelerinage' => 'required|integer',
            'volume_colonie' => 'required|integer',
            'chiffre_colonie' => 'required|integer',
            'volume_billetterie' => 'required|integer',
            'chiffre_billetterie' => 'required|integer',
            'volume_autres' => 'required|integer',
            'chiffre_autres' => 'required|integer',
        ];
    }
}
