<?php
//appel authentification.php:::::include
include('db/connexion.php');


//récupuration les doone du formulaire login et password

$username=$_POST['name'];
$password=$_POST['pwd'];;

//requete select qui permet l'affichage user qui a comme login () et password($password)

$sql="select * from login where user='$username' and pwd='$password'";

//execution requete sql
//$conn parametre du connextion dans la page connexion.php
//$sql requete sql
//mysqli_query:execution requete sql
$result=mysqli_query($conn,$sql);

//compter le nombre de ligne retourne par requete sql (l'existense de user dans la base de donné)
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//recupération nombre de ligne
$count=mysqli_num_rows($result);
echo("nombre ligne");
echo($count);

//verification selon nombre du ligne retourné si $count==0 -->utilisateur 
//n'existe pas il n'ya pas de compte
// si $count==1 l'utilisateur existe dans la base de donne


/*

if($count==1)
{
    header('location:admin/index.php');
}
else
{
    header('location:login.php');
}

*/

if($count==1)
{
    header("Location:admin/index.php");
}
else
{
    header("Location:login.php");
}





?>
