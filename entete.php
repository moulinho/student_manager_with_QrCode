<nav class="navbar navbar-inverse navbar-fixed-top container-fluid">
      <ul class="nav navbar-nav">
            <li><a href="etudiants.php">Listes Etudiants</a></li>
            <li><a href="SaisieEtudiant.php">Saisie etudiant</a></li>
            <li><a href="Logout.php">Se deconnecté</a></li>

      </ul>
      <span style="float:right;color:#fff; padding-top: 15px;padding-bottom: 15px;"><i><strong>User connected
                  </strong></i>[<?=(isset($_SESSION['PROFILE']))?($_SESSION['PROFILE']['LOGI']):''?>]</span>
</nav>