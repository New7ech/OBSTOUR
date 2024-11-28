<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vactivite extends Model
{
    use HasFactory;
    protected $fillable = [
        "compagnie_id",
        "users_id",
        "mois",
        "trimestre",
        "nbcir_int_etat",
        "nbtour_int_etat",
        "nbcir_intrn",
        "nbtour_intrn",
        "nbexcs_exc",
        "nbexcst_exc"
        
    ];
    public function formulaire()
    {
        return $this->belongsTo(Formulaire::class);
    }

    public function compagnie()
    {
        return $this->belongsTo(Compagnie::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
