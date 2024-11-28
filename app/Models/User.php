<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'compagnie_id',
        'roles_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function compagnie()
    {
        return $this->belongsTo(Compagnie::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function formulaires()
    {
        return $this->hasMany(Formulaire::class);
    }

    public function cacircuits()
    {
        return $this->hasMany(Cacircuits::class, 'users_id');
    }
    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
    public function barometres()
    {
        return $this->hasMany(Barometre::class);
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
