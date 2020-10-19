
        @extends('layout')
        @section('container')
        <section id="inscription">

            <div class="bloc">
                <div class="formContainer">
                    <div class="form">
                        <h2>Rejoignez G.N.C</h2>
                        <img src="img/soulignement.png" alt="" class="soulignement">
                        <form class="register-form">
                            <input type="text" placeholder="Pseudo" />
                            <input type="password" placeholder="Mot de passe" />
                            <input type="textarea" placeholder="E-Mail" />
                            <button class="boutons btnBasique"><span>Inscription</span></button>
                            <p class="message">Déjà inscrit? <a href="connection">Connectez-vous</a></p>
                        </form>
                    </div>
                </div>
            </div>

        </section>
            
        @endsection
        