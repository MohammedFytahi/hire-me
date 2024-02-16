<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Entreprise;
use App\Models\Offre;

use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
  public function index(){
    $nombreUtilisateurs = User::count();
    $nombreEntreprises = Entreprise::count();
    $nombreOffres = Offre::count();
    return view('statistiques.index', compact('nombreUtilisateurs', 'nombreEntreprises', 'nombreOffres'));
  }
}
