<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabilletteries extends Model
{
    use HasFactory;
    protected $fillable = [
        "compagnie_id",
        "users_id",
        "mois",
        "trimestre",
        "ca_bil_iata",
        "ca_bil_otr",
        
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
