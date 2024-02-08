<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'user_id',
        'poste_actuel',
        'industrie',
        'adresse',
        'telephone',
        'autre_contact',
        'a_propos',
        'cv',
    ];
}
