<?php


//appel authentification.php:::::include
include('db/connexion.php');


//récupuration les doone du formulaire ajout contact

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$message=$_POST['message'];

//requete SQL Insert

$sql="INSERT INTO `contact`(`nom`, `prenom`, `email`, `telephone`, `message`) 

VALUES ('$nom','$prenom','$email','$telephone','$message')";



//execution requete SQL

$result=mysqli_query($conn,$sql);


header("Location:index.php");




?>
