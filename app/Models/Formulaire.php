<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;

    protected $fillable=[
        "compagnie_id",
        "trimestre",
        "users_id",
    ];
    public function compagnie()
    {
        return $this->belongsTo(Compagnie::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
    public function billetsaeriennes()
    {
        return $this->hasMany(Billetsaerienne::class);
    }
    public function cabilletteries()
    {
        return $this->hasMany(Cabilletteries::class);
    }
    public function cacircuits()
    {
        return $this->hasMany(Cacircuits::class);
    }
    public function emploies()
    {
        return $this->hasMany(Emploi::class);
    }
    public function nbbilletdests()
    {
        return $this->hasMany(Nbbilletdests::class);
    }
    public function vactivite()
    {
        return $this->hasMany(Vactivite::class);
    }
    public function zone()
    {
        return $this->hasMany(Zone::class);
    }
}
