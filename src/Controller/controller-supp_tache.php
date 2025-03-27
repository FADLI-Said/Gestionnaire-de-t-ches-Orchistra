<?php

session_start();

require_once "../../config.php";
require_once "../../Model/model-supp.php";

if (!isset($_SESSION['user_id'])) {
    // on renvoie vers la page d'accueil
    header('Location: ../../public/');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    Supprimer::suppProfil($_GET['tache']);
    header('Location: controller-general.php');
    exit;
}
