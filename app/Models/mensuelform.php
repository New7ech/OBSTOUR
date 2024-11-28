<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensuelform extends Model
{
    use HasFactory;
    protected $fillable = [
        'compagnie_id',
        'formulaire_id',
        'trimestre',
        'mois',
    ];
    public function formulaires()
    {
        return $this->hasOne(Formulaire::class, 'mensuels_id');
    }
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
        return $this->hasOne(Activite::class, 'mensuels_id');
    }
    public function billetsaeriennes()
    {
        return $this->hasOne(Billetsaerienne::class, 'mensuels_id');
    }
    public function cabilletteries()
    {
        return $this->hasOne(Cabilletteries::class, 'mensuels_id');
    }
    public function cacircuits()
    {
        return $this->hasOne(Cacircuits::class, 'mensuels_id');
    }
    public function emploies()
    {
        return $this->hasOne(Emploi::class, 'mensuels_id');
    }
    public function nbbilletdests()
    {
        return $this->hasOne(Nbbilletdests::class, 'mensuels_id');
    }
    public function vactivite()
    {
        return $this->hasOne(Vactivite::class, 'mensuels_id');
    }
    public function zone()
    {
        return $this->hasOne(Zone::class, 'mensuels_id');
    }

}
