<?php
session_start();
require('../connexionBdd.php');

$nom = $_POST['inputNom'];
$prenom = $_POST['inputPrenom'];
$mail = $_POST['inputMail'];
$password = $_POST['inputPassword'];
$birthday = $_POST['birthday'];
$adresse = $_POST['adresse'];
$codePostal = $_POST['codePostal'];
$telFixe = $_POST['phoneFixe'];
$telPortable = $_POST['phonePortable'];

// ON VÉRIFIE SI L'UTILISATEUR EXISTE OU NON
$reqUserExiste = $bdd->prepare('SELECT * FROM user WHERE mail = :mail');
$reqUserExiste->execute([':mail' => $mail]);
$userExiste = $reqUserExiste->fetch();

if (empty($userExiste)) {
    // INSERTION DES DONNÉES DU FORMULAIRE EN BDD
    $reqInsertUser = $bdd->prepare('INSERT INTO user (nom, prenom, mail, password, anniversaire, adresse, code_postal, tel_domicile, tel_portable) VALUES (:nom, :prenom, :mail, :password, :anniversaire, :adresse, :code_postal, :tel_domicile, :tel_portable)');
    $reqInsertUser->execute([':nom' => $nom, ':prenom' => $prenom, ':mail' => $mail, ':password' => $password, ':anniversaire' => $birthday, ':adresse' => $adresse, ':code_postal' => $codePostal, ':tel_domicile' => $telFixe, ':tel_portable' => $telPortable]);

    header("Location: ../view/view_inscription.php?success=1");
} else {
    header("Location: ../view/view_inscription.php?erreur=1");
}