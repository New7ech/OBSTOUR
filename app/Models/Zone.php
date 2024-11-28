<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $fillable=[
        "compagnie_id",
        "users_id",
        "mois",
        "trimestre",
        "cur_intr_etat_resi_nat",
        "cur_intr_etat_resi_exp",
        "cur_intr_etat_nonresi_bf",
        "cur_intr_etat_nonresi_afr",
        "cur_intr_etat_nonresi_amrq",
        "cur_intr_etat_nonresi_asi",
        "cur_intr_etat_nonresi_erop",
        "cur_intr_etat_otr",
        "cur_intr_resi_nat",
        "cur_intr_resi_exp",
        "cur_intr_nonresi_bf",
        "cur_intr_nonresi_afr",
        "cur_intr_nonresi_amrq",
        "cur_intr_nonresi_asi",
        "cur_intr_nonresi_erop",
        "cur_intr_otr",
        "cur_exct_resi_nat",
        "cur_exct_resi_exp",
        "cur_exct_nonresi_bf",
        "cur_exct_nonresi_afr",
        "cur_exct_nonresi_amrq",
        "cur_exct_nonresi_asi",
        "cur_exct_nonresi_erop",
        "cur_exct_otr"
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
