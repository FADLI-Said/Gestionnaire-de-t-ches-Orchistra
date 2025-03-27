<?php
include_once "../../template/head.php";
?>

<body>

    <?php
    include_once "../../template/navbar.php";
    ?>

    <h1>Ajouter une tâche</h1>
    <form action="" novalidate method="post">
        <div id="titre">
            <label for="titre"><i class="fa-solid fa-heading"></i> Titre</label>
            <input type="text" id="titre" name="titre" value="<?= $_POST['titre'] ?? '' ?>" required>
            <p><?= $error['titre'] ?? '' ?></p>
        </div>
        <div id="description">
            <label for="description"><i class="fa-solid fa-font"></i> Description</label>
            <input type="text" id="description" name="description" value="<?= $_POST['description'] ?? '' ?>" required>
            <p><?= $error['description'] ?? '' ?></p>
        </div>
        <div id="debut">
            <label for="debut"><i class="fa-solid fa-hourglass-start"></i> Début</label>
            <input type="time" id="debut" name="debut" value="<?= $_POST['debut'] ?? '' ?>" required>
            <p><?= $error['debut'] ?? '' ?></p>
        </div>
        <div id="fin">
            <label for="fin"><i class="fa-solid fa-hourglass-end"></i> Fin</label>
            <input type="time" id="fin" name="fin" value="<?= $_POST['fin'] ?? '' ?>" required>
            <p><?= $error['fin'] ?? '' ?></p>
        </div>
        <div id="statut">
            <label for="statut"><i class="fa-solid fa-chart-pie"></i> Statut</label>
            <select id="statut" name="statut" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="en_cours" <?= isset($_POST["statut"]) && $_POST['statut'] == "en_cours" ? 'selected' : '' ?>>En cours</option>
                <option value="terminer" <?= isset($_POST["statut"]) && $_POST['statut'] == "terminer" ? 'selected' : '' ?>>Terminée</option>
                <option value="en_attente" <?= isset($_POST["statut"]) && $_POST['statut'] == "en_attente" ? 'selected' : '' ?>>En attente</option>
            </select>
            <p><?= $error['statut'] ?? '' ?></p>
        </div>
        <div id="propri">
            <label for="propri"><i class="fa-solid fa-chart-pie"></i> Propriété</label>
            <select id="propri" name="propri" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="urgent" <?= isset($_POST["propri"]) && $_POST['propri'] == "urgent" ? 'selected' : '' ?>>Urgent</option>
                <option value="elevee" <?= isset($_POST["propri"]) && $_POST['propri'] == "elevee" ? 'selected' : '' ?>>Élevée</option>
                <option value="moyennne" <?= isset($_POST["propri"]) && $_POST['propri'] == "moyennne" ? 'selected' : '' ?>>Moyenne</option>
                <option value="faible" <?= isset($_POST["propri"]) && $_POST['propri'] == "faible" ? 'selected' : '' ?>>Faible</option>
            </select>
            <p><?= $error['propri'] ?? '' ?></p>
        </div>
        <div id="categorie">
            <label for="categorie"><i class="fa-solid fa-list"></i> Categorie</label>
            <select id="categorie" name="categorie" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="travail" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "travail" ? 'selected' : '' ?>>Travail</option>
                <option value="personnel" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "personnel" ? 'selected' : '' ?>>Personnel</option>
                <option value="Sante" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "Sante" ? 'selected' : '' ?>>Santé</option>
                <option value="loisirs" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "loisirs" ? 'selected' : '' ?>>Loisirs</option>
            </select>
            <p><?= $error['categorie'] ?? '' ?></p>
        </div>
        <div id="Ajouter">
            <button type="submit">Ajouter</button>
        </div>
    </form>

    <?php
    include_once "../../template/footer.php";
    ?>
    
</body>

</html>