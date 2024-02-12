<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Company;


class CompanyController extends Controller
{
    public function showform(): View
    {
        
        return view('company.index');
    }

    // public function store(Request $request)
    // {
       
    //     // Vérifiez si un fichier logo a été téléchargé
      
           
      
    //     $logo = $request->file('logo');
    //     $logopath = $logo->store('images', 'public');
    
    //     // Créer une nouvelle instance de la classe Company
    //     $company = new Company();
    
    //     // Assignez les autres attributs à partir de la requête
    //     $company->name = $request->name;
    //     $company->logo = $logopath;
    //     $company->slogan = $request->slogan;
    //     $company->industry = $request->industry;
    //     $company->description = $request->description;
      
    //     // Enregistrez la société
    //     $company->save();
        
    
    //     // Rediriger ou renvoyer une réponse
    //     return redirect()->back()->with('success', 'Company created successfully!');
    // }
    



    public function store(Request $request): RedirectResponse
    {
   
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'image', 'mimes:png,svg,jpg,jpeg', 'max:10240'],
            'slogan' => ['required', 'string', 'max:255'],
            'industry' => 'required',
            'description' => 'required',
            
        ]);
    
       
        $logo = $request->file('logo');
        
        
        $logoPath =$logo->store('logos', 'public');
    
        $user = Company::create([
            'name' => $request->name,
            'logo' => $request->logo,
            'slogan' => $request->slogan,
            'industry' => $request->role,
            'description' => $logoPath, 
        ]);
    
      
    
       
    
        return redirect()->back()->with('success', 'Company created successfully!');
    }

}
