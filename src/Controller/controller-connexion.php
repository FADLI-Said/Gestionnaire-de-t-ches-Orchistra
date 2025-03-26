<?php

session_start();

require_once "../../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"])) {
        if (empty($_POST["id"])) {
            $error["id"] = "<i class='fa-solid fa-circle-exclamation'></i> Email obligatoire";
        }
    }

    if (isset($_POST["password"])) {
        if (empty($_POST["password"])) {
            $error["password"] = "<i class='fa-solid fa-circle-exclamation'></i> Mot de passe obligatoire";
        }
    }
}

if (!empty($_POST["id"]) && !empty($_POST["password"])) {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM 76_users WHERE user_mail = :mail";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":mail", $_POST["id"], PDO::PARAM_STR);
    $stmt->execute();
    $stmt->rowCount() == 0 ? $found = false : $found = true;
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($found == false) {
        $error["connexion"] = "<i class='fa-solid fa-circle-exclamation'></i> L'identifiant ou le mot de passe est incorrect";
    } else {
        if (password_verify($_POST["password"], $user["user_mdp"])) {
            $_SESSION = $user;
            header("Location: controller-profile.php");
            exit;
        } else {
            $error["connexion"] = "<i class='fa-solid fa-circle-exclamation'></i> L'identifiant ou le mot de passe est incorrect";
        }
    }

    $pdo = "";
}

include_once "../View/view-connexion.php";
