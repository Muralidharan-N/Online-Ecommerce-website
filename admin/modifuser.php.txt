<?php


//appel authentification.php:::::include
include('../db/connexion.php');

//récupuration les doone du formulaire ajout user
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$login=$_POST['login'];
$pwd=$_POST['pwd'];

//requete SQL update

$sql="UPDATE `user` SET 
`nom`='$nom',
`prenom`='$prenom',
`adresse`='$adresse',
`login`='$login',
`pwd`='$pwd'
WHERE id='$id'";

//execution requete SQL

$result=mysqli_query($conn,$sql);

// retour a la page Gestion User

header("Location:gestion_user.php");



?>