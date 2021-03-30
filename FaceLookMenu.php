
<!DOCTYPE html> <!-- c'est du HTML 5-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf8" /><title>FaceLOOK</title>
  <link href="bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="FaceLook.css" />
</head>

<body class="fond">
<div class="nav" id="menu">
	<a  href="#" id="FL">FaceLook</a>
    <nav>
      <ul class="nav">
        <li class="nav-item nav-link active"><a  href="FaceLookMur.php" class="barre">Mur</a></li>
        <li class="nav-item  nav-link "><a href="FaceLookMesAmis.php" class="barre">Amis</a></li>
        <li class="nav-item  nav-link "><a href="FaceLookNouvUtil.php" class="barre">Déconnexion</a></li>
        <li class="nav-item nav-link" ><a href="#" class="barre">Compte Rendu </a>
          <ul id="deroulant">
            <li><a href="FaceLookCompteRendu_Partie1.php" class="barre" >Partie 1</a></li>
            <li><a href="FaceLookCompteRendu_Partie2.php" class="barre">Partie 2</a></li>
            <li><a href="FaceLookCompteRendu_Partie3.php" class="barre" >Partie 3</a></li>
          </ul>
        </li>
      </ul>
    </nav>
   <li class="nav-item  nav-link "><a href="#" class="barre"><?php if (isset($_SESSION['Utilisateur'])){
      echo "Connecté : ";
      echo $_SESSION['Utilisateur'];
      }
    else {
      echo "NON connecté"; 
      // redirection vers la page de connexion 
    }  ?></a></li>
    
    
</div>
 </body>
</html>