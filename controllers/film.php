<?php

require_once("models/film.php");

$message = "";
$model = new FilmModel();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['refresh'])) {
    header("Location: /");
    exit();
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    session_destroy();
    header("Location: http://" . $_SERVER["SERVER_NAME"] . "/Neo4j-Examen");
    exit();
}

$data = $model->getLastFilms();
require_once("views/film/film.php");