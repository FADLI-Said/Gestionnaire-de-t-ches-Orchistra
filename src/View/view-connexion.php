<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
        }

        form {
            width: 30%;
            height: 100%;
        }
    </style>
</head>

<body>
    <form type="submit" class="text-center m-auto align-content-center" method="POST" novalidate>
        <div>
            <label for="id" class="form-label">Identifiant</label>
            <input type="id" class="form-control" name="id" id="id" aria-describedby="emailHelp"
                value="<?= $_POST['id'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['id'] ?? '' ?></p>
        </div>
        <div>
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password"
                value="<?= $_POST['password'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['password'] ?? '' ?></p>
        </div>
        <p class="text-danger"><?= $error['connexion'] ?? '' ?></p>
        <div class="row">
            <button type="submit" class="btn btn-primary col-3 mx-auto mb-2">Connexion</button>
            <a href="../Controller/controller-inscription.php">Pas encore de compte ? Inscrivez-vous !</a>
        </div>
    </form>


    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>