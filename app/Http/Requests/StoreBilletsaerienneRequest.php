<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBilletsaerienneRequest extends FormRequest
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
            'compagnie_id' => 'integer',
            'mois' => 'integer',
            'users_id' => 'integer',
            'trimestre'  => 'string',
            'bil_bf'  => 'required|integer',
            'bil_fr'  => 'required|integer',
            'bil_sar'  => 'required|integer',
            'bil_ivr'  => 'required|integer',
            'bil_tun'  => 'required|integer',
            'bil_colm'  => 'required|integer',
            'bil_roy'  => 'required|integer',
            'bil_etio'  => 'required|integer',
            'bil_alg'  => 'required|integer',
            'bil_tur'  => 'required|integer',
            'bil_ask'  => 'required|integer',
            'bil_bru'  => 'required|integer',
            'bil_autr'  => 'required|integer'
        ];
    }
}
