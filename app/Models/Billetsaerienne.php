<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billetsaerienne extends Model
{
    use HasFactory;

    protected $fillable=[
        "compagnie_id",
        "users_id",
        "mois",
        "trimestre",
        "bil_bf",
        "bil_fr",
        "bil_sar",
        "bil_ivr",
        "bil_tun",
        "bil_colm",
        "bil_roy",
        "bil_etio",
        "bil_alg",
        "bil_tur",
        "bil_ask",
        "bil_bru",
        "bil_autr"
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
