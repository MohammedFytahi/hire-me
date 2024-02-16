<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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


    public function showCV()
{
    $utilisateur = Utilisateur::where('user_id', Auth::id())->first();

    return view('cv.cv', compact('utilisateur'));
}
}
