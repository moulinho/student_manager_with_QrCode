<?php

require "conn.php" ;
require "Role.php";
require_once ('phpqrcode/qrlib.php');

?>

<?php
$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$contact=$_POST['contact']; 
$montant=$_POST['montant'];
$classe=$_POST['classe'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];//recuperation du nom du fichier chargé dans le champ photo


//recuperation des données pour le code QR
$cheminFichier='QR/';

$fichier=$cheminFichier.$nom.$prenom.uniqid().".png"; 
$textAfficher.="Nom :".$nom."\r\n" ;
$textAfficher.="Prenom :".$prenom."\r\n";
$textAfficher.="Conact :".$contact."\r\n";
$textAfficher.="Montant :".$montant."\r\n";
$textAfficher.="Classe :".$classe."\r\n";
$textAfficher.="Email :".$email."\r\n";

QRcode::png($textAfficher, $fichier, 'L', 10, 2);//formatage de l'affichage du code 

if ($nomPhoto=="") {


$req = $pdo->prepare("UPDATE etudiants SET NOM=?,PRENOM=?,CONTACT=?,MONTANT=?,CLASSE=?,EMAIL=?,info=? WHERE CODE=?");
$parametre=array($nom,$prenom,$contact,$montant,$classe,$email,$fichier,$code);
$req->execute($parametre);


   
}else {
    $fichierTempo=$_FILES['photo']['tmp_name'];//recuperation du photo sauvegardé temporairement sur le serveur
move_uploaded_file($fichierTempo,'image/'.$nomPhoto);//deplacer le fichier photo vers le dossier image 


$req = $pdo->prepare("UPDATE etudiants SET NOM=?,PRENOM=?,CONTACT=?,MONTANT=?,CLASSE=?,EMAIL=?,PHOTO=?,info=? WHERE CODE=?");
$parametre=array($nom,$prenom,$contact,$montant,$classe,$email,$nomPhoto,$fichier,$code);
$req->execute($parametre);
}

header("location:etudiants.php");

 ?>