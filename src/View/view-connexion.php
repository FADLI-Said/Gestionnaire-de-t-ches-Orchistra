<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
</head>

<body>
    <form type="submit" method="POST" novalidate>
        <div>
            <label for="id">Identifiant</label>
            <input type="id" name="id" id="id" aria-describedby="emailHelp"
                value="<?= $_POST['id'] ?? '' ?>" required>
            <p><?= $error['id'] ?? '' ?></p>
        </div>
        <div class="mb-3">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password"
                value="<?= $_POST['password'] ?? '' ?>" required>
            <p><?= $error['password'] ?? '' ?></p>
        </div>
        <p><?= $error['connexion'] ?? '' ?></p>
        <button type="submit">Connexion</button>
        <a href="../Controller/controller-inscription.php">Pas encore de compte ? Inscrivez-vous !</a>
    </form>


    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>