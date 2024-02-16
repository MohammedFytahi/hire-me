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
        $jobs = JobOffer::with('company')->get();
        
        // Pass the $jobs variable to the view
        return view('job_offers.create', compact('jobs'));
    }
    
    public function show()
    {
        $jobs = JobOffer::with('company')->get();
        
        // Pass the $jobs variable to the view
        return view('job_offers.index', compact('jobs'));
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
        
        // Fetch all job offers
        $jobs = JobOffer::all(); 
        
        // Pass the $jobs variable to the 'job_offers.index' view
        return view('job_offers.index', compact('jobs'));
    }
    

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Utilisez la méthode where() pour filtrer les offres d'emploi en fonction du mot-clé
        $jobs = JobOffer::where('title', 'like', '%'.$keyword.'%')
                    ->orWhere('description', 'like', '%'.$keyword.'%')
                    ->get();

        // Retournez la vue avec les offres d'emploi filtrées
        return view('job_offers.search', compact('jobs'));
    }


    public function destroy(JobOffer $job)
    {
        // Vérifiez si l'utilisateur connecté est le propriétaire de l'offre d'emploi
        if ($job->user_id === auth()->id()) {
            // Supprimez l'offre d'emploi
            $job->delete();
            return response()->json(['message' => 'Offre d\'emploi supprimée avec succès']);
        } else {
            // Si l'utilisateur n'est pas autorisé à supprimer cette offre, retournez une réponse non autorisée
            return response()->json(['message' => 'Vous n\'êtes pas autorisé à supprimer cette offre d\'emploi'], 403);
        }
    }
}
    