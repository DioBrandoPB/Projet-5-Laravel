<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Liste;
class CompteController extends Controller
{
    public function accueil() {

        if(auth()->guest()) {
            return redirect('/connexion')->withErrors([
                'email' => "Vous devez être connecté pour voir cette page."
            ]);
        }
        $titre = "Profil";
        return \view('profile', ['titre' => $titre]);
    }

    public function deconnexion () {

        auth()->logout();
        return redirect('/');
    }

    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $utilisateur = Auth::user();

        $avatarName = $utilisateur->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $utilisateur->avatar = $avatarName;
        $utilisateur->save();

        return back()
            ->with('success','You have successfully upload image.');

    }
}
