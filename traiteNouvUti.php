<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>FaceLOOK</title>
    </head>

    <body>
        <?php
            include("FaceLookMenu.php");
        ?>

        <div id="corps">
            <?php
                try {
                    $connexion = new PDO('mysql:host=localhost;dbname=facelook','root', '');
                } catch(PDOException $e) {
                    print $e->getMessage() . "<br/>";
                    die();
                }

                if(!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['pseudo']) ||
                    empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['pseudo'])) {
                    echo '<p class="erreur"> Il manque des informations obligatoires </p>';
                    echo '<p class="erreur">';

                    if(!isset($_POST['nom']) || empty($_POST['nom'])) echo 'Nom <br />';
                    if(!isset($_POST['prenom']) || empty($_POST['prenom']))	echo 'Prenom <br />';
                    if(!isset($_POST['pseudo']) || empty($_POST['pseudo']))	echo 'Pseudo <br />';

                    echo '<a href="FaceLookNouvUtil.php"> Retour </a></p>';
                } else {
                    // requete d'insertion
                    $req = "INSERT INTO `Utilisateur` (`Pseudo`, `nom`, `prenom`) VALUES ('".$_POST['pseudo']."', '".$_POST['nom']."', '".$_POST['prenom']."');";
                    // execution de la requete et vérification d'erreur
                    if(!$connexion -> query($req)) {
                        echo " Problème : $req <br/> "; print_r($connexion -> errorInfo());
                    } else {
                        echo 'Utilisateur ajouté, vous pouvez aller sur <a href="FaceLookMur.php"> votre Mur</a>';
                    }
                }
                $connexion = null; // deconnexion
            ?>
        </div>
    </body>
</html>