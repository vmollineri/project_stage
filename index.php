<?php
$hrefIndex = 'index.php';
$hrefConnexion = 'view/view_connexion.php';
$hrefInscription = 'view/view_inscription.php';
$hrefDeconnexion = 'view/view_deconnexion.php';
$hrefProfile = 'view/view_profile.php';

session_start();
require('connexionBdd.php');
include('view/view_header.php');
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="modele/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">

    <title>Bienvenue sur l'accueil, Jérémie Carin - Podologue & Péducure</title>
</head>
<body>
<!-- CORPS DE LA PAGE -->
<div id="carouselPresentation" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="modele/images/facade_cabinet.jpg" class="d-block w-100" alt="Image carousel">
        </div>
        <div class="carousel-item">
            <img src="modele/images/salle_attente.jpg" class="d-block w-100" alt="Image carousel">
        </div>
        <div class="carousel-item">
            <img src="modele/images/salle_de_soin.jpg" class="d-block w-100" alt="Image carousel">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselPresentation" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselPresentation" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container pt-3">
    <p class="namePraticien">
        Jérémie Carin
    </p>
    <p class="intro pt-5">
        Votre spécialiste en podologie & pédicurie depuis 15 ans, <br>vous acceuille dans ses cabinets médicaux, <br> du
        lundi au vendredi.
    </p>
</div>
<!-- FOOTER -->
<footer class="page-footer">
    <div class="container-fluid pl-1 background-footer">
        <div class="row justify-content-between">
            <div class="col-sm-9 col-md-7 col-lg-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.731986214238!2d6.10527181558809!3d49.30041997933326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479525f679e56c95%3A0x804542d1cbfeff5d!2s83-85%20Avenue%20Jeanne%20d&#39;Arc%2C%2057290%20Fameck!5e0!3m2!1sfr!2sfr!4v1600779682258!5m2!1sfr!2sfr"
                        width="750" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-sm-9 col-md-7 col-lg-5">
                <h1 class="titleCat pt-2">
                    Nos cabinets :
                </h1>
                <address>
                    83-85 Avenue Jeanne d'Arc 57290 Fameck <br>
                    Téléphone : 06 06 06 06 06 <br>

                    4 Place de la République 57270 Uckange <br>
                    Téléphone : 06 06 06 06 06 <br>
                </address>

                <br>

                <h1 class="titleCat">
                    Nos horaires :
                </h1>
                <p class="informations">
                    Du lundi au vendredi <br>
                    De 09h à 12h & 13h à 19h
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>
