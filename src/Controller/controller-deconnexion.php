<?php

session_start();

unset($_SESSION);

session_destroy();

include_once "../View/view-deconnexion.php";
