<?php
//include de la classe de connection
include_once ("Connection.php");
function createConnection($database){
    $objet= new DatabaseConnection();
    try {
        $connection= new PDO("mysql:host=".$objet->getHost().";dbname=".$database,$objet->getUser(),$objet->getPassword());
    }catch (PDOException $exception){
        die("Erreur connection: ".$exception->getMessage());
    }
    return $connection;

}
