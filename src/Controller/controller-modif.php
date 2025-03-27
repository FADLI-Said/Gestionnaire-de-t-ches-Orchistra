<?php

session_start();

require_once "../../config.php";
if (!isset($_SESSION['user_id'])) {
    // on renvoie vers la page d'accueil
    header('Location: ../../public/');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $photo = $_FILES['photo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $date_naissance = $_POST['birthDate'];

    $errors = [];
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (empty($_POST['nom'])) {
        $errors["nom"] = "<i class='fa-solid fa-circle-exclamation'></i> Le nom est obligatoire";
    }

    if (empty($_POST['prenom'])) {
        $errors["prenom"] = "<i class='fa-solid fa-circle-exclamation'></i> Le prénom est obligatoire";
    }

    if (empty($_POST['mail'])) {
        $errors["mail"] = "<i class='fa-solid fa-circle-exclamation'></i> Le mail est obligatoire";
    }

    if (empty($_POST['birthDate'])) {
        $errors["birthDate"] = "<i class='fa-solid fa-circle-exclamation'></i> La date de naissance est obligatoire";
    }

    if ($photo['error'] === 0) {
        $extension = pathinfo($photo['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $extension;
        unlink('../../assets/images/users/' . $_SESSION['user_id'] . '/avatar/' . $_SESSION['user_avatar']);
        move_uploaded_file($photo['tmp_name'], '../../assets/images/users/' . $_SESSION["user_id"] . "/avatar/" . $filename);
    } else {
        $filename = $_SESSION['user_avatar'];
    }

    if (empty($errors)) {
        $sql = "UPDATE 76_users SET user_nom = :nom, user_prenom = :prenom, user_mail = :mail, user_date_naissance = :date_naissance, user_avatar = :avatar WHERE user_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":avatar", $filename, PDO::PARAM_STR);
        $stmt->bindValue(":nom", $_POST['nom'], PDO::PARAM_STR);
        $stmt->bindValue(":prenom", $_POST['prenom'], PDO::PARAM_STR);
        $stmt->bindValue(":mail", $_POST['mail'], PDO::PARAM_STR);
        $stmt->bindValue(":date_naissance", $_POST['birthDate'], PDO::PARAM_STR);
        $stmt->bindValue(":id", $_SESSION['user_id'], PDO::PARAM_INT);
        $stmt->execute();

        $_SESSION['user_avatar'] = $filename;
        $_SESSION['user_nom'] = $nom;
        $_SESSION['user_prenom'] = $prenom;
        $_SESSION['user_mail'] = $mail;
        $_SESSION['user_date_naissance'] = $date_naissance;

        header('Location: controller-profile.php');
        exit;
    }
}


include_once "../View/view-modif.php";
