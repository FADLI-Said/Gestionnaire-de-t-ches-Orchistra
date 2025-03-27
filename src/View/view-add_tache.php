<?php
include_once "../../template/head.php";
?>

<body class="container">

    <?php
    include_once "../../template/navbar.php";
    ?>

    <div id="retour">
        <a href="../Controller/controller-profile.php"><i class="fa fa-arrow-left"></i> Retour</a>
    </div>
    <h1 class="p-3">Ajouter une tâche</h1>
    <form action="" novalidate method="post">
        <div id="titre">
            <label for="titre"><i class="fa fa-pencil-alt"></i> Titre</label>
            <input type="text" id="titre" name="titre" value="<?= $_POST['titre'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['titre'] ?? '' ?></p>
        </div>
        <div id="description">
            <label for="description"><i class="fa fa-align-left"></i> Description</label>
            <input type="text" id="description" name="description" value="<?= $_POST['description'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['description'] ?? '' ?></p>
        </div>
        <div id="jour">
            <label for="jour"><i class="fa fa-calendar-alt"></i> jour</label>
            <input type="date" id="jour" name="jour" value="<?= $_POST['jour'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['jour'] ?? '' ?></p>
        </div>
        <div id="debut">
            <label for="debut"><i class="fa fa-hourglass-start"></i> Début</label>
            <input type="time" id="debut" name="debut" value="<?= $_POST['debut'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['debut'] ?? '' ?></p>
        </div>
        <div id="fin">
            <label for="fin"><i class="fa fa-hourglass-end"></i> Fin</label>
            <input type="time" id="fin" name="fin" value="<?= $_POST['fin'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['fin'] ?? '' ?></p>
        </div>
        <div id="statut">
            <label for="statut"><i class="fa fa-tasks"></i> Statut</label>
            <select id="statut" name="statut" required>
                <option value="" selected>Sélectionner...</option>
                <option value="En cours" <?= isset($_POST["statut"]) && $_POST['statut'] == "en_cours" ? 'selected' : '' ?>>En cours</option>
                <option value="Terminer" <?= isset($_POST["statut"]) && $_POST['statut'] == "terminer" ? 'selected' : '' ?>>Terminée</option>
                <option value="En attente" <?= isset($_POST["statut"]) && $_POST['statut'] == "en_attente" ? 'selected' : '' ?>>En attente</option>
            </select>
            <p class="text-danger"><?= $error['statut'] ?? '' ?></p>
        </div>
        <div id="propri">
            <label for="propri"><i class="fa fa-exclamation-circle"></i> Propriété</label>
            <select id="propri" name="propri" required>
                <option value="" selected>Sélectionner...</option>
                <option value="1" <?= isset($_POST["propri"]) && $_POST['propri'] == "1" ? 'selected' : '' ?>>Urgent</option>
                <option value="2" <?= isset($_POST["propri"]) && $_POST['propri'] == "2" ? 'selected' : '' ?>>Élevée</option>
                <option value="3" <?= isset($_POST["propri"]) && $_POST['propri'] == "3" ? 'selected' : '' ?>>Moyenne</option>
                <option value="4" <?= isset($_POST["propri"]) && $_POST['propri'] == "4" ? 'selected' : '' ?>>Faible</option>
            </select>
            <p class="text-danger"><?= $error['propri'] ?? '' ?></p>
        </div>
        <div id="categorie">
            <label for="categorie"><i class="fa fa-folder"></i> Categorie</label>
            <select id="categorie" name="categorie" required>
                <option value="" selected>Sélectionner...</option>
                <option value="1" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "1" ? 'selected' : '' ?>>Travail</option>
                <option value="2" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "2" ? 'selected' : '' ?>>Personnel</option>
                <option value="3" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "3" ? 'selected' : '' ?>>Santé</option>
                <option value="4" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "4" ? 'selected' : '' ?>>Loisirs</option>
            </select>
            <p class="text-danger"><?= $error['categorie'] ?? '' ?></p>
        </div>
        <div id="Ajouter" class="col-12 text-center">
            <button type="submit"><i class="fa fa-plus-circle"></i> Ajouter</button>
        </div>
    </form>

    <?php
    include_once "../../template/footer.php";
    ?>

</body>

</html>