<?php
include_once "../../template/head.php";
?>

<body>

    <?php
    include_once "../../template/navbar.php";
    ?>

    <div>
        <h1>Profil</h1>
        <img src="../../assets/images/users/<?= $_SESSION["user_id"] ?>/avatar/<?= $_SESSION["user_avatar"] ?>" alt="Image de profil" style="width: 10rem; height: 10rem;">
        <br>
        <p class="text-capitalize">Bonjour <?= $_SESSION["user_prenom"] ?> <?= $_SESSION["user_nom"] ?></p>
        <p>Adresse mail: <?= $_SESSION["user_mail"] ?></p>
        <p>Date de naissance: <?= $date->format("d/m/Y") ?></p>
        <p>Compte créer le <?= date("d/m/Y H:i:s", $_SESSION["user_timestamp_creation"] + 3600) ?></p>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deconnexion">Déconnexion</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#supprimer">Supprimer</button>
        <a href="../Controller/controller-modif.php?profile=<?= $_SESSION["user_id"] ?>">Modification</a>
        <a href="../Controller/controller-general.php">Home</a>
        <a href="../Controller/controller-add_tache.php">Ajouter tâche</a>
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

    <?php
    include_once "../../template/footer.php";
    ?>
</body>

</html>