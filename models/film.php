<?php

require_once("settings/connect.php");

class FilmModel
{

    function __construct() {
        $db = Connect::connection();
    }
    
    function getLastFilms($limit = 10)
    {
        $db = Connect::connection();

        $sql = $db->prepare("SELECT * FROM vw_film_list ORDER BY film_id DESC LIMIT ?;");   

        if ($sql->execute()) {
            $data = $sql->get_result();
        } else {
            $data = "Error: " . $sql->error;
        }

        $sql->close();
        $db->close();

        return $data;
    }    
    

}