<?php
session_start();
require_once "../../config.php";



$regex_name = "/^[a-zA-ZÀ-ú]+$/";
$regex_password = "/^[a-zA-Z0-9]+$/";
$regex_date = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/";

if (isset($_SESSION["user_id"])) {
    header("Location: controller-profile.php");
    exit;
}

$error = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["lastname"])) {
        if (empty($_POST["lastname"])) {
            $error["lastname"] = "<i class='fa-solid fa-circle-exclamation'></i> Nom obligatoire";
        } elseif (!preg_match($regex_name, $_POST["lastname"])) {
            $error["lastname"] = "<i class='fa-solid fa-circle-exclamation'></i> Caractère non autorisés";
        }
    }

    if (isset($_POST["firstname"])) {
        if (empty($_POST["firstname"])) {
            $error["firstname"] = "<i class='fa-solid fa-circle-exclamation'></i> Prénom obligatoire";
        } elseif (!preg_match($regex_name, $_POST["firstname"])) {
            $error["firstname"] = "<i class='fa-solid fa-circle-exclamation'></i> Caractère non autorisés";
        }
    }

    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT
                    *
                FROM
                    `76_users`
                where
                    user_mail = :mail";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":mail", $_POST["mail"], PDO::PARAM_STR);
    $stmt->execute();
    $stmt->rowCount() != 0 ? $found = true : $found = false;
    $pdo = "";

    if (isset($_POST["mail"])) {
        if (empty($_POST["mail"])) {
            $error["mail"] = "<i class='fa-solid fa-circle-exclamation'></i> Email obligatoire";
        } elseif (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
            $error["mail"] = "<i class='fa-solid fa-circle-exclamation'></i> mail non valide";
        } elseif ($found == true) {
            $error["mail"] = "<i class='fa-solid fa-circle-exclamation'></i> Ce mail est déjà utilisé";
        }
    }

    if (isset($_POST["password"])) {
        if (empty($_POST["password"])) {
            $error["password"] = "<i class='fa-solid fa-circle-exclamation'></i> Mot de passe obligatoire";
        } elseif (!preg_match($regex_password, $_POST["password"])) {
            if (strlen($_POST["password"]) < 8) {
                $error["password"] = "<i class='fa-solid fa-circle-exclamation'></i> Mot de passe trop court";
            }
            if (strlen($_POST["password"]) > 30) {
                $error["password"] = "<i class='fa-solid fa-circle-exclamation'></i> Mot de passe trop grand";
            }
            if (strlen($_POST["password"]) >= 8 && strlen($_POST["password"]) <= 30) {
                $error["password"] = "<i class='fa-solid fa-circle-exclamation'></i> Caractère non autorisés";
            }
        }
    }

    if (isset($_POST["confirmation"])) {
        if (empty($_POST["confirmation"])) {
            $error["confirmation"] = "<i class='fa-solid fa-circle-exclamation'></i> Mot de passe obligatoire";
        } elseif (!preg_match($regex_password, $_POST["confirmation"])) {
            $error["confirmation"] = "<i class='fa-solid fa-circle-exclamation'></i> Caractère non autorisés";
        } elseif ($_POST["confirmation"] != $_POST["password"]) {
            $error["confirmation"] = "<i class='fa-solid fa-circle-exclamation'></i> Mot de passe et confirmation sont différent";
        }
    }

    if (isset($_POST["birthDate"])) {
        if (empty($_POST["birthDate"])) {
            $error["birthDate"] = "<i class='fa-solid fa-circle-exclamation'></i> Date de naissance obligatoire";
        } elseif (!preg_match($regex_date, $_POST["birthDate"])) {
            $error["birthDate"] = "<i class='fa-solid fa-circle-exclamation'></i> Date impossible";
        }
    }

    if (!isset($_POST["gridCheck"])) {
        $error["gridCheck"] = "<i class='fa-solid fa-circle-exclamation'></i> CGU obligatoire";
    }

    if (empty($error)) {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO
                    `76_users`(
                        `user_nom`,
                        `user_prenom`,
                        `user_mail`,
                        `user_mdp`,
                        `user_date_naissance`,
                        `user_timestamp_creation`
                    )
                VALUE(
                    :lastname,
                    :firstname,
                    :mail,
                    :password,
                    :birthdate,
                    :timestamp
                )";
        $stmt = $pdo->prepare($sql);

        function safeInput($string)
        {
            $input = trim($string);
            $input = htmlspecialchars($input);
            return $input;
        }

        $stmt->bindValue(":lastname", safeInput($_POST["lastname"]), PDO::PARAM_STR);
        $stmt->bindValue(":firstname", safeInput($_POST["firstname"]), PDO::PARAM_STR);
        $stmt->bindValue(":mail", safeInput($_POST["mail"]), PDO::PARAM_STR);
        $stmt->bindValue(":password", safeInput(password_hash($_POST["password"], PASSWORD_DEFAULT)), PDO::PARAM_STR);
        $stmt->bindValue(":birthdate", safeInput($_POST["birthDate"]), PDO::PARAM_STR);
        $stmt->bindValue(":timestamp", time(), PDO::PARAM_STR);

        var_dump($stmt);

        if ($stmt->execute()) {
            $lastId = $pdo->lastInsertId();
            $destination = __DIR__ . "/../../assets/images/users/" . $lastId . "/avatar";
            $source = __DIR__ . "/../../assets/images/avatar.png";
            $new_file = $destination . '/avatar.png';

            if (mkdir($destination, 0777, true)) {
                if (copy($source, $new_file)) {
                    header('Location: controller-confirmation.php');
                    exit();
                }
            }
        }

        $pdo = "";
    }
}


require_once "../../src/View/view-inscription.php";
