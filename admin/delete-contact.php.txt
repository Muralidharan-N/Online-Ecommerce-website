<?php

//appel  cxion.php:::::include
include('../db/connexion.php');
//récupuration l id user 

$id_contact=$_GET['id_contact'];

//requete SQL delete
$sql="DELETE FROM `contact` where id='$id_contact'";
//execution requete SQL

$result=mysqli_query($conn,$sql);
// retour a la page Gestion User
 
 
header("Location:gestion_contact.php");


?>