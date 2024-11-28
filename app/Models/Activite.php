<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    protected $table="activite";

    protected $fillable=[
        "compagnie_id",
        "mois",
        "users_id",
        "trimestre",
        "volume_conference",
        "chiffre_conference",
        "volume_reservation",
        "chiffre_reservation",
        "volume_location",
        "chiffre_location",
        "volume_pelerinage",
        "chiffre_pelerinage",
        "volume_colonie",
        "chiffre_colonie",
        "volume_billetterie",
        "chiffre_billetterie",
        "volume_autres",
        "chiffre_autres"
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
