<?php
$hrefIndex = '../index.php';
$hrefConnexion = 'view_connexion.php';
$hrefInscription = 'view_inscription.php';
$hrefDeconnexion = 'view_deconnexion.php';

session_start();
require('../connexionBdd.php');
include('view_header.php');
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="../modele/style/style.css">
    <link rel="stylesheet" href="../modele/style/formConnexion.css">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">

    <title>Jérémie Carin - Podologue & Péducure, connectez-vous !</title>
</head>
<body>
<!-- FORMULAIRE DE CONNEXION -->

<!-- Default form login -->
<div class="container">
    <form class="form-background text-center border border-light p-5" method="POST" action="../controller/traitement_connexion.php">

        <p class="card-title h4 mb-4">Se connecter</p>

        <?php
        if (isset($_GET['erreur'])) {
            if ($_GET['erreur'] == 1) {
                echo '<div class="alert alert-danger text-center mt-3" role="alert">Identifiants incorrects ou n\'existe pas !</div>';
            }
        }
        ?>

        <!-- Email -->
        <input type="email" id="inputMail" name="inputMail" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
        <input type="password" id="inputPassword" name="inputPassword" class="form-control mb-4"
               placeholder="Mot de passe">

        <div class="d-flex justify-content-center">
            <div>
                <!-- Forgot password -->
                <a class="link-color" href="#">Mot de passe perdu ?</a>
            </div>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-light btn-block my-4" type="submit">Connexion</button>

        <!-- Register -->
        <p class="register">Pas encore inscrit ?
            <a href="view_inscription.php">S'inscrire</a>
        </p>
    </form>
    <!-- Default form login -->
</div>

<!-- BIBLIOTHÈQUE JS BOOTSTRAP -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
