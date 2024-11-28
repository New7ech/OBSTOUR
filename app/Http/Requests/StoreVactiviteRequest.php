<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVactiviteRequest extends FormRequest
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
            'nbcir_int_etat' => 'required|integer',
            'nbtour_int_etat' => 'required|integer',
            'nbcir_intrn' => 'required|integer',
            'nbtour_intrn' => 'required|integer',
            'nbexcs_exc' => 'required|integer',
            'nbexcst_exc' => 'required|integer'
        ];
    }
}
