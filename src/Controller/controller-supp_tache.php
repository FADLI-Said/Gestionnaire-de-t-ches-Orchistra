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

$sql = "DELETE FROM 76_taches WHERE tache_id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $_GET['tache'], PDO::PARAM_INT);
$stmt->execute();

header('Location: controller-general.php');
exit;