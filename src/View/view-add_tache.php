<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
</head>

<body>
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
        <div id="jour">
            <label for="jour"><i class="fa-solid fa-calendar"></i> jour</label>
            <input type="date" id="jour" name="jour" value="<?= $_POST['jour'] ?? '' ?>" required>
            <p><?= $error['jour'] ?? '' ?></p>
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
                <option value="En cours" <?= isset($_POST["statut"]) && $_POST['statut'] == "en_cours" ? 'selected' : '' ?>>En cours</option>
                <option value="Terminer" <?= isset($_POST["statut"]) && $_POST['statut'] == "terminer" ? 'selected' : '' ?>>Terminée</option>
                <option value="En attente" <?= isset($_POST["statut"]) && $_POST['statut'] == "en_attente" ? 'selected' : '' ?>>En attente</option>
            </select>
            <p><?= $error['statut'] ?? '' ?></p>
        </div>
        <div id="propri">
            <label for="propri"><i class="fa-solid fa-bars-progress"></i> Propriété</label>
            <select id="propri" name="propri" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="1" <?= isset($_POST["propri"]) && $_POST['propri'] == "1" ? 'selected' : '' ?>>Urgent</option>
                <option value="2" <?= isset($_POST["propri"]) && $_POST['propri'] == "2" ? 'selected' : '' ?>>Élevée</option>
                <option value="3" <?= isset($_POST["propri"]) && $_POST['propri'] == "3" ? 'selected' : '' ?>>Moyenne</option>
                <option value="4" <?= isset($_POST["propri"]) && $_POST['propri'] == "4" ? 'selected' : '' ?>>Faible</option>
            </select>
            <p><?= $error['propri'] ?? '' ?></p>
        </div>
        <div id="categorie">
            <label for="categorie"><i class="fa-solid fa-list"></i> Categorie</label>
            <select id="categorie" name="categorie" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="1" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "1" ? 'selected' : '' ?>>Travail</option>
                <option value="2" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "2" ? 'selected' : '' ?>>Personnel</option>
                <option value="3" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "3" ? 'selected' : '' ?>>Santé</option>
                <option value="4" <?= isset($_POST["categorie"]) && $_POST['categorie'] == "4" ? 'selected' : '' ?>>Loisirs</option>
            </select>
            <p><?= $error['categorie'] ?? '' ?></p>
        </div>
        <div id="Ajouter">
            <button type="submit">Ajouter</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>