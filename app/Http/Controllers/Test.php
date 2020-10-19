<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        return view('layout');
    }
    
    public function index() {
        $titre = "Accueil";
        return \view('welcome', ['titre' => $titre]);
    }
    public function jeux() {
        $titre = "Jeux";
        return \view('jeux', ['titre' => $titre]);
    }
    public function profile() {
        $titre = "Profile";
        return \view('profile', ['titre' => $titre]);
    }
    public function inscription() {
        $titre = "Inscription";
        return \view('inscription', ['titre' => $titre]);
    }
    public function contact() {
        $titre = "Contact";
        return \view('contact', ['titre' => $titre]);
    }
    public function connection() {
        $titre = "Connection";
        return \view('connection', ['titre' => $titre]);
    }
    public function prochainement() {
        $titre = "Prochainement";
        return \view('prochainement', ['titre' => $titre]);
    }
}
