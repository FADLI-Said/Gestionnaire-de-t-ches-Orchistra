<?php
include_once "../../template/head.php";
?>

<body class="container">

    <?php
    include_once "../../template/navbar.php";
    ?>

<div id="retour">
    <a href="../Controller/controller-connexion.php"><i class="fa-solid fa-arrow-left"></i> Retour</a>
</div>

    <form action="" method="post" novalidate>
        <div id="nom">
            <label for="lastname"><i class="fa-solid fa-user-tie"></i> Nom</label>
            <input type="text" id="lastname" name="lastname" value="<?= $_POST['lastname'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['lastname'] ?? '' ?></p>
        </div>
        <div id="prenom">
            <label for="firstname" class="form-label"><i class="fa-solid fa-user-tie"></i> Prénom</label>
            <input type="text" id="firstname" name="firstname" value="<?= $_POST['firstname'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['firstname'] ?? '' ?></p>
        </div>
        <div id="mail">
            <label for="mail" class="form-label"><i class="fa-solid fa-envelope"></i> Mail</label>
            <input type="email" id="mail" name="mail" value="<?= $_POST['mail'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['mail'] ?? '' ?></p>
        </div>
        <div id="mdp">
            <label for="password" class="form-label"><i class="fa-solid fa-lock"></i> Mot de passe</label>
            <input type="password" id="password" name="password" value="<?= $_POST['password'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['password'] ?? '' ?></p>
        </div>
        <div id="confirmation">
            <label for="confirmation" class="form-label"><i class="fa-solid fa-copy"></i> Confirmation de mot de passe</label>
            <input type="password" id="confirmation" name="confirmation" value="<?= $_POST['confirmation'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['confirmation'] ?? '' ?></p>
        </div>
        <div id="dateAnniv">
            <label for="birthDate" class="form-label"><i class="fa-regular fa-calendar"></i> Date de naissance</label>
            <input type="date" id="birthDate" name="birthDate" value="<?= $_POST['birthDate'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['birthDate'] ?? '' ?></p>
        </div>
        <div id="checkBox">
            <input type="checkbox" id="gridCheck" name="gridCheck" required>
            <label for="gridCheck" class="form-label">J'ai compris les conditions d'utilisation</label>
            <span class="text-danger"><?= $error['gridCheck'] ?? '' ?></span>
        </div>
        <div id="inscrire">
            <button type="submit">S'inscrire</button>
        </div>
    </form>


    <?php
    include_once "../../template/footer.php";
    ?>
    
</body>

</html>