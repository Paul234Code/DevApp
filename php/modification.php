<?php
// inclusion du fichier de connection
include_once ("../php/CreateConnection.php");
include_once ("../php/contact.php");
$connecteur = createConnection("magasin");
if(isset($_POST['submit'])){
    if(!empty($_POST['code']) and ! empty($_POST['price']) and ! empty( $_POST['identifiant']))
    {
        $code= $connecteur->quote($_POST['code']);
        $price = $connecteur->quote($_POST['price']);
        $identifiant = $connecteur->quote($_POST['identifiant']);
        $request = "UPDATE produit SET  Price = $price ,Code=$code WHERE Id=$identifiant";
        executionDeLaRequest($connecteur, $request);
    }
    else
    {
      echo "<h3>Veuillez remplir les champs du formulaire</h3>" ;
    }
}
