<?php
session_name("FastFood");
session_start();

if (empty($_SESSION["email"])) {
    require_once("controllers/login.php");
    exit();
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        require_once("controllers/home.php");
        break;
    case 'films':
        require_once("controllers/film.php");
        break;
    default:
        require_once("controllers/home.php");
        break;
}
