<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCacircuitsRequest extends FormRequest
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
            'ca_cur_int_etat' => 'required|numeric|min:0',
            'ca_cur_int' => 'required|numeric|min:0',
            'ca_cur_excu' => 'required|numeric|min:0'
        ];
    }
}
