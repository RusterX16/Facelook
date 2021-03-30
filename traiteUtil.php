<!DOCTYPE html>
<?php session_start() ; ?>

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
             	    // creer une session
                    $connexion= new PDO("mysql:host=localhost;dbname=FaceLOOK","root", "");

                    if(isset($_POST['Pseudo'])) {
                        $Pseudo = $_POST['Pseudo'];
	
                        $requete = "SELECT Pseudo FROM utilisateur WHERE Pseudo LIKE '" . $Pseudo . "'";
                        $reponse = $connexion -> query($requete);

                        while($donnees = $reponse -> fetch()) {
	                        // si l'utilisateur existe

                            if($Pseudo == $donnees['Pseudo']) {
            			        $_SESSION['Utilisateur'] = $_POST['Pseudo'];
			                    //redirection vers la page du mur (ou tout simplement donnée lien vers la page du mur.)
    			                header('Location: FaceLookMur.php');
	    		                //echo 'Utilisateur connecté, vous pouvez aller sur <a href="FaceLookMur.php"> votre Mur</a>';
		                    } else {
		                        //si non  -> utilisateur inconnue
		                        //lien vers la page de connexion

                                echo 'Pseudo incorrecte !!';
//                                header('Emplacement: FaceLookNouvUtil.php');
                            }
                        }
                    }
                } catch(PDOException $e) {
        		    print $e -> getMessage() . "<br/>";
		            die();
	            }
        	    $connexion = null; // deconnexion
            ?>

        </div>
    </body>
</html>
