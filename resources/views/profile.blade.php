@extends('layout')
@section('container')
<section id="profile">
    <div class="bloc">
        <h2>Mon Profil</h2>
        <img src="img/soulignement.png" alt="" class="soulignement">
        <div>
            <h3>{{ Auth::user()->pseudo }}</h3>
            <img src="storage/avatars/{{ Auth::user()->avatar }}" class="imageProfil"> <br>
            <div id="centrageBouton">
            <div class="tooltip"> <button class="boutons btnBasique" id="image-profil"><span><i
                            class="fas fa-upload"></i></span></button> <span class="tooltiptext">Changer d'image de profil</span>
            </div> 
        </div><br>
            <div class="formulaire-image">
                <form action="/mon-compte" method="post" enctype="multipart/form-data" id="formulaireUpload">
                    @csrf

                    <input type="file" size="60" class="boutonUpload " name="avatar" id="avatarFile" >

                    <button type="submit" class="btn btn-primary" id="boutonEnvoie">Submit</button>
                </form>
            </div><br>
            <div class="bloc-aligner">

                <button class="boutons btnBasique"><span>Changer mon MDP</span></button>
               <button class="boutons btnBasique"> <a href="/deconnexion"><span> Déconnexion</span></a></button>
            </div>
        </div>
        <div id="mesJeux">
            <h3>Mes Jeux</h3>
            <img src="img/soulignement.png" alt="" class="soulignement">
            <table>
                <tr>
                    <td>Nom</td>
                    <td>Statut</td>
                    <td>Actions</td>

                </tr>

                <tr>
                    <td>The Legend of Zelda: Breath of the Wild</td>
                    <td>finis</td>
                    <td><button class="boutons btnBasique"><span>finis</span></button> <br><button
                            class="boutons btnBasique"><span>à finir</span></button></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<script src="js/Main.js"></script>
<script src="js/AffichageBoutonForm.js"></script>
@endsection