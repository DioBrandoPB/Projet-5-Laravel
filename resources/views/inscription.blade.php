@extends('layout')
@section('container')
<section id="inscription">

    <div class="bloc">
        <div class="formContainer">
            @if( Auth::guest())
            <div class="form">
                <h2>Rejoignez G.N.C</h2>
                <img src="img/soulignement.png" alt="" class="soulignement">
                <form class="register-form" action="/inscription" method="post">
                    {{{ csrf_field() }}}
                    <input type="pseudo" name="pseudo" placeholder="Pseudo" />
                    <input type="password" name="password" placeholder="Mot de passe" />
                    <input type="email" name="email" placeholder="E-Mail" />
                    <button class="boutons btnBasique"><span>Inscription</span></button>
                    <p class="message">Déjà inscrit? <a href="connection">Connectez-vous</a></p>
                </form>
            </div>
            @else
            <div class="center">
                <p>Vous êtes deja connecté, vous ne pouvez pas acceder a cette page</p>
                <button class="boutons btnBasique"><span><a href="/deconnexion"> Déconnexion</span></a></button>
            </div>
            @endif
        </div>
    </div>

</section>

@endsection