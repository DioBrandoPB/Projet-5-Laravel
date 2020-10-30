<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
class ConnexionController extends Controller
{
    public function formulaire()
    {
        $titre = "connexion";
        return view('connexion', ['titre' => $titre]);
    }

    public function traitement()
    {
        $titre = "connexion";
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
    
        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($resultat) {
            return redirect('/mon-compte');
        }

        return back()->withInput()->withErrors([
            'email' => 'identifiants incorrects'
        ]);
    }
}
