<?php
namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class JobOfferController extends Controller
{
    public function create()
    {
        return view('job_offers.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'required_skills' => 'required|string',
        'contract_type' => 'required|in:remote,hybrid,full_time',
        'location' => 'required|string|max:255',
    ]);

    // Obtenir l'ID de l'utilisateur actuellement authentifié
    $user_id = Auth::id();

    // Vérifier si l'utilisateur est associé à une entreprise
    $user = User::find($user_id);
    if (!$user->company_id) {
        // Gérer le cas où l'utilisateur n'est pas associé à une entreprise
        // Vous pouvez renvoyer une erreur ou rediriger l'utilisateur vers une page pour créer une entreprise
    }

    // Ajouter le company_id au tableau validé
    $validatedData['company_id'] = $user->company_id;

    // Ajouter le user_id au tableau validé
    $validatedData['user_id'] = $user_id;

    JobOffer::create($validatedData);
    return view('job_offers.index');

    // return redirect()->route('dashboard')->with('success', 'The job offer has been created successfully.');
}

}
    