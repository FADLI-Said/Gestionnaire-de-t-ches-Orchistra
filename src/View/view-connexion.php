<?php
include_once "../../template/head.php";
?>

<body>

    <?php
    include_once "../../template/navbar.php";
    ?>

    <form type="submit" class="text-center m-auto align-content-center" method="POST" novalidate>
        <div>
            <label for="id" class="form-label">Identifiant</label>
            <input type="id" name="id" id="id" aria-describedby="emailHelp"
                value="<?= $_POST['id'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['id'] ?? '' ?></p>
        </div>
        <div>
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password"
                value="<?= $_POST['password'] ?? '' ?>" required>
            <p class="text-danger"><?= $error['password'] ?? '' ?></p>
        </div>
        <p class="text-danger"><?= $error['connexion'] ?? '' ?></p>
        <div class="row">
            <button type="submit" class="col-3 mx-auto mb-2">Connexion</button>
            <a href="../Controller/controller-inscription.php">Pas encore de compte ? Inscrivez-vous !</a>
        </div>
    </form>

    <?php
    include_once "../../template/footer.php";
    ?>

</body>

</html>