<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UtilisateurController extends Controller
{



    public function showform(): View
    {
        
        return view('profile.profilesection');
    }
     public function store(Request $request)
    {
        // $request->validate([
           
        // ]);

        // Create a new Utilisateur instance
        $utilisateur = new Utilisateur();

        // Associate the utilisateur with the authenticated user
        $utilisateur->user_id = Auth::id();
        

        // Assign other attributes from the request
        $utilisateur->titre = $request->titre;
        $utilisateur->poste_actuel = $request->poste_actuel;
        $utilisateur->industrie = $request->industrie;
        $utilisateur->adresse = $request->adresse;
        $utilisateur->telephone = $request->telephone;
        $utilisateur->autre_contact = $request->autre_contact;
        $utilisateur->a_propos = $request->a_propos;
        $utilisateur->cv = $request->cv;

        // Save the utilisateur
        $utilisateur->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Utilisateur created successfully!');
    }
}
