<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulairebar extends Model
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
    public function barometres()
    {
        return $this->hasMany(Barometre::class);
    }
}
