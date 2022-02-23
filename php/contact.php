<?php
// script qui ajoute un utilisateur dans la table Utilisateur
include_once ("CreateConnection.php");
$connecteur = createConnection("magasin");
/**
 * @param PDO $connecteur
 * @param $request
 * @return void
 */
function executionDeLaRequest(PDO $connecteur, $request)
{
    $Lines = $connecteur->exec($request);
    if ($Lines != 1) {
        $messError = $connecteur->errorInfo();
        echo "Insertion Impossible ,code" . $connecteur->errorCode(), $messError[2]."<br/>";
        echo "<script type='text/javascript'> alert('Erreur ".$connecteur->errorCode()."');</script>";
    } else {
        echo "<script> alert('Vous êtes enregistré. Votre numéro de client est :".$connecteur->lastInsertId()."')</script>";
        //on ferme la connection d a la base
        $connecteur = null;
    }
}
if(isset($_POST['envoyer'])){
    $prenom= $connecteur->quote($_POST['prenom']);
    $nom = $connecteur->quote($_POST['nom']);
    $email= $connecteur->quote($_POST['email']);
    $commentaire = $connecteur->quote($_POST['commentaire']);
    $date = $connecteur->quote($_POST['date']);
    $request = "INSERT INTO magasin.utilisateur(Prenom,Nom,Email,Commentaire,Date)VALUES($prenom,$nom,$email,$commentaire,$date)";
    //execution de la request
    executionDeLaRequest($connecteur, $request);
}

