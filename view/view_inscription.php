<?php
$hrefIndex = '../index.php';
$hrefConnexion = 'view_connexion.php';
$hrefInscription = 'view_inscription.php';

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
    <link rel="stylesheet" href="../modele/style/formInscription.css">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">

    <title>Jérémie Carin - Podologue & Péducure, inscrivez-vous !</title>
</head>
<body>
<!-- Default form register -->
<div class="container">
    <form class="form-background text-center border border-light p-5" method="POST" action="../controller/traitement_inscription.php">

        <?php
        if (isset($_GET['success'])) {
            if ($_GET['success'] == 1) {
                echo '<div class="alert alert-success text-center mt-3" role="alert">Votre compte à était créé avec succès ! Vous pouvez vous connecter.</div>';
            }
        }
        ?>

        <?php
        if (isset($_GET['erreur'])) {
            if ($_GET['erreur'] == 1) {
                echo '<div class="alert alert-danger text-center mt_3 role="alert">Identifiants incorrect ou existe déjà !</div>';
            }
        }
        ?>

        <p class="card-title h4 mb-4">S'inscrire</p>

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="inputNom" name="inputNom" class="form-control" placeholder="Votre nom">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="inputPrenom" name="inputPrenom" class="form-control" placeholder="Votre prénom">
            </div>
        </div>
        <!-- E-mail -->
        <input type="email" id="inputMail" name="inputMail" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Mot de passe"
               aria-describedby="defaultRegisterFormPasswordHelpBlock">
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            At least 8 characters and 1 digit
        </small>

        <!-- Bitrhday -->
        <input type="date" id="birthday" name="birthday" class="form-control mb-4" placeholder="Date de naissance"
               aria-describedby="defaultRegisterFormPhoneHelpBlock">

        <!-- Adresse -->
        <input type="text" id="adresse" name="adresse" class="form-control mb-4" placeholder="Adresse"
               aria-describedby="defaultRegisterFormPhoneHelpBlock">

        <!-- Code postal -->
        <input type="text" id="codePostal" name="codePostal" class="form-control mb-4" placeholder="Code postal"
               aria-describedby="defaultRegisterFormPhoneHelpBlock">

        <!-- Phone fixe -->
        <input type="text" id="phoneFixe" name="phoneFixe" class="form-control mb-4" placeholder="+33 (Fixe)"
               aria-describedby="defaultRegisterFormPhoneHelpBlock">

        <!-- Phone portable -->
        <input type="text" id="phonePortable" name="phonePortable" class="form-control mb-4"
               placeholder="+33 (Portable)"
               aria-describedby="defaultRegisterFormPhoneHelpBlock">

        <!-- Sign up button -->
        <button class="btnInscription btn btn-light my-4 btn-block" type="submit">M'inscrire</button>

        <div class="d-flex justify-content-center">
            <div>
                <!-- Forgot password -->
                <a class="link-color" href="view_connexion.php">Se connecter</a>
            </div>
        </div>
    </form>
</div>
<!-- Default form register -->
</body>
</html>
