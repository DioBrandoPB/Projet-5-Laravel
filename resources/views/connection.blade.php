@extends('layout')
@section('container')
<section id="connection">

    <div class="bloc">
        <div class="formContainer">
            <div class="form">
                <h2>Bienvenue chez G.N.C</h2>
                <img src="img/soulignement.png" alt="" class="soulignement">
                <form class="login-form">
                    <input type="text" placeholder="Pseudo" />
                    <input type="password" placeholder="Mot de passe" />
                    <button class="boutons btnBasique"><span>Connection</span></button>
                    <p class="message">Pas inscrit? <a href="inscription">Créer un compte</a></p>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection