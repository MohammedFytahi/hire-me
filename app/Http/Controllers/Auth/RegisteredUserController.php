<?php

namespace App\Http\Controllers\Auth;

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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
     
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required',
            'image' => ['required', 'image', 'mimes:png,svg,jpg,jpeg', 'max:10240']
            
        ]);
    
       
        $image = $request->file('image');
        
        
        $imagePath = $image->store('images', 'public');
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'image' => $imagePath, // Enregistrez le chemin de l'image dans la base de données
        ]);
    
        event(new Registered($user));
    
        Auth::login($user);
    
        return redirect(RouteServiceProvider::HOME);
    }
    

    // public function store2(Request $request): RedirectResponse
    // {
     
    //     $request->validate([
    //         'titre' => ['required', 'string', 'max:255'],
    //         'poste_actuel' => ['required', 'string', 'max:255'],
    //         'industrie' => ['required', 'string'],
    //         'adresse' => ['required', 'string', 'max:255'],
    //         'telephone' => ['required', 'string', 'max:20', 'regex:/^\+?[0-9]+$/'], // Limite de 20 caractères et accepte les chiffres uniquement
    //         'autre_contact' => ['required', 'string', 'max:255'],
    //         'a_propos' => ['required', 'string'],
    //         'cv' => ['required', 'string', 'max:255'],
    //     ]);
        
    
    
    //     $user = User::create([
    //         'titre' => $request->titre,
    //         'poste_actuel' => $request->poste_actuel,
    //         'industrie' => $request->industrie,
    //         'adresse' => $request->adresse,
    //         'telephone' => $request->telephone,
    //         'autre_contact' => $request->autre_contact,
    //         'a_propos' => $request->a_propos,
    //         'cv' => $request->cv,
            
    //     ]);
    
    //     event(new Registered($user));
    
    //     Auth::login($user);
    
    //     return redirect(RouteServiceProvider::HOME);
    // }
    
}
