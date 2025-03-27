<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <div class="d-flex mt-5 gap-2">
        <img class="border border-4 rounded" src="../../assets/images/users/<?= $_SESSION["user_id"] ?>/avatar/<?= $_SESSION["user_avatar"] ?>" alt="Image de profil" style="width: 30rem;">
        <div>
            <div class="d-flex gap-2">
                <h1><?= $tache["tache_titre"] ?></h1>
                <p class="m-0 align-self-center">: <?= $tache["tache_jour"] ?> - <?= $tache["tache_timestamp_debut"] ?>/<?= $tache["tache_timestamp_fin"] ?></p>
            </div>
            <p>Description: <?= $tache["tache_description"] ?></p>
            <p class="h5">Statut: <?= $tache["tache_statut"] ?></p>
            <div class="border p-3 rounded mb-3">
                <p class="h5">Propriété: <span class="<?= $color ?>"><?= $tache["propriete_nom"] ?></span></p>
                <p><?= $tache["propriete_description"] ?></p>
            </div>
            <div class="border p-3 rounded">
                <p class="h5">Catégorie: <?= $tache["categorie_nom"] ?></p>
                <p><?= $tache["categorie_description"] ?></p>
            </div>
        </div>
    </div>
</body>

</html>