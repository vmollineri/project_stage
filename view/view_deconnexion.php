<?php
// ON DEMARRE SESSION
session_start();
// ON DÉTRUIT LA SESSION
session_destroy();
// ON REDIRIGE VERS L'ACCUEIL
header("Location: ../index.php");