<?php

session_start();

require_once "../../config.php";
if (!isset($_SESSION['user_id'])) {
    // on renvoie vers la page d'accueil
    header('Location: ../../public/');
    exit;
}

$date = new DateTimeImmutable($_SESSION["user_date_naissance"]);

include_once "../View/view-profile.php";