<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'phone',
        'email',
        'birthday',
        'ville_id'
    ];

    public function etudiantHasVille()
    {
        return $this->hasOne(Ville::class, 'id', 'ville_id');
    }
}
