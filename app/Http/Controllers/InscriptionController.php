<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    
    {
        $titre = "Inscription";
        return view('inscription',['titre' => $titre]);
    }

    public function traitement()
    {

        request()->validate([
            'pseudo' => ['unique:utilisateurs','required'],
            'email' => ['unique:utilisateurs','required', 'email'],
            'password' => ['required'],
        ]);

        $utilisateur = Utilisateur::create([
            'pseudo' => request('pseudo'),
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        return "Nous avons reçu votre email qui est " . request('email') ;
    }

    
}