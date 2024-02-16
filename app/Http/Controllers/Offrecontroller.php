<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Offrecontroller extends Controller
{
    public function index(){
        return view('offre.form');
    }
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'compétences_requises' => 'required|string',
            'type_contrat' => 'required|string',
            'emplacement' => 'required|string',
        ]);
    
        // Check if the authenticated user is associated with an entreprise
        if (auth()->user()->entreprise) {
            // Create a new Offre instance and fill it with the validated data
            $offre = new Offre();
            $offre->entreprise_id = auth()->user()->entreprise->id;
            $offre->titre = $validatedData['titre'];
            $offre->description = $validatedData['description'];
            $offre->compétences_requises = $validatedData['compétences_requises'];
            $offre->type_contrat = $validatedData['type_contrat'];
            $offre->emplacement = $validatedData['emplacement'];
    
            // Save the offre
            $offre->save();
    
            // Redirect back with success message
            return redirect()->back()->with('success', 'Job offer created successfully!');
        } else {
            // Redirect back with error message if the user is not associated with an entreprise
            return redirect()->back()->with('error', 'User is not associated with an entreprise.');
        }
    }
    


    public function show() {
        $userRole = Auth::user()->role;
    
        if ($userRole === 'entreprise' && Auth::user()->entreprise) {
            $offres = Auth::user()->entreprise->offres;
        } else {
            $offres = Offre::all();
        }
    
        return view('offre.index', compact('offres'));
    }
    

public function postuler(Request $request, $offreId)    
{
    // Find the offer by its ID
    $offre = Offre::findOrFail($offreId);

    // Associate the authenticated user with the offer
    $user = auth()->user();
    $user->offres()->attach($offreId);

    // Respond with a success message
    return response()->json(['message' => 'applyed with seccus']);
}
public function destroy($id)
{
    $offre = Offre::findOrFail($id);
    $offre->delete();

    // Rediriger vers une page appropriée après la suppression
    return redirect()->back()->with('success', 'Offre supprimée avec succès!');
}
}
