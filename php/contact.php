<?php
include_once ("Connection.php");
$paramConnection =  new DatabaseConnection();
$database= "magasin";
try {
    $connection = new PDO("mysql:host=" . $paramConnection->getHost() . ";dbname=" . $database, $paramConnection->getUser(), $paramConnection->getPassword());
    echo "connection successfull............ok";
}
catch (PDOException $exception) {
    die("Erreur de :".$exception->getMessage());
}
