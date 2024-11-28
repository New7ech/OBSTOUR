<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmploiRequest extends FormRequest
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
            'cadrsup_nat_hom' => 'required|integer',
            'cadrsup_nat_fem' => 'required|integer',
            'cadrsup_otrnat_hom' => 'required|integer',
            'cadrsup_otrnat_fem' => 'required|integer',
            'cadrmoy_nat_hom' => 'required|integer',
            'cadrmoy_nat_fem' => 'required|integer',
            'cadrmoy_otrnat_hom' => 'required|integer',
            'cadrmoy_otrnat_fem' => 'required|integer',
            'emp_nat_hom' => 'required|integer',
            'emp_nat_fem' => 'required|integer',
            'emp_otrnat_hom' => 'required|integer',
            'emp_otrnat_fem' => 'required|integer',
            'man_nat_hom' => 'required|integer',
            'man_nat_fem' => 'required|integer',
            'man_otrnat_hom' => 'required|integer',
            'man_otrnat_fem' => 'required|integer',
            'tem_nat_hom' => 'required|integer',
            'tem_nat_fem' => 'required|integer',
            'tem_otrnat_hom' => 'required|integer',
            'tem_otrnat_fem' => 'required|integer'
        ];
    }
}
