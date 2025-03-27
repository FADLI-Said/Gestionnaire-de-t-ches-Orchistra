<?php
include_once "../../template/head.php";
?>

<body class="container">

    <?php
    include_once "../../template/navbar.php";
    ?>
    <div id="retour">
        <a href="../Controller/controller-general.php"><i class="fa fa-arrow-left"></i> Retour</a>
    </div>
    <h1>Modifier une tâche</h1>
    <form action="" method="post" novalidate>
        <div id="titre">
            <label for="titre"><i class="fa fa-pencil-alt"></i> Titre</label>
            <input type="text" id="titre" name="titre" value="<?= $taches[0]['tache_titre'] ?? '' ?>" required>
            <p><?= $error['titre'] ?? '' ?></p>
        </div>
        <div id="description">
            <label for="description"><i class="fa fa-align-left"></i> Description</label>
            <input type="text" id="description" name="description" value="<?= $taches[0]['tache_description'] ?? '' ?>" required>
            <p><?= $error['description'] ?? '' ?></p>
        </div>
        <div id="jour">
            <label for="jour"><i class="fa fa-calendar-alt"></i> jour</label>
            <input type="date" id="jour" name="jour" value="<?= $taches[0]['tache_jour'] ?? '' ?>" required>
            <p><?= $error['jour'] ?? '' ?></p>
        </div>
        <div id="debut">
            <label for="debut"><i class="fa fa-hourglass-start"></i> Début</label>
            <input type="time" id="debut" name="debut" value="<?= $taches[0]['tache_timestamp_debut'] ?? '' ?>" required>
            <p><?= $error['debut'] ?? '' ?></p>
        </div>
        <div id="fin">
            <label for="fin"><i class="fa fa-hourglass-end"></i> Fin</label>
            <input type="time" id="fin" name="fin" value="<?= $taches[0]['tache_timestamp_fin'] ?? '' ?>" required>
            <p><?= $error['fin'] ?? '' ?></p>
        </div>
        <div id="statut">
            <label for="statut"><i class="fa fa-tasks"></i> Statut</label>
            <select id="statut" name="statut" required>
                <option value="" selected>Sélectionner...</option>
                <option value="En cours" <?= isset($taches[0]['tache_statut']) && $taches[0]['tache_statut'] == "En cours" ? 'selected' : '' ?>>En cours</option>
                <option value="Terminer" <?= isset($taches[0]['tache_statut']) && $taches[0]['tache_statut'] == "Terminer" ? 'selected' : '' ?>>Terminée</option>
                <option value="En attente" <?= isset($taches[0]['tache_statut']) && $taches[0]['tache_statut'] == "En attente" ? 'selected' : '' ?>>En attente</option>
            </select>
            <p><?= $error['statut'] ?? '' ?></p>
        </div>
        <div id="propri">
            <label for="propri"><i class="fa fa-exclamation-circle"></i> Propriété</label>
            <select id="propri" name="propri" required>
                <option value="" selected>Sélectionner...</option>
                <option value="1" <?= isset($taches[0]['propriete_id']) && $taches[0]['propriete_id'] == "1" ? 'selected' : '' ?>>Urgent</option>
                <option value="2" <?= isset($taches[0]['propriete_id']) && $taches[0]['propriete_id'] == "2" ? 'selected' : '' ?>>Élevée</option>
                <option value="3" <?= isset($taches[0]['propriete_id']) && $taches[0]['propriete_id'] == "3" ? 'selected' : '' ?>>Moyenne</option>
                <option value="4" <?= isset($taches[0]['propriete_id']) && $taches[0]['propriete_id'] == "4" ? 'selected' : '' ?>>Faible</option>
            </select>
            <p><?= $error['propri'] ?? '' ?></p>
        </div>
        <div id="categorie">
            <label for="categorie"><i class="fa fa-folder-open"></i> Categorie</label>
            <select id="categorie" name="categorie" required>
                <option value="" selected>Sélectionner...</option>
                <option value="1" <?= isset($taches[0]['categorie_id']) && $taches[0]['categorie_id'] == "1" ? 'selected' : '' ?>>Travail</option>
                <option value="2" <?= isset($taches[0]['categorie_id']) && $taches[0]['categorie_id'] == "2" ? 'selected' : '' ?>>Personnel</option>
                <option value="3" <?= isset($taches[0]['categorie_id']) && $taches[0]['categorie_id'] == "3" ? 'selected' : '' ?>>Santé</option>
                <option value="4" <?= isset($taches[0]['categorie_id']) && $taches[0]['categorie_id'] == "4" ? 'selected' : '' ?>>Loisirs</option>
            </select>
            <p><?= $error['categorie'] ?? '' ?></p>
        </div>
        <div id="Ajouter" class="col-12 text-center">
            <button type="submit"><i class="fa fa-save"></i> Modifier</button>
        </div>
    </form>

    <?php
    include_once "../../template/footer.php";
    ?>
</body>

</html>