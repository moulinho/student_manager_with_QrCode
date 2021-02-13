<?php
require "securite.php";
require "Role.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/myStyle.css">
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <scrip sr="js/MonJs.js">
            </script>
            <title>Document</title>
</head>

<body>
      <div class="container sapcer  col-xs-6 col-sm-6 col-md-6 col-xs-offset-3 col-sm-offset-3  col-md-offset-3">
            <?php require("entete.php")?>

            <div class="panel panel-info">
                  <div class="panel panel-heading spacer">
                        <center>
                              <h1>Incription</h1>
                        </center>
                  </div>
                  <div class="panel panel-body">

                        <form method="post" action="SaveEtudiant.php" enctype="multipart/form-data">
                              <div class="form-group ">
                                    <label class="control-label">Nom:</label>
                                    <input type="text" name="nom" class="form-control" id="Nom" required>
                                    <div class="error"></div>

                              </div>

                              <div class="form-group ">
                                    <label class="control-label">Prenom:</label>
                                    <input type="text" name="prenom" class="form-control" id="Prenom" required>
                                    <div class="error"></div>
                              </div>

                              <div class="form-group ">
                                    <label class="control-label">Contact:</label>
                                    <input type="text" name="contact" class="form-control" id="Contact" required>
                                    <div class="error"></div>
                              </div>

                              <div class="form-group ">
                                    <label class="control-label">Montant:</label>
                                    <input type="text" name="montant" class="form-control" id="Montant" required>
                                    <div class="error"></div>
                              </div>

                              <div class="form-group">
                                    <label for="select">La Classe:</label>
                                    <select id="select" class="form-control" name="classe" required>
                                          <option value=""></option>
                                          <option value="6e">6e</option>
                                          <option value="5e">5e</option>
                                          <option value="4e">4e</option>
                                          <option value="3e">3e</option>
                                          <option value="2nd">2nd</option>
                                          <option value="1e">1e</option>
                                          <option value="TLE">Tle</option>

                                    </select>
                                    <div class="error"></div>
                              </div>


                              <div class="form-group">
                                    <label class="control-label">Email:</label>
                                    <input type="email" name="email" class="form-control" id="Mail">
                                    <div class="error"></div>
                              </div>

                              <div class="form-group ">
                                    <label class="control-label">Photo:</label>
                                    <input type="file" name="photo" class="form-control" id="Photo" required>
                                    <div class="error"></div>
                              </div>
                              <center>
                                    <div class="btn"><button type="submit" class="btn btn-primary"
                                                id="soumettre">Sauvegarder</button></div>
                              </center>
                        </form>

                  </div>
            </div>
      </div>

</body>

</html>