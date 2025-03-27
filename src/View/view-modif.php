<?php
include_once "../../template/head.php";
?>

<body class="container">

    <?php
    include_once "../../template/navbar.php";
    ?>

    <div id="retour">
        <a href="../Controller/controller-profile.php"><i class="fa-solid fa-arrow-left"></i> Retour</a>
    </div>

    <h1>Modification du profil</h1>
    <form action="" method="POST" enctype="multipart/form-data" novalidate>
        <div class="d-flex align-items-baseline">
            <label for="formFile" class="col-3 p-0 align"><i class="fa-solid fa-camera"></i> Avatar</label>
            <input class="form-control" type="file" id="formFile" name="photo" accept="image/*" value="<?= $_SESSION['user_avatar'] ?? '' ?>">
        </div>
        <div>
            <label for="nom"><i class="fa-solid fa-user"></i> Nom</label>
            <input type="text" id="nom" name="nom"
                value="<?= $_SESSION['user_nom'] ?? '' ?>">
            <p><?= $errors["nom"] ?? "" ?></p>
        </div>
        <div>
            <label for="prenom"><i class="fa-solid fa-user-tag"></i> Prénom</label>
            <input type="text" id="prenom" name="prenom"
                value="<?= $_SESSION['user_prenom'] ?? '' ?>">
            <p><?= $errors["prenom"] ?? "" ?></p>
        </div>
        <div>
            <label for="mail"><i class="fa-solid fa-envelope"></i> Mail</label>
            <input type="mail" id="mail" name="mail"
                value="<?= $_SESSION['user_mail'] ?? '' ?>">
            <p><?= $errors["mail"] ?? "" ?></p>
        </div>
        <div>
            <label for="birthDate"><i class="fa-solid fa-calendar-alt"></i> Date de naissance</label>
            <input type="date" id="birthDate" name="birthDate"
                value="<?= $_SESSION['user_date_naissance'] ?? '' ?>">
            <p><?= $errors["birthDate"] ?? "" ?></p>
        </div>
        <div class="col-12 text-center">
            <button type="submit"><i class="fa-solid fa-save"></i> Modifier</button>
        </div>
    </form>

    <?php
    include_once "../../template/footer.php";
    ?>

</body>

</html>