<?php

session_start();

require_once "../../config.php";
if (!isset($_SESSION['user_id'])) {
    // on renvoie vers la page d'accueil
    header('Location: ../../public/');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (empty($_POST['titre'])) {
        $errors["titre"] = "<i class='fa-solid fa-circle-exclamation'></i> Le titre est obligatoire";
    }

    if (empty($_POST['description'])) {
        $errors["description"] = "<i class='fa-solid fa-circle-exclamation'></i> La description est obligatoire";
    }

    if (empty($_POST['jour'])) {
        $errors["jour"] = "<i class='fa-solid fa-circle-exclamation'></i> Le jour est obligatoire";
    }

    if (empty($_POST['debut'])) {
        $errors["debut"] = "<i class='fa-solid fa-circle-exclamation'></i> L'heure de début est obligatoire";
    }

    if (empty($_POST['fin'])) {
        $errors["fin"] = "<i class='fa-solid fa-circle-exclamation'></i> L'heure de fin est obligatoire";
    }

    if (empty($_POST['statut'])) {
        $errors["statut"] = "<i class='fa-solid fa-circle-exclamation'></i> Le statut est obligatoire";
    }

    if (empty($_POST['propri'])) {
        $errors["propri"] = "<i class='fa-solid fa-circle-exclamation'></i> La propriété est obligatoire";
    }

    if (empty($_POST['categorie'])) {
        $errors["categorie"] = "<i class='fa-solid fa-circle-exclamation'></i> La catégorie est obligatoire";
    }

    if (empty($errors)) {
        $sql = "UPDATE 76_taches SET tache_titre = :titre, tache_description = :description, tache_jour = :jour, tache_timestamp_debut = :debut, tache_timestamp_fin = :fin, tache_statut = :statut, propriete_id = :propri, categorie_id = :categorie WHERE tache_id = :tache_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":titre", $_POST['titre'], PDO::PARAM_STR);
        $stmt->bindValue(":description", $_POST['description'], PDO::PARAM_STR);
        $stmt->bindValue(":jour", $_POST['jour'], PDO::PARAM_STR);
        $stmt->bindValue(":debut", $_POST['debut'], PDO::PARAM_STR);
        $stmt->bindValue(":fin", $_POST['fin'], PDO::PARAM_STR);
        $stmt->bindValue(":statut", $_POST['statut'], PDO::PARAM_STR);
        $stmt->bindValue(":propri", $_POST['propri'], PDO::PARAM_INT);
        $stmt->bindValue(":categorie", $_POST['categorie'], PDO::PARAM_INT);
        $stmt->bindValue(":tache_id", $_GET['tache'], PDO::PARAM_INT);
        $stmt->execute();

        header('Location: controller-general.php');
        exit;
    }
}

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM 76_taches as t
JOIN 76_categories as c on t.categorie_id = c.categorie_id
JOIN 76_priorite as p on t.propriete_id = p.propriete_id
WHERE tache_id = :tache_id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":tache_id", $_GET['tache']);
$stmt->execute();
$taches = $stmt->fetchAll(PDO::FETCH_ASSOC);



require_once "../View/view-modif_tache.php";