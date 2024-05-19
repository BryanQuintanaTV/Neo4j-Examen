<?php

require_once("models/film.php");

$message = "";
$model = new FilmModel();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['refresh'])) {
    header("Location: /");
    exit();
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    session_destroy();
    header("http://" . $_SERVER["SERVER_NAME"] );
    exit();
}

$data = $model->getLastFilms();
require_once("views/films/films.php");