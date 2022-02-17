<?php
// script qui traite les donnes recueilli sur un produit et l'ajout dans la BD
include_once ("CreateConnection.php");
$connecteur = createConnection("magasin");
if(isset($_POST['submit']))
{
    //on recuperate les variable
    $code = $connecteur->quote($_POST['code']);
    $nom = $connecteur->quote($_POST['nom']);
    $price = $connecteur->quote( $_POST['price']);
    $description = (double)$connecteur->quote($_POST['description']);
    $date = date($connecteur->quote(['date']));
    $request = "INSERT INTO produit(Code,Nom,Price,Description,Date) VALUES ($code,$nom,$price,$description,$date)";
    //execution de la request
    $numberOfLines= $connecteur->exec($request);
    //on teste execution de la request
    if ($numberOfLines!=1){
        $messError= $connecteur->errorInfo();
        echo "Insertion Impossible ,code",$connecteur->errorCode(),$messError[2],"<br/>";
        echo "<script type='text/javascript'> alert('Erreur ".$connecteur->errorCode()."');</script>";
    }
    else
    {
        echo "<script> alert('Vous êtes enregistré. Votre numéro de client est :".$connecteur->lastInsertId()."')</script>";
        //on ferme la connection d a la base
        $connecteur=null;
    }
}
else {
    echo "<h3>Formulaire à compléter !</h3>";
}

