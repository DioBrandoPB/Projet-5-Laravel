<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $titre }} </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">

</head>
<nav class="nav">
    <div class="container">
        <div class="logo">

            <a href="/"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="menuPrincipal" class="listePrincipal">
            <ul class="navLiens">
                <li><a href="jeux">Jeux</a></li>
                <li><a href="prochainement">Prochainement</a></li>
                <li><a href="contact">Contact</a></li>
                <div class="menuDeroulant">
                    <span class="menuBtn"><i class="far fa-user"></i>
                        <div class="index">
                            <li>
                                <div class="sousMenu"><a href="connection">Connexion</a><br></div>
                            </li>
                            <li>
                                <div class="sousMenu"><a href="inscription">Inscription</a></div>
                            </li>
                        </div>
                    </span>
                </div>
            </ul>
        </div>
        <span class="navResponsive">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </div>
</nav>
@yield('container')
<footer>
    <div id="iconesFooter"><span class="social"><i class="fab fa-twitter"></span></i><i class="fab fa-instagram"></i><i
            class="fab fa-facebook"></i>
    </div>
</footer>

<script>
    // smooth scroll
    (function() {
        'use strict';
        // Feature Test
        if ( 'querySelector' in document && 'addEventListener' in window && Array.prototype.forEach ) {
            // Function to animate the scroll
            var smoothScroll = function (anchor, duration) {
                // Calculate how far and how fast to scroll
                var startLocation = window.pageYOffset;
                var endLocation = anchor.offsetTop;
                var distance = endLocation - startLocation;
                var increments = distance/(duration/16);
                var stopAnimation;
                // Scroll the page by an increment, and check if it's time to stop
                var animateScroll = function () {
                    window.scrollBy(0, increments);
                    stopAnimation();
                };
                // If scrolling down
                if ( increments >= 0 ) {
                    // Stop animation when you reach the anchor OR the bottom of the page
                    stopAnimation = function () {
                        var travelled = window.pageYOffset;
                        if ( (travelled >= (endLocation - increments)) || ((window.innerHeight + travelled) >= document.body.offsetHeight) ) {
                            clearInterval(runAnimation);
                        }
                    };
                }
                // Loop the animation function
                var runAnimation = setInterval(animateScroll, 16);
            };
            // Define smooth scroll links
            var scrollToggle = document.querySelectorAll('.scroll');
            // For each smooth scroll link
            [].forEach.call(scrollToggle, function (toggle) {
                // When the smooth scroll link is clicked
                toggle.addEventListener('click', function(e) {
                    // Prevent the default link behavior
                    e.preventDefault();
                    // Get anchor link and calculate distance from the top
                    var dataID = toggle.getAttribute('href');
                    var dataTarget = document.querySelector(dataID);
                    var dataSpeed = toggle.getAttribute('data-speed');
                    // If the anchor exists
                    if (dataTarget) {
                        // Scroll to the anchor
                        smoothScroll(dataTarget, dataSpeed || 500);
                    }
                }, false);
            });
        }
    })();
</script>