<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Orchistra</h1>
    <form action="" class="row g-3" method="post" novalidate>
        <div id="nom" class="col-6">
            <label for="lastname" class="form-label"><i class="fa-solid fa-user-tie"></i> Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $_POST['lastname'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['lastname'] ?? '' ?></p>
        </div>
        <div id="prenom" class="col-6">
            <label for="firstname" class="form-label"><i class="fa-solid fa-user-tie"></i> Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $_POST['firstname'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['firstname'] ?? '' ?></p>
        </div>
        <div id="mail">
            <label for="mail" class="form-label"><i class="fa-solid fa-envelope"></i> Mail</label>
            <input type="email" class="form-control" id="mail" name="mail" value="<?= $_POST['mail'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['mail'] ?? '' ?></p>
        </div>
        <div id="mdp" class="col-6">
            <label for="password" class="form-label"><i class="fa-solid fa-lock"></i> Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" value="<?= $_POST['password'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['password'] ?? '' ?></p>
        </div>
        <div id="confirmation" class="col-6">
            <label for="confirmation" class="form-label"><i class="fa-solid fa-copy"></i> Confirmation de mot de passe</label>
            <input type="password" class="form-control" id="confirmation" name="confirmation" value="<?= $_POST['confirmation'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['confirmation'] ?? '' ?></p>
        </div>
        <div id="dateAnniv" class="col-6">
            <label for="birthDate" class="form-label"><i class="fa-regular fa-calendar"></i> Date de naissance</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" value="<?= $_POST['birthDate'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['birthDate'] ?? '' ?></p>
        </div>
        <div id="checkBox">
            <input type="checkbox" id="gridCheck" name="gridCheck" required>
            <label for="gridCheck" class="form-label">J'ai compris les conditions d'utilisation</label>
            <p class="text-danger"><?= $error['gridCheck'] ?? '' ?></p>
        </div>
        <div id="inscrire">
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </div>
    </form>

    <div id="retour">
        <a href="../Controller/controller-connexion.php">Retour</a>
    </div>



    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>