<?php
require "conn.php" ;
$login=$_POST['username'];
$pwd=SHA1($_POST['password']);
$req = $pdo->prepare("SELECT * FROM users WHERE LOGI=? AND PWD=?");
$parametre=array($login,$pwd);
$req->execute($parametre);
//recuperation des donnees d'utilisateur
if ($user=$req->fetch()) {
    //ouverture de session d'utilisateur connecté
   $_SESSION['PROFILE']=$user;
  header("location:etudiants.php");
} else {
    header("location:Login.php");
}
?>