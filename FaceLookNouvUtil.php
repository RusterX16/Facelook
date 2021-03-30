<!DOCTYPE html> <!-- c'est du HTML 5-->

<?php
    session_start ();
    include_once('FaceLookNouvUtil.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf8" />
        <title>FaceLOOK</title>
        <link href="bootstrap4.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="FaceLook.css" />
    </head>

    <body class="fond">
        <?php include("FaceLookMenu.php"); ?>

        <div class="container" id="block">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="card-deck">
                        <div id="messages" class="card">
                            <div class="card-header">
                                <div class="card text-center">
                                    <h3 > Connexion </h3>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="traiteUtil.php">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="Pseudo">Pseudo : </label><input class="form-control" type="text" name="Pseudo" id="Pseudo"/>
                                        </div>

                                        <input class=" btn-primary form-control" type="submit" value="Connexion"/>
                                    <!-- </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 offset-md-10 ">
                    <div class="card-deck ">
                        <div id="messages" class="card">
                            <div class="card-header">
                                <div class="card text-center">
                                    <h3 > Nouvel Utilisateur </h3>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="traiteNouvUti.php">
                                    <div class="form-group">
                                        <label for="nom">Nom :</label>
                                        <input class="form-control" type="text" name="nom" id="nom"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="prenom">Prénom :</label>
                                        <input class="form-control" type="text" name="prenom" id="prenom"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="pseudo">Pseudo :</label>
                                        <input class="form-control" type="text" name="pseudo" id="pseudo"/>
                                    </div>

                                    <input class=" btn-primary form-control" type="submit" value="Envoyer"/>
                                </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
