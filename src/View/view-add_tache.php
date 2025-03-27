<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Ajouter une tâche</h1>
    <form action="" class="row g-2" novalidate method="post">
        <div id="titre" class="col-6">
            <label for="titre"><i class="fa-solid fa-heading"></i> Titre</label>
            <input class="form-control" type="text" id="titre" name="titre" value="<?= $_POST['titre'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['titre'] ?? '' ?></p>
        </div>
        <div id="description" class="col-6">
            <label for="description"><i class="fa-solid fa-font"></i> Description</label>
            <input class="form-control" type="text" id="description" name="description" value="<?= $_POST['description'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['description'] ?? '' ?></p>
        </div>
        <div id="jour">
            <label for="jour"><i class="fa-solid fa-calendar"></i> jour</label>
            <input class="form-control" type="date" id="jour" name="jour" value="<?= $_POST['jour'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['jour'] ?? '' ?></p>
        </div>
        <div id="debut" class="col-6">
            <label for="debut"><i class="fa-solid fa-hourglass-start"></i> Début</label>
            <input class="form-control" type="time" id="debut" name="debut" value="<?= $_POST['debut'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['debut'] ?? '' ?></p>
        </div>
        <div id="fin" class="col-6">
            <label for="fin"><i class="fa-solid fa-hourglass-end"></i> Fin</label>
            <input class="form-control" type="time" id="fin" name="fin" value="<?= $_POST['fin'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['fin'] ?? '' ?></p>
        </div>
        <div id="statut">
            <label for="statut"><i class="fa-solid fa-chart-pie"></i> Statut</label>
            <select id="statut" name="statut" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="En cours" <?= isset($_POST["statut"]) && $_POST['statut'] == "en_cours" ? 'selected' : '' ?>>En cours</option>
                <option value="Terminer" <?= isset($_POST["statut"]) && $_POST['statut'] == "terminer" ? 'selected' : '' ?>>Terminée</option>
                <option value="En attente" <?= isset($_POST["statut"]) && $_POST['statut'] == "en_attente" ? 'selected' : '' ?>>En attente</option>
            </select>
            <p class="text-danger"><?= $error['statut'] ?? '' ?></p>
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
            <p class="text-danger"><?= $error['propri'] ?? '' ?></p>
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
            <p class="text-danger"><?= $error['categorie'] ?? '' ?></p>
        </div>
        <div id="Ajouter" class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Ajouter</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>