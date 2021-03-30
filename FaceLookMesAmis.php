<?php session_start (); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="FaceLook.css" />
    <title> FaceLOOK </title>
</head>
<body class="fond">

<?php include("FaceLookMenu.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <div class="card-deck ">                                       
                <div id="messages" class="card">
                    <div class="card-header">
                        <div class="card text-center">
                        <h3 > Mes Amis </h3>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="FaceLookMesAmis.html.php">
                        <div class="form-group">
                            <label> Michel </label> <br>
                            <label> Jacob </label> <br>
                            <label> Richard </label> <br>
                            <label> Kylo Ren </label> <br>
                            <label> Gandalf </label> <br>
                            <label> Johnny Silverhand </label> <br>
                            <label> Barack Obama </label> <br>
                            <label> </label> <br>
                            <label> Robospierre </label> <br>
                            <label> Dieu </label> <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>


    <div class="row">
        <div class="col-md-2 offset-md-4">
            <div class="card-deck ">
                <div id="messages" class="card">
                    <div class="card-body">
                        <form method="POST" action="traiteAmis.php">
                            <div class="form-group">
                                <label for="PseudoLui"> Pseudo : </label> <input class="form-control" type="text" name="PseudoLui" id="PseudoLui"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-2 offset-md-4">
          <form method="POST" action="traiteAmis.php">
            <input class="btn btn-primary form-control" type="submit" value="Ajouter" />
          </form>
        </div>
    </div>
</div>
</body>
</html>