<?php
require "securite.php" ;
require "Role.php" ;

?>
<?php

/* Suppression des donneés dans la base de donnee*/
    $code=$_GET['code'];//recuperation du code passer dans URL
    require("conn.php");
    $res=$pdo->prepare("DELETE FROM etudiants WHERE CODE=?");
    $parametre=array($code);
    $res->execute($parametre);
    header("location:etudiants.php");
?>