<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div>
            <img class="mt-5 border border-4 rounded" src="../../assets/images/users/<?= $_SESSION["user_id"] ?>/avatar/<?= $_SESSION["user_avatar"] ?>" alt="Image de profil" style="width: 10rem;">
        </div>
        <br>
        <p class="text-capitalize h1">Bonjour <?= $_SESSION["user_prenom"] ?> <?= $_SESSION["user_nom"] ?></p>
        <p>Adresse mail: <?= $_SESSION["user_mail"] ?></p>
        <p>Date de naissance: <?= $date->format("d/m/Y") ?></p>
        <p>Compte créer le <?= date("d/m/Y H:i:s", $_SESSION["user_timestamp_creation"] + 3600) ?></p>
        <div class="mb-5">
            <a class="btn btn-dark" href="../Controller/controller-add_tache.php?user=<?= $_SESSION["user_id"] ?>">Ajouter tâche</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deconnexion">Déconnexion</button>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#supprimer">Supprimer</button>
        </div>
        <div class="gap-3 row justify-content-center mt-5">
            <a class="btn btn-dark col-6" href="../Controller/controller-modif.php?profile=<?= $_SESSION["user_id"] ?>">Modifier le profile</a>
            <a class="btn btn-dark col-6" href="../Controller/controller-general.php">Home</a>
        </div>
    </div>







    <div class="modal fade" id="deconnexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de déconnexion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <a class="btn btn-danger" href="../Controller/controller-deconnexion.php">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="supprimer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de supression</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <a class="btn btn-danger" href="../Controller/controller-supp.php">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>