<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchistra</title>
</head>

<body>
    <h1>Orchistra</h1>
    <form action="" method="post" novalidate>
        <div id="nom">
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname" value="<?= $_POST['lastname'] ?? '' ?>" required>
            <span><?= $error['lastname'] ?? '' ?></span>
        </div>
        <div id="prenom">
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" value="<?= $_POST['firstname'] ?? '' ?>" required>
            <span><?= $error['firstname'] ?? '' ?></span>
        </div>
        <div id="mail">
            <label for="mail">Mail</label>
            <input type="email" id="mail" name="mail" value="<?= $_POST['mail'] ?? '' ?>" required>
            <span><?= $error['mail'] ?? '' ?></span>
        </div>
        <div id="mdp">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" value="<?= $_POST['password'] ?? '' ?>" required>
            <span><?= $error['password'] ?? '' ?></span>
        </div>
        <div id="confirmation">
            <label for="confirmation">Confirmation</label>
            <input type="password" id="confirmation" name="confirmation" value="<?= $_POST['confirmation'] ?? '' ?>" required>
            <span><?= $error['confirmation'] ?? '' ?></span>
        </div>
        <div id="dateAnniv">
            <label for="birthDate">Date de naissance</label>
            <input type="date" id="birthDate" name="birthDate" value="<?= $_POST['birthDate'] ?? '' ?>" required>
            <span><?= $error['birthDate'] ?? '' ?></span>
        </div>
        <div id="checkBox">
            <input type="checkbox" id="gridCheck" name="gridCheck" required>
            <label for="gridCheck">J'ai compris les conditions d'utilisation</label>
            <span><?= $error['gridCheck'] ?? '' ?></span>
        </div>
        <div id="inscrire">
            <button type="submit">S'inscrire</button>
        </div>
    </form>



    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>