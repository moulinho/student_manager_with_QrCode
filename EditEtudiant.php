 <?php


/* Editer des donneés dans la base de donnee*/
   require "conn.php" ;
   require "Role.php" ;

    $code=$_GET['code'];//recuperation du code passer dans URL
    $res=$pdo->prepare("SELECT * FROM etudiants WHERE CODE=?");
    $parametre=array($code);
    $res->execute($parametre);
    $donne_etudiant=$res->fetch();
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/myStyle.css">

       <title>Document</title>
 </head>

 <body>

       <div class="container sapcer  col-md-6 col-xm-12 col-md-offset-3">
             <?php require("entete.php")?>
             <div class="panel panel-info">
                   <div class="panel panel-heading spacer">
                         <center>
                               <h1>Edition Etudiants</h1>
                         </center>
                   </div>
                   <div class="panel panel-body">

                         <form method="post" action="UpdateEtudiant.php" enctype="multipart/form-data">

                               <div class="form-group ">
                                     <center><img src="image/<?=$donne_etudiant['PHOTO']?>" width="100px" height="100px"
                                                 alt="" srcset=""> <img src="<?=$donne_etudiant['info']?>" width="100px"
                                                 height="100px" alt="" srcset=""><br></center>
                                     <label class="control-label">Code: <?=$donne_etudiant['CODE']?></label>
                                     <input type="hidden" name="code" value="<?=$donne_etudiant['CODE']?>"
                                           class="form-control" id="">
                               </div>

                               <div class="form-group ">
                                     <label class="control-label">Nom:</label>
                                     <input type="text" name="nom" value="<?=$donne_etudiant['NOM']?>"
                                           class="form-control" id="">
                               </div>

                               <div class="form-group ">
                                     <label class="control-label">Prenom:</label>
                                     <input type="text" name="prenom" value="<?=$donne_etudiant['PRENOM']?> "
                                           class="form-control" id="">
                               </div>

                               <div class="form-group ">
                                     <label class="control-label">Contact:</label>
                                     <input type="text" name="contact" value="<?=$donne_etudiant['CONTACT']?> "
                                           class="form-control" id="">
                               </div>

                               <div class="form-group ">
                                     <label class="control-label">Montant:</label>
                                     <input type="text" name="montant" value="<?=$donne_etudiant['MONTANT']?> "
                                           class="form-control" id="">
                               </div>

                               <div class="form-group">
                                     <label for="my-select">La Classe:</label>
                                     <select id="my-select" class="form-control" name="classe">
                                           <option value=""><?=$donne_etudiant['CLASSE']?></option>
                                           <option value="6E">6e</option>
                                           <option value="5E">5e</option>
                                           <option value="4E">4e</option>
                                           <option value="3E">3e</option>
                                           <option value="2ND">2nd</option>
                                           <option value="1E">1e</option>
                                           <option value="tle">TLE</option>
                                     </select>
                               </div>

                               <div class="form-group ">
                                     <label class="control-label">Email:</label>
                                     <input type="text" name="email" value="<?=$donne_etudiant['EMAIL']?> "
                                           class="form-control" id="">
                               </div>

                               <div class="form-group ">
                                     <label class="control-label">Photo:</label>
                                     <input type="file" name="photo" class="form-control" id=""><br>
                                     <center>
                                           <div class="btn"><button type="submit"
                                                       class="btn btn-primary">Sauvegarder</button></div>
                                     </center>
                               </div>
                         </form>

                   </div>
             </div>
       </div>
 </body>

 </html>