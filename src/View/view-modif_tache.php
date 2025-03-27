<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1 class="text-center">Modifier une tâche</h1>
    <form action="" class="col-lg-6 mx-auto p-2" method="post" novalidate>
        <div id="titre">
            <label for="titre"><i class="fa-solid fa-heading"></i> Titre</label>
            <input class="form-control" type="text" id="titre" name="titre" value="<?= $taches[0]['tache_titre'] ?? '' ?>" required>
            <p><?= $error['titre'] ?? '' ?></p>
        </div>
        <div id="description">
            <label for="description"><i class="fa-solid fa-font"></i> Description</label>
            <input class="form-control" type="text" id="description" name="description" value="<?= $taches[0]['tache_description'] ?? '' ?>" required>
            <p><?= $error['description'] ?? '' ?></p>
        </div>
        <div id="jour">
            <label for="jour"><i class="fa-solid fa-calendar"></i> jour</label>
            <input class="form-control" type="date" id="jour" name="jour" value="<?= $taches[0]['tache_jour'] ?? '' ?>" required>
            <p><?= $error['jour'] ?? '' ?></p>
        </div>
        <div id="debut">
            <label for="debut"><i class="fa-solid fa-hourglass-start"></i> Début</label>
            <input class="form-control" type="time" id="debut" name="debut" value="<?= $taches[0]['tache_timestamp_debut'] ?? '' ?>" required>
            <p><?= $error['debut'] ?? '' ?></p>
        </div>
        <div id="fin">
            <label for="fin"><i class="fa-solid fa-hourglass-end"></i> Fin</label>
            <input class="form-control" type="time" id="fin" name="fin" value="<?= $taches[0]['tache_timestamp_fin'] ?? '' ?>" required>
            <p><?= $error['fin'] ?? '' ?></p>
        </div>
        <div id="statut">
            <label for="statut"><i class="fa-solid fa-chart-pie"></i> Statut</label>
            <select id="statut" name="statut" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="En cours" <?= isset($taches[0]['tache_statut']) && $taches[0]['tache_statut'] == "En cours" ? 'selected' : '' ?>>En cours</option>
                <option value="Terminer" <?= isset($taches[0]['tache_statut']) && $taches[0]['tache_statut'] == "Terminer" ? 'selected' : '' ?>>Terminée</option>
                <option value="En attente" <?= isset($taches[0]['tache_statut']) && $taches[0]['tache_statut'] == "En attente" ? 'selected' : '' ?>>En attente</option>
            </select>
            <p><?= $error['statut'] ?? '' ?></p>
        </div>
        <div id="propri">
            <label for="propri"><i class="fa-solid fa-bars-progress"></i> Propriété</label>
            <select id="propri" name="propri" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="1" <?= isset($taches[0]['propriete_id']) && $taches[0]['propriete_id'] == "1" ? 'selected' : '' ?>>Urgent</option>
                <option value="2" <?= isset($taches[0]['propriete_id']) && $taches[0]['propriete_id'] == "2" ? 'selected' : '' ?>>Élevée</option>
                <option value="3" <?= isset($taches[0]['propriete_id']) && $taches[0]['propriete_id'] == "3" ? 'selected' : '' ?>>Moyenne</option>
                <option value="4" <?= isset($taches[0]['propriete_id']) && $taches[0]['propriete_id'] == "4" ? 'selected' : '' ?>>Faible</option>
            </select>
            <p><?= $error['propri'] ?? '' ?></p>
        </div>
        <div id="categorie">
            <label for="categorie"><i class="fa-solid fa-list"></i> Categorie</label>
            <select id="categorie" name="categorie" class="form-select" required>
                <option value="" selected>Sélectionner...</option>
                <option value="1" <?= isset($taches[0]['categorie_id']) && $taches[0]['categorie_id'] == "1" ? 'selected' : '' ?>>Travail</option>
                <option value="2" <?= isset($taches[0]['categorie_id']) && $taches[0]['categorie_id'] == "2" ? 'selected' : '' ?>>Personnel</option>
                <option value="3" <?= isset($taches[0]['categorie_id']) && $taches[0]['categorie_id'] == "3" ? 'selected' : '' ?>>Santé</option>
                <option value="4" <?= isset($taches[0]['categorie_id']) && $taches[0]['categorie_id'] == "4" ? 'selected' : '' ?>>Loisirs</option>
            </select>
            <p><?= $error['categorie'] ?? '' ?></p>
        </div>
        <div id="Ajouter" class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Modifier</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>