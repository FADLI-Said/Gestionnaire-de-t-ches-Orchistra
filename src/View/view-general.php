<?php
include_once "../../template/head.php";
?>

<body class="container">

    <?php
    include_once "../../template/navbar.php";
    ?>

    <div id="retour">
        <a href="../Controller/controller-profile.php"><i class="fa-solid fa-arrow-left"></i> Retour</a>
    </div>

    <h1 class="mb-4 text-center">Toutes mes tâches</h1>
    <div class="row">
        <?php foreach ($taches as $value) { ?>
            <div>
                <h2><?= $value["tache_titre"] ?>: <small class="fw-lighter"><?= $value["tache_jour"] ?> <?= $value["tache_timestamp_debut"] ?> - <?= $value["tache_timestamp_fin"] ?></small></h2>
                <div>
                    <a href="../Controller/controller-tache.php?tache=<?= $value["tache_id"] ?>">Plus d'Info</a>
                    <a href="../Controller/controller-modif_tache.php?tache=<?= $value["tache_id"] ?>">Modifier</a>
                    <a href="../Controller/controller-supp_tache.php?tache=<?= $value["tache_id"] ?>">Supprimer</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <?php
    include_once "../../template/footer.php";
    ?>

</body>

</html>