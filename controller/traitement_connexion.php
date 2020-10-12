<?php
session_start();
require('../connexionBdd.php');

$mail = $_POST['inputMail'];
$password = $_POST['inputPassword'];

$reqUserConnexion = $bdd->prepare('SELECT * FROM user WHERE mail = :mail AND password = :password');
$reqUserConnexion->execute([':mail' => $mail, ':password' => $password]);
$userConnexion = $reqUserConnexion->fetch();

if (empty($userConnexion))
{
    header("Location: ../view/view_connexion.php?erreur=1");
} else
{
    $_SESSION['idUser'] = $userConnexion['id_user'];
    $_SESSION['nomUser'] = $userConnexion['nom'];
    $_SESSION['prenomUser'] = $userConnexion['prenom'];

    header("Location: ../index.php");
}