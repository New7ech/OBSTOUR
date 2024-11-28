<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateZoneRequest extends FormRequest
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
            'cur_intr_etat_resi_nat' => 'required|integer',
            'cur_intr_etat_resi_exp' => 'required|integer',
            'cur_intr_etat_nonresi_bf' => 'required|integer',
            'cur_intr_etat_nonresi_afr' => 'required|integer',
            'cur_intr_etat_nonresi_amrq' => 'required|integer',
            'cur_intr_etat_nonresi_asi' => 'required|integer',
            'cur_intr_etat_nonresi_erop' => 'required|integer',
            'cur_intr_etat_otr' => 'required|integer',
            'cur_intr_resi_nat' => 'required|integer',
            'cur_intr_resi_exp' => 'required|integer',
            'cur_intr_nonresi_bf' => 'required|integer',
            'cur_intr_nonresi_afr' => 'required|integer',
            'cur_intr_nonresi_amrq' => 'required|integer',
            'cur_intr_nonresi_asi' => 'required|integer',
            'cur_intr_nonresi_erop' => 'required|integer',
            'cur_intr_otr' => 'required|integer',
            'cur_exct_resi_nat' => 'required|integer',
            'cur_exct_resi_exp' => 'required|integer',
            'cur_exct_nonresi_bf' => 'required|integer',
            'cur_exct_nonresi_afr' => 'required|integer',
            'cur_exct_nonresi_amrq' => 'required|integer',
            'cur_exct_nonresi_asi' => 'required|integer',
            'cur_exct_nonresi_erop' => 'required|integer',
            'cur_exct_otr' => 'required|integer'
        ];
    }
}
