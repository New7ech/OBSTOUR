<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNbbilletdestsRequest extends FormRequest
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
            'iata_erop' => 'required|integer',
            'iata_asi' => 'required|integer',
            'iata_afr' => 'required|integer',
            'iata_amrq' => 'required|integer',
            'autr_erop' => 'required|integer',
            'autr_afr' => 'required|integer',
            'autr_amrq' => 'required|integer',
            'autr_asi' => 'required|integer',

        ];
    }
}
