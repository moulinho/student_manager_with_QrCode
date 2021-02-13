<?php

require "conn.php";

/*recherche de l'etudiant dans la base de donnée 
*et le nombre d'etudiant afficher par page par mot clé  
*/
$mc="";
$size=4;

//recuperation de la valeur de la page dans l'URL
if (isset($_GET['page'])) {
    $page = $_GET['page']; 
}else {
   $page=0;
}   

//nombre d'enregistrement à afficher par page
 $offset= $size * (int)$page ;

 if (isset($_GET['motCle'])) {

    $mc= $_GET['motCle']; 
    $req="SELECT * FROM etudiants WHERE NOM like '%$mc%' LIMIT $size  OFFSET $offset";

  }else {
    $req="SELECT * FROM etudiants LIMIT $size  OFFSET $offset";
    
 }

 $res=$pdo->prepare($req);

    $res->execute();
   
if (isset($_GET['motCle'])) {

   //Recuperation du nombre d'etudiant par mot clé

$res2=$pdo->prepare("SELECT COUNT(*) AS NB_ET FROM etudiants WHERE NOM like '%$mc%'");

}else{
    //Comptages du nombre d'etudiant dans la BDD

$res2=$pdo->prepare("SELECT COUNT(*) AS NB_ET FROM etudiants ");

}
$res2->execute();

//recuperation du nombre d'etudiant par tableau assiciatif

$ligne=$res2->fetch(PDO::FETCH_ASSOC);
$nbrET=$ligne['NB_ET'];

//nombre de page convertire en entier supperieur
if (($nbrET % $size)==0) {
    $nbrPage=floor($nbrET/$size);
}else {
    $nbrPage =floor($nbrET/$size)+1;
}
?>

<html>

<head>
      <title></title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/myStyle.css">
</head>

<body>
      <div class="container">
            <?php require("entete.php");?>

            <!-- Formulaire de recherche de l'etudiant par page -->
            <div class="col-md-12 col-xs-12 col-sm-12 spacer">

                  <form action="etudiants.php" method="get">
                        <div class="form-group">
                              <label class="control-label">Mot Clé:</label>
                              <input type="text" name="motCle" id="" value="<?=$mc?>">
                              <button type="submit" class="btn btn-success ">Chercher</button>

                        </div>
                  </form>

            </div>
            <!-- Champs d'affichage des etudiants saisies -->
            <div class="col-md-12 col-xs-12 col-sm-12 spacer">
                  <div class="panel panel-info spacer">
                        <div class="panel-heading">
                              <center>
                                    <h1>Etudiants enregistrés</h1>
                              </center>
                        </div>
                        <div class="panel-body">

                              <table class="table table-striped table-condensed">
                                    <thead>
                                          <tr>
                                                <th>CODE</th>
                                                <th>NOM</th>
                                                <th>PRENOM</th>
                                                <th>CONTACT</th>
                                                <th>MONTANT</th>
                                                <th>CLASSE</th>
                                                <th>EMAIL</th>
                                                <th>PHOTO</th>
                                                <th>INFO</th>
                                          </tr>
                                    </thead>
                                    <tbody>

                                          <!-- recupration et affichage des étudiants Inscrire -->
                                          <?php while ($et=$res->fetch()) {?>

                                          <tr>
                                                <td><?=$et['CODE'] ?></td>

                                                <td><?=$et['NOM'] ?></td>
                                                <td><?=$et['PRENOM'] ?></td>
                                                <td><?=$et['CONTACT'] ?></td>
                                                <td><?=$et['MONTANT'] ?></td>
                                                <td><?=$et['CLASSE'] ?></td>
                                                <td><?=$et['EMAIL'] ?></td>
                                                <td><img src="image/<?= $et['PHOTO'] ?>" width="50" height="50" alt="">
                                                </td>
                                                <td><img src="<?=$et['info'] ?> " width="50" height="50" alt=""></td>
                                                <td><a href="EditEtudiant.php?code=<?=$et['CODE'] ?>">Modifier</a>
                                                </td>
                                                <td><a onClick="return confirm('voulez-vous vraiment supprimer');"
                                                            href="SupprimeEtudiant.php?code=<?=$et['CODE'] ?>">Supprimer</a>
                                                </td>
                                          </tr>
                                          <?php } ?>
                                    </tbody>

                              </table>

                        </div>
                        <!-- pagination -->
                        <div>
                              <ul class="nav nav-pills" style="margin:10px">
                                    <?php for ($i=0; $i <$nbrPage ; $i++) { ?>
                                    <li class="<?=(($i==$page)?'active':'');?>">
                                          <a href="etudiants.php?page=<?=($i)?> &motCle=<?=($mc)?>"> page
                                                <?=($i)?></a>
                                    </li>
                                    <?php }?>
                              </ul>
                        </div>

                  </div>
            </div>

      </div>

</body>

</html>