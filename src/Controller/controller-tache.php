<?php

session_start();

require_once "../../config.php";
if (!isset($_SESSION['user_id'])) {
    // on renvoie vers la page d'accueil
    header('Location: ../../public/');
    exit;
}

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM 76_taches NATURAL JOIN 76_categories NATURAL JOIN 76_priorite WHERE tache_id = :tache_id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":tache_id", $_GET["tache"], PDO::PARAM_INT);
$stmt->execute();
$tache = $stmt->fetch(PDO::FETCH_ASSOC);


$color = "";
switch ($tache["propriete_couleur"]) {
    case 'Vert':
        $color = "text-success";
        break;

    case 'Jaune':
        $color = "text-warning";
        break;

    case 'Orange':
        $color = "text-danger";
        break;

    case 'Rouge':
        $color = "text-danger";
        break;

    default:
        # code...
        break;
}


require_once "../View/view-tache.php";
