<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cacircuits extends Model
{
    use HasFactory;
    protected $fillable = [
        "compagnie_id",
        "users_id",
        "mois",
        "trimestre",
        "ca_cur_int_etat",
        "ca_cur_int",
        "ca_cur_excu"
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
