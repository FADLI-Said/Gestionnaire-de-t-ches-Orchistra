<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1 class="mb-4 text-center">Toutes mes tâches</h1>
    <div class="row">
        <?php foreach ($taches as $value) { ?>
            <div class="row m-0 justify-content-between border shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <h2 class="h4 col-4"><?= $value["tache_titre"] ?>: <small class="fw-lighter"><?= $value["tache_jour"] ?> <?= $value["tache_timestamp_debut"] ?> - <?= $value["tache_timestamp_fin"] ?></small></h2>
                <div class="col-4 text-end">
                    <a class="btn btn-primary" href="../Controller/controller-tache.php?tache=<?= $value["tache_id"] ?>">Plus d'Info</a>
                    <a class="btn btn-outline-warning" href="../Controller/controller-modif_tache.php?tache=<?= $value["tache_id"] ?>">Modifier</a>
                    <a class="btn btn-outline-danger" href="../Controller/controller-supp_tache.php?tache=<?= $value["tache_id"] ?>">Supprimer</a>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>