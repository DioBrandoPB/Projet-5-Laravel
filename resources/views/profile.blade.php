
        @extends('layout')
        @section('container')
        <section id="profile">
            <div class="bloc">
                <h2>Mon Profil</h2>
                <img src="img/soulignement.png" alt="" class="soulignement">
                <img src="img/imgtest.jpg" alt="image de profil" class="imageProfil">
                <h3>Pseudo</h3>
                <button class="boutons btnBasique"><span>Changer mon MDP</span></button>
    
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
                            <td><button class="boutons btnBasique"><span>finis</span></button> <br><button class="boutons btnBasique"><span>à finir</span></button></td>
                        </tr></table>
                </div>
            </div>
        </section>
        @endsection
        