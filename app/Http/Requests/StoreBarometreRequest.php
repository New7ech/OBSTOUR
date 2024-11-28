<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBarometreRequest extends FormRequest
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
            'compagnie_id' => 'integer',
            'users_id' => 'integer',
            'billetterie_nombre' => 'required|integer',
            'billetterie_ca' => 'required|numeric|min:0',
            'circuit_nombre' => 'required|integer',
            'circuit_ca' => 'required|numeric|min:0',
            'activites_connexes_ca' => 'required|numeric|min:0',
            'prevision_climat_affaires' => 'required|string',
            'prevision_ca_global' => 'required|string',
            'prevision_emplois' => 'required|string',
            'sondage_climat_affaires' => 'required|string',
            'sondage_nombre_billets' => 'required|string',
            'sondage_ca_billetterie' => 'required|string',
            'sondage_nombre_circuits' => 'required|string',
            'sondage_ca_circuits' => 'required|string',
            'sondage_nombre_emplois' => 'required|string',
            'facteurs_positifs' => 'required|string',
            'facteurs_negatifs' => 'required|string'
        ];
    }
}
