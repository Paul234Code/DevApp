<?php
// script qui traite les donnes recueilli sur un produit et l'ajout dans la BD
include_once ("CreateConnection.php");
include_once ("contact.php");
$connecteur = createConnection("magasin");
if(isset($_POST['submit']))
{
    //on recuperate les variable
    $code = $connecteur->quote($_POST['code']);
    $nom = $connecteur->quote($_POST['nom']);
    $price =  $connecteur->quote( $_POST['price']);
    $description = $connecteur->quote($_POST['description']);
    $date = $connecteur->quote($_POST['date']);
    $request = "INSERT INTO produit (Code,Nom,Price,Description,Date)VALUES ($code,$nom,$price,$description,$date)";
    //execution de la request
    executionDeLaRequest($connecteur, $request);
}


