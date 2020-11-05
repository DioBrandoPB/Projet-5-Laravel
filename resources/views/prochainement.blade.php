@extends('layout')
@section('container')
<section id="futurJeux">
    <div class="bloc">
        <h2>Prochainement</h2>
        <img src="img/soulignement.png" alt="" class="soulignement">
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
            </figure><figure class="imgFigure">
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
            </figure><figure class="imgFigure">
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
            </figure><figure class="imgFigure">
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
            </figure><figure class="imgFigure">
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
            </figure><figure class="imgFigure">
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
            </figure><figure class="imgFigure">
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
            </figure><figure class="imgFigure">
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
        </div>
    </div>
</section>
<script src="js/Prochainement.js"></script>
<script src="js/Main.js"></script>
@endsection