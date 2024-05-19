<?php
session_name("FastFood");
session_start();

if (empty($_SESSION["email"])) {
    require_once("controllers/login.php");
    exit();
}

require_once("views/film/film.php");
exit();