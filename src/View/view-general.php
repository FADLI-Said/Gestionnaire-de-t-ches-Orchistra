<?php
session_start();

require_once "../../config.php";
if (!isset($_SESSION['user_id'])) {
    // on renvoie vers la page d'accueil
    header('Location: ../../public/');
    exit;
}


require_once "../Controller/controller-general.php";