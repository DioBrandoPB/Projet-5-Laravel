@extends('layout')
@section('container')

<section id="futurJeux">
    <div class="bloc">
        <h2>Jeux</h2>
        <img src="img/soulignement.png" alt="" class="soulignement">
        <div class="rechercheJeux">
            <input type="text" id="jeux" placeholder="Rechercher un Jeux" />
            <button id="soumettre" class="boutons btnBasique"><span><i class="fas fa-search"></i></span></button>
        </div>
        <div class="blocImgRecherche">
            <div class="blocImg">
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
                <figure class="imgFigure">
                    <form class="register-form" action="/ajout" method="post">
                        {{{ csrf_field() }}}
                        <img src="img/imgtest.jpg" alt="image jeu" class="images">
                        <figcaption>
                            <input type="text" name="nom" class="jeuxForm" readonly />
                            <p><a href="" title="Ajouter à ma liste"><button class="ajoutListe"><i
                                            class="fas fa-plus"></i></button></a></p>
                            <p><span class="datedesortie"></span></p>
                        </figcaption>
                    </form>
                </figure>
            </div>
        </div>
    </div>

</section>
<script src="js/Jeux.js"></script>
<script src="js/Main.js"></script>
@endsection