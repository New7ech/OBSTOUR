<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Role;

class UpdateRoleRequest extends FormRequest
{
    /**
     * The role being updated.
     *
     * @var \Spatie\Permission\Models\Role
     */
    protected $role;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Vous pouvez ajouter votre logique d'autorisation ici.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255,' . $this->role->id,
        ];
    }

    /**
     * Set the role instance.
     *
     * @param \Spatie\Permission\Models\Role $role
     */
    public function setRole(Role $role)
    {
        $this->role = $role;
    }

    /**
     * Get the role instance.
     *
     * @return \Spatie\Permission\Models\Role
     */
    public function getRole(): Role
    {
        return $this->role;
    }
}
