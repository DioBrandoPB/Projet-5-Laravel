
@extends('layout')
@section('container')
<section id="connection">

    <div class="bloc">
        <div class="contactFormContainer">
            <div class="form">
                <h2>Posez nous vos questions</h2>
                <img src="img/soulignement.png" alt="" class="soulignement">
                <form class="register-form">
                    <input type="text" placeholder="Pseudo" />
                    <input type="text" placeholder="Sujet" />
                    <input type="text" placeholder="E-Mail" />
                    <textarea name="message" id="contactMessage" cols="30" rows="10"></textarea>
                    <button class="boutons btnBasique"><span>Envoyé</span></button>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection
