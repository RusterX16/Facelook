<?php session_start (); ?>
<!DOCTYPE html> <!-- c'est du HTML 5-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf8" /><title>FaceLOOK</title>
  <link href="bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="FaceLook.css" />
</head>

<body class="fond">


<?php include("FaceLookMenu.php"); ?>


<div class="container" id="block">
       <div class="row"> 
        <div class="col-md-6 ">
          
            <div id="messages" class="card">
              <div class="card-header">
                <div class="card text-center">
                  <h3 > Mon Mur</h3>
                </div>
              </div>
                <div class="card-body">
                  <form method="POST" action="#"    >      
                    <label for="messages">Mes Messages : </label><input class="form-control" type="text" name="messages" id="messages"/>
                  </form>
                </div>
            
        </div>
      </div>
    </div>

       <div class="row"> 
          <div class="col-md-2 offset-md-2">
            
              <form method="POST" action="">
                <input class="btn btn-primary form-control" type="submit" value="Amis" />
              </form>
            
          </div>
        </div>

       <div class="row"> 
          <div class="col-md-4 offset-md-6">
            
            <form method="POST" action="">
                <label for="Amis">Amis : </label>
                    <select name="amis" id="amis">
                       <option value="Romain">Romain</option>
                       <option value="Gwendal">Gwendal</option>
                       <option value="Theodore">Theodore</option>
                       <option value="Eliott">Eliott</option>
                       <option value="Zahaf">Mr Zahaf</option>
                       <option value="Mouchere">Mr Mouchere</option>
                    </select>
              </form>
          </div>
        </div>


    <div class="row"> 
        <div class="col-mg-2 offset-md-6">
          
            <label for="messages"> </label><input class="form-control" type="text" name="messages" id="messages"/>
          
        </div>
    </div>

   <div class="row"> 
      <div class="col-md-2 offset-md-6">
        
          <form method="POST" action="">
            <input class=" btn-primary form-control" type="submit" value="envoyer"/>
          </form>
        
      </div>
    </div>
</div>

  </body>

  </html>
