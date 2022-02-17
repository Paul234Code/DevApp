<?php
// inclusion du fichier de connection
include_once ("../php/CreateConnection.php");
include_once ("../php/contact.php");
$connecteur = createConnection("magasin");
if(isset($_POST['supprimer'])) {
    if (!empty($_POST['Id']) and !empty($_POST['code'])) {
        $Id = $connecteur->quote($_POST['Id']);
        $code = $connecteur->quote($_POST['code']);
        $request = "DELETE FROM produit WHERE Id = $Id;";
        executionDeLaRequest($connecteur, $request);
    }
    else
    {
        echo "<h3>Veuillez remplir les champs du formulaire</h3>";
    }
}
else
{
  echo "<h3>Envoyer le formulaire</h3>" ;
}
