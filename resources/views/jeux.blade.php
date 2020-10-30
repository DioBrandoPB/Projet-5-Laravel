@extends('layout')
@section('container')
<div class="content">
    <ul>
        @if (request('game'))
        @foreach ($response->results as $game)
        <li><a href="/games/{{ $game->slug }}">{{ $game->name }}</a></li>
        @endforeach
        @endif
    </ul>
</div>
<section id="jeux">
    <div class="bloc">
        <h2>Parcourir les jeux</h2>
        <img src="img/soulignement.png" alt="" class="soulignement">
        <div class="recherche">
            <input type="search" id="jeuxRecherche" name="recherche">
            <button class="boutons btnBasique"><span><i class="fas fa-search"></i></span></button>

            <div class="rechercheImg">
                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>

                </figure>

                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>
                </figure>
                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>
                </figure>
                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>
                </figure>
                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>
                </figure>
                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>
                </figure>
                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>
                </figure>
                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>
                </figure>
                <figure class="imgFigure">
                    <img src="img/imgtest.jpg" alt="image jeu">
                    <figcaption>Titre jeux </figcaption>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis odio sequi eius ad velit rem
                        ducimus pariatur, consequuntur saepe a, quos neque molestiae nostrum eveniet perspiciatis, quas
                        vitae similique est?</p>
                    <div>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finir" />à terminer</label>
                        <label>
                            <input type="checkbox" class="radio" value="1" name="finis" />est terminer</label>

                    </div>
                </figure>
            </div>
        </div>
</section>

@endsection