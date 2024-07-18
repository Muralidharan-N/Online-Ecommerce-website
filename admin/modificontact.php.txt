<?php


//appel authentification.php:::::include
include('../db/connexion.php');


//récupuration les doone du formulaire ajout contact
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$message=$_POST['message'];

//requete SQL Insert

$sql="UPDATE `contact` SET 
`nom`='$nom',
`prenom`='$prenom',
`email`='$email',
`telephone`='$telephone',
`message`='$message' 
WHERE id='$id'";



//execution requete SQL

$result=mysqli_query($conn,$sql);


header("Location:gestion_contact.php");




?>