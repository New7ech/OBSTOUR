<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barometre extends Model
{
    use HasFactory;
    // protected $table="barometre";
    // public $timestamps = true;
    protected $fillable=[
        "compagnie_id",
        "users_id",
        "trimestre",
        "billetterie_nombre",
        "billetterie_ca",
        "circuit_nombre",
        "circuit_ca",
        "activites_connexes_ca",
        "prevision_climat_affaires",
        "prevision_ca_global",
        "prevision_emplois",
        "sondage_climat_affaires",
        "sondage_nombre_billets",
        "sondage_ca_billetterie",
        "sondage_nombre_circuits",
        "sondage_ca_circuits",
        "sondage_nombre_emplois",
        "facteurs_positifs",
        "facteurs_negatifs"
    ];
    public function compagnie()
    {
        return $this->belongsTo(Compagnie::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function formulairebar()
    {
        return $this->belongsTo(Formulairebar::class);
    }
}
