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

$sql = "SELECT * FROM 76_taches as t
JOIN 76_categories as c on t.categorie_id = c.categorie_id
JOIN 76_priorite as p on t.propriete_id = p.propriete_id
WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":user_id", $_SESSION['user_id']);
$stmt->execute();
$taches = $stmt->fetchAll(PDO::FETCH_ASSOC);



require_once "../View/view-general.php";
