@extends('layout')
@section('container')
<section id="connection">

    <div class="bloc">
        <div class="formContainer">
            @if( Auth::guest())
            <div class="form">
                <h2>Bienvenue chez G.N.C</h2>
                <img src="img/soulignement.png" alt="" class="soulignement">
                <form class="login-form" action="/connexion" method="post" class="section">
                    {{ csrf_field() }}
                    
                    @if($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"/>
                    <input type="password" name="password" placeholder="Mot de passe" />
                    @if($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    <button class="boutons btnBasique" type="submit"><span>Connection</span></button>
                    <p class="message">Pas inscrit? <a href="inscription">Créer un compte</a></p>
                    @else
       <div class="center">
<p>Vous êtes deja connecté, vous ne pouvez pas acceder a cette page</p>
<button class="boutons btnBasique"><span><a href="/deconnexion"> Déconnexion</span></a></button>
</div>
                    @endif
                </form>
            </div>
        </div>
    </div>

</section>
@endsection