<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;

use App\Models\Utilisateur;

use Spatie\LaravelPdf\Facades\Pdf;

class PDFController extends Controller
{

    public function index()
    {
        $cv = Cv::where('user_id', Auth::id())->firstOrFail();
        $user = Auth::user();
        $utilisateur = Utilisateur::where('user_id', Auth::id())->first();
        $cursuses = $cv->cursuses;
        $languages = $cv->languages;
        $experiences = $cv->experiences;
        $competences = $cv->competences;
       
    
        return view('cv.cv', compact('user', 'cursuses', 'languages', 'experiences', 'competences', 'utilisateur'));
    }
    
    public function generatePDF()
    {
       
        $cv = Cv::where('user_id', Auth::id())->firstOrFail();
        $user = Auth::user();
        $utilisateur = Utilisateur::where('user_id', Auth::id())->first();
        $cursuses = $cv->cursuses;
        $languages = $cv->languages;
        $experiences = $cv->experiences;
        $competences = $cv->competences;

        $data = [
            'user' => $user,
            'utilisateur' => $utilisateur,
            'cursuses' => $cursuses,
            'languages' => $languages,
            'experiences' => $experiences,
            'competences' => $competences
        ];
    
        // $data = compact('user', 'cursuses', 'languages', 'experiences', 'competences', 'utilisateur');
        
        return Pdf::view('cv.cv', ['user' => $user, 'utilisateur' => $utilisateur, 'cursuses' => $cursuses, 'languages' => $languages, 'experiences' => $experiences, 'competences' => $competences])->format('a4')->download('cv.pdf');
       
        // $pdf = PDF::loadView('cv.cv', $data);
    
        // return $pdf->download('sample.pdf');
    }
    

  
}
