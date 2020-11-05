<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Liste;

class ListeController extends Controller
{
    public function ajout(){

        $liste = new Liste();

        $liste->nom = request('nom');
        $liste->utilisateur_id = Auth::id();
        
        $liste->save();

        return redirect('/prochainement');

    }

    

    
}
