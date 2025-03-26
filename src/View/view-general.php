<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
</head>

<body>
    <h1>Général</h1>
    <?php foreach ($taches as $value) { ?>
        <div>
            <h2><?= $value["tache_titre"] ?>: <small><?= $value["tache_description"] ?></small></h2>
            <p><?= $value["tache_jour"] ?> <?= $value["tache_timestamp_debut"] ?> - <?= $value["tache_timestamp_fin"] ?></p>
            <p><?= $value["tache_statut"] ?></p>
            <p><?= $value["propriete_nom"] ?>: <small><?= $value["propriete_description"] ?></small></p>
            <p><?= $value["categorie_nom"] ?>: <small><?= $value["categorie_description"] ?></small></p>
            <a href="../Controller/controller-modif_tache.php?tache=<?= $value["tache_id"] ?>">Modifier</a>
            <a href="../Controller/controller-supp_tache.php?tache=<?= $value["tache_id"] ?>">Supprimer</a>
        </div>
    <?php } ?>
</body>

</html>