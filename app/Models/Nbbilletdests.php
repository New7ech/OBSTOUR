<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nbbilletdests extends Model
{
    use HasFactory;

    protected $fillable=[
        "compagnie_id",
        "users_id",
        "mois",
        "trimestre",
        "iata_erop",
        "iata_asi",
        "iata_afr",
        "iata_amrq",
        "autr_erop",
        "autr_asi",
        "autr_afr",
        "autr_amrq"
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
