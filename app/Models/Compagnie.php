<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compagnie extends Model
{
    use HasFactory;

    protected $fillable=[
        "trimestre",
        "denomination",
        "tel",
        "categorie",
        "site",
        "addr",
        "email",
        "periode"
    ];
    public function formulaires()
    {
        return $this->hasMany(Formulaire::class);
    }
    public function mensuelform()
    {
        return $this->hasMany(mensuelform::class);
    }
    public function mensuels()
    {
        return $this->hasMany(Mensuel::class);
    }
    public function barometres()
    {
        return $this->hasMany(Barometre::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }


    public function cacircuits()
    {
        return $this->hasMany(Cacircuits::class, 'users_id');
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
    public function emplois()
    {
        return $this->hasMany(Emploi::class);
    }
    public function nbbilletdests()
    {
        return $this->hasMany(Nbbilletdests::class);
    }
    public function vactivites()
    {
        return $this->hasMany(Vactivite::class);
    }
    public function zones()
    {
        return $this->hasMany(Zone::class);
    }

}
