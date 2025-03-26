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
            <label for="lastname"><i class="fa-solid fa-user-tie"></i> Nom</label>
            <input type="text" id="lastname" name="lastname" value="<?= $_POST['lastname'] ?? '' ?>" required>
            <p><?= $error['lastname'] ?? '' ?></p>
        </div>
        <div id="prenom">
            <label for="firstname"><i class="fa-solid fa-user-tie"></i> Prénom</label>
            <input type="text" id="firstname" name="firstname" value="<?= $_POST['firstname'] ?? '' ?>" required>
            <p><?= $error['firstname'] ?? '' ?></p>
        </div>
        <div id="mail">
            <label for="mail"><i class="fa-solid fa-envelope"></i> Mail</label>
            <input type="email" id="mail" name="mail" value="<?= $_POST['mail'] ?? '' ?>" required>
            <p><?= $error['mail'] ?? '' ?></p>
        </div>
        <div id="mdp">
            <label for="password"><i class="fa-solid fa-lock"></i> Mot de passe</label>
            <input type="password" id="password" name="password" value="<?= $_POST['password'] ?? '' ?>" required>
            <p><?= $error['password'] ?? '' ?></p>
        </div>
        <div id="confirmation">
            <label for="confirmation"><i class="fa-solid fa-copy"></i> Confirmation de mot de passe</label>
            <input type="password" id="confirmation" name="confirmation" value="<?= $_POST['confirmation'] ?? '' ?>" required>
            <p><?= $error['confirmation'] ?? '' ?></p>
        </div>
        <div id="dateAnniv">
            <label for="birthDate"><i class="fa-regular fa-calendar"></i> Date de naissance</label>
            <input type="date" id="birthDate" name="birthDate" value="<?= $_POST['birthDate'] ?? '' ?>" required>
            <p><?= $error['birthDate'] ?? '' ?></p>
        </div>
        <div id="checkBox">
            <input type="checkbox" id="gridCheck" name="gridCheck" required>
            <label for="gridCheck">J'ai compris les conditions d'utilisation</label>
            <p><?= $error['gridCheck'] ?? '' ?></p>
        </div>
        <div id="inscrire">
            <button type="submit">S'inscrire</button>
        </div>
    </form>

    <div id="retour">
        <a href="../Controller/controller-connexion.php">Retour</a>
    </div>



    <script src="https://kit.fontawesome.com/50a1934b21.js" crossorigin="anonymous"></script>
</body>

</html>