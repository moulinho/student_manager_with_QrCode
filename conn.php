<?php
require "securite.php" ;
?>

<?php

 try {
     $pdo= new PDO("mysql:host=localhost;dbname=scolarite","root","");
 } catch (PDOException $e) {
    $msg= "erreur PDO dans".$e->getMessage();
    die($msg);
 }