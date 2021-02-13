<?php

require_once 'phpqrcode/qrlib.php';
?>

<?php


// recuperation des informations dans les champs 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$contact=$_POST['contact'];
$montant=$_POST['montant'];
$classe=$_POST['classe'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];//recuperation du nom du fichier chargé dans le champ photo
$fichierTempo=$_FILES['photo']['tmp_name'];//recuperation du photo sauvegardé temporairement sur le serveur
move_uploaded_file($fichierTempo,'image/'.$nomPhoto);//deplacer le fichier photo vers le dossier image 

require "conn.php" ;

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
move_uploaded_file($fichierTempo,$fichier);//deplacer le fichier sous forme photo vers le dossier QR


$req = $pdo->prepare("INSERT INTO etudiants(NOM,PRENOM,CONTACT,MONTANT,CLASSE,EMAIL,PHOTO,info) VALUES (?,?,?,?,?,?,?,?)");
$parametre=array($nom,$prenom,$contact,$montant,$classe,$email,$nomPhoto,$fichier);
$req->execute($parametre);

header("location:etudiants.php");

 ?>