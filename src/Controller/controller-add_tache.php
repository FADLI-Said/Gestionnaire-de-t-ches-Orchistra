<?php

session_start();

require_once "../../config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: controller-connexion.php");
    exit;
}

$error = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (empty($_POST["titre"])) {
        $error["titre"] = "<i class='fa-solid fa-circle-exclamation'></i> Le titre est obligatoire";
    }

    if (empty($_POST["description"])) {
        $error["description"] = "<i class='fa-solid fa-circle-exclamation'></i> La description est obligatoire";
    }

    if (empty($_POST["jour"])) {
        $error["jour"] = "<i class='fa-solid fa-circle-exclamation'></i> La date est obligatoire";
    }

    if (empty($_POST["debut"])) {
        $error["debut"] = "<i class='fa-solid fa-circle-exclamation'></i> L'heure du début est obligatoire";
    }

    if (empty($_POST["fin"])) {
        $error["fin"] = "<i class='fa-solid fa-circle-exclamation'></i> L'heure de fin est obligatoire";
    }

    if (empty($_POST["statut"])) {
        $error["statut"] = "<i class='fa-solid fa-circle-exclamation'></i> Le statut est obligatoire";
    }

    if (empty($_POST["propri"])) {
        $error["propri"] = "<i class='fa-solid fa-circle-exclamation'></i> La propriété est obligatoire";
    }

    if (empty($_POST["categorie"])) {
        $error["categorie"] = "<i class='fa-solid fa-circle-exclamation'></i> La catégorie est obligatoire";
    }


    if (empty($error)) {

        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO 76_taches (tache_titre, tache_description, tache_jour, tache_timestamp_debut, tache_timestamp_fin, tache_statut, propriete_id, categorie_id, user_id)
            VALUES (:titre, :description, :jour ,:debut, :fin, :statut, :propriete, :categorie, :user)";

        $date = new DateTimeImmutable($_POST["jour"]);
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":titre", $_POST["titre"]);
        $stmt->bindValue(":description", $_POST["description"]);
        $stmt->bindValue(":jour", $date->format("d/m/Y"));
        $stmt->bindValue(":debut", $_POST["debut"]);
        $stmt->bindValue(":fin", $_POST["fin"]);
        $stmt->bindValue(":statut", $_POST["statut"]);
        $stmt->bindValue(":propriete", $_POST["propri"]);
        $stmt->bindValue(":categorie", $_POST["categorie"]);
        $stmt->bindValue(":user", $_GET["user"]);
        $stmt->execute();

        header("Location: controller-profile.php");
        exit;
    }
}

var_dump($_POST);

require_once "../View/view-add_tache.php";
