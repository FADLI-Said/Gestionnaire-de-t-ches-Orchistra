<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Modification du profil</h1>
    <form action="" method="POST" class="col-lg-6 mx-auto p-2" enctype="multipart/form-data" novalidate>
        <div class="mb-3">
            <label for="formFile" class="form-label"><i class="fa-solid fa-image"></i> Avatar</label>
            <input class="form-control" type="file" id="formFile" name="photo" accept="image/*" value="<?= $_SESSION['user_avatar'] ?? '' ?>">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label"><i class="fa-solid fa-message"></i> Nom</label>
            <input type="text" class="form-control" id="nom" name="nom"
                value="<?= $_SESSION['user_nom'] ?? '' ?>">
            <p><?= $errors["nom"] ?? "" ?></p>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label"><i class="fa-solid fa-message"></i> Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom"
                value="<?= $_SESSION['user_prenom'] ?? '' ?>">
            <p><?= $errors["prenom"] ?? "" ?></p>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label"><i class="fa-solid fa-message"></i> Mail</label>
            <input type="mail" class="form-control" id="mail" name="mail"
                value="<?= $_SESSION['user_mail'] ?? '' ?>">
            <p><?= $errors["mail"] ?? "" ?></p>
        </div>
        <div class="mb-3">
            <label for="birthDate" class="form-label"><i class="fa-solid fa-message"></i> Date de naissance</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate"
                value="<?= $_SESSION['user_date_naissance'] ?? '' ?>">
            <p><?= $errors["birthDate"] ?? "" ?></p>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
    <div class="col-12 text-center">
        <a class="btn btn-danger" href="../Controller/controller-profile.php">Retour</a>
    </div>
</body>

</html>