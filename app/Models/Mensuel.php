<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Mensuel extends Model
{
    use HasFactory;

    protected $table = 'mensuels';

    protected $fillable=[
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
    // Méthode qui vérifie si le Mensuel est en mode "Édition"  
    public function getEditionAttribute() {  
        // Retourne true si vactivite ou cacircuits existe  
        return $this->vactivite != null || $this->cacircuits != null;  
    }  

    // Méthode qui vérifie si le Mensuel est "Renseigné"  
    public function getEstRenseigneAttribute() {  
        // Retourne true seulement si vactivite et cacircuits existent  
        return $this->vactivite != null && $this->cacircuits != null;  
    }  
}
