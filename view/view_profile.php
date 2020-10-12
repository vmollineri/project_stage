<?php
$hrefIndex = '../index.php';
$hrefDeconnexion = 'view_deconnexion.php';

session_start();
include('view_header.php');
require('../connexionBdd.php');
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../modele/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&display=swap" rel="stylesheet">

    <title>Jérémie Carin - Podologue & Péducure, mon profil</title>
</head>
<body>

<?php
$idUser = $_SESSION['idUser'];

$reqInfoAccount = $bdd->prepare('SELECT nom, prenom, mail, anniversaire, adresse, code_postal, tel_domicile, tel_portable FROM user WHERE id_user = :idUser');
$reqInfoAccount->execute([':idUser' => $idUser]);
$infoAccount = $reqInfoAccount->fetch();
?>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default" style="margin-top: 110px">
                <div class="panel-heading"><h4>Mon compte</h4></div>
                <div class="panel-body">
                    <form class="box box-info">
                        <form class="box-body">
                            <div class="col-sm-6">
                                <div align="center">
                                    <img alt="User Pic"
                                         src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg"
                                         id="profile-image1" class="img-circle img-responsive"
                                         style="border: 2px solid #353c63">

                                    <input id="profile-image-upload" type="file">
                                    <div style="color: black;">
                                        cliquez sur "parcourir" pour changer votre avatar
                                    </div>
                                    <!--Upload Image Js And Css-->
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <h4 style="color:#353c63;"><?php echo $infoAccount['nom'] . ' ' . $infoAccount['prenom'] ?></h4>
                            </div>
                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">


                            <div class="col-sm-5 col-xs-6">Nom :</div>
                            <div class="col-sm-7 col-xs-6 ">
                                <input type="text" id="nomPatient" name="nomPatient" class="form-control"
                                       value="<?php echo $infoAccount['nom'] ?>" style="margin-bottom: 5px">
                            </div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6">Prénom :</div>
                            <div class="col-sm-7">
                                <input type="text" id="prenomPatient" name="prenomPatient" class="form-control"
                                       value="<?php echo $infoAccount['prenom'] ?>" style="margin-bottom: 5px">
                            </div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6">Email :</div>
                            <div class="col-sm-7">
                                <input type="mail" id="mailPatient" name="mailPatient" class="form-control"
                                       value="<?php echo $infoAccount['mail'] ?>" style="margin-bottom: 5px">
                            </div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6">Date de naissance :</div>
                            <div class="col-sm-7">
                                <input type="date" id="inputNom" name="inputNom" class="form-control"
                                       value="<?php echo $infoAccount['anniversaire'] ?>"
                                       style="margin-bottom: 5px; line-height: 10px">
                            </div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6">Adresse :</div>
                            <div class="col-sm-7">
                                <input type="text" id="addressPatient" name="addressPatient" class="form-control"
                                       value="<?php echo $infoAccount['adresse'] ?>" style="margin-bottom: 5px">
                            </div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6">Code Postal :</div>
                            <div class="col-sm-7">
                                <input type="text" id="complementAddress" name="complementAddress" class="form-control"
                                       value="<?php echo $infoAccount['code_postal'] ?>" style="margin-bottom: 5px">
                            </div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6">Télépone fixe :</div>
                            <div class="col-sm-7">
                                <input type="text" id="phoneFixe" name="phoneFixe"
                                       class="form-control"
                                       value="<?php echo $infoAccount['tel_domicile'] ?>" style="margin-bottom: 5px">
                            </div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6">Téléphone portable :</div>
                            <div class="col-sm-7">
                                <input type="text" id="phonePortable" name="phonePortable"
                                       class="form-control"
                                       value="<?php echo $infoAccount['tel_portable'] ?>" style="margin-bottom: 5px">
                            </div>

                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">

                            <h4 class="card-title text-center">Modifier mot de passe</h4>

                            <a href="#" onclick="showStuff('answer1'); return false;">Cliquez ici</a>
                            <div id="answer1" <?php if (!isset($_GET['erreur'])) { ?> style="display: none;" <?php } ?>

                            <form class="form" action="../controller/traitement_profile.php" method="POST">
                                <div class="col-sm-5 col-xs-6">Nouveau mot de passe :</div>
                                <div class="col-sm-7">
                                    <input type="password" id="newPassword" name="newPassword"
                                           class="form-control"
                                           value="" style="margin-bottom: 5px">
                                </div>
                                <div class="col-sm-5 col-xs-6">Confirmer mot de passe :</div>
                                <div class="col-sm-7">
                                    <input type="password" id="confirmPassword" name="confirmPassword"
                                           class="form-control"
                                           value="" style="margin-bottom: 5px">
                                </div>
                                <button class="btn btn-block btn-lg btn-dark my-4" type="submit">Valider</button>
                </div>
                <?php
                if (isset($_GET['erreur'])) {
                    if ($_GET['erreur'] == 1) {
                        echo '<div class="alert alert-danger text-center mt_3 role="alert">Identifiants incorrect ou existe déjà !</div>';
                    }
                }
                ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<script>
    function showStuff(id) {
        document.getElementById(id).style.display = 'block';
    }

    function validate() {
        let a = document.getElementById('newPassword').value;
        let b = document.getElementById('confirmPassword').value;

        if (a != b) {
            alert("Les mots de passes ne correspondent pas !");
            return false;
        } else {
            alert("La modification de votre mot de passe est prise en compte !");
            return true;
        }
    }
</script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>