<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompagnieRequest extends FormRequest
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
            'denomination' => 'required|string',
            'tel' => 'required|string|max:13',
            'categorie' => 'required|string',
            'site' => 'required|string|max:255',
            'addr' => 'required|string|max:255',
            'email' => 'required|email',
            'periode' => 'required|string'
        ];
    }
}
