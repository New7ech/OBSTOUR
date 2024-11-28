<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;

    protected $fillable=[
        "compagnie_id",
        "users_id",
        "mois",
        "trimestre",
        "cadrsup_nat_hom",
        "cadrsup_nat_fem",
        "cadrsup_otrnat_hom",
        "cadrsup_otrnat_fem",
        "cadrmoy_nat_hom",
        "cadrmoy_nat_fem",
        "cadrmoy_otrnat_hom",
        "cadrmoy_otrnat_fem",
        "emp_nat_hom",
        "emp_nat_fem",
        "emp_otrnat_hom",
        "emp_otrnat_fem",
        "man_nat_hom",
        "man_nat_fem",
        "man_otrnat_hom",
        "man_otrnat_fem",
        "tem_nat_hom",
        "tem_nat_fem",
        "tem_otrnat_hom",
        "tem_otrnat_fem"
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
