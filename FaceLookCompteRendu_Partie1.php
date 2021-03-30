<!DOCTYPE html> <!-- c'est du HTML 5-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf8" /><title>FaceLOOK</title>
  <link href="bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="FaceLook.css" />
</head>

<body class="fond">
<?php include("FaceLookMenu.php"); ?>
<div class="conteneur" id="block">
<div class="row">
    <div class="card-deck" >
      
  <div id="messages" class="card">
              <div class="card-header">
                <div class="card text-center">
                  <h3 > Question 1 : </h3>
                </div>
              </div>
                  <div class="card-body">
                    <div>
                       <p>Pour la page ’Mur’, expliquer les grandes divisions (balises div) que vous proposez .</p>
                   </div>
<div class="text-center">
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- class conteneur -->
  <div class="container" >
  <!-- class pour rangée -->
  <div class="row"> 
  <!-- class permettant de crée une colonne de dimension 6/12 -->
  <div class="col-md-6 ">
  <!-- class qui permet de mettre nos card cote à cote séparer par une goutière  -->
  <div class="card-deck">
  <!-- class qui permet d'aligné le texte -->
  <div class="card text-center">
  <!-- class qui mermet de mettre une en-têtes -->
  <div class="card-header">
    <!-- class qui mermet de mettre dans le coprs -->
  <div class="card-body">
  <!-- class qui mermet de mettre un pied de page -->
  <div class="card-footer">
</textarea>
</div> 
<div class="text-center">
      </div> 
      <div><p>
        Une card est un conteneur de contenu flexible et extensible. Une card possède pleins d'options de personnalisation :<br> 
        <li> les card-header pour les en-têtes.</li> 
        <li> les card-body  pour les coprs de nos card.</li> 
        <li> les card-footer  pour les pieds de page.</li> 
        <li> les card-deck pour aligner nos card tout en laisasnt une goutière entre elle.</li>
        <li> les card text-center pour centrer nos textes.</li> 
        Il y a donc une grande variété de contenu, des couleurs d'arrière-plan contextuelles et des options d'affichage grâce au bootstraps.
        Nous avons ainsi utiliser ces différentes balises div afin de réaliser nos différentes pages FaceLook.</p></div>
        <div class="card-footer">
            <small class=" card text-center"> Le Peltier Baptiste Barbet Eliott</small>
        </div>
      </div>
</div>
        <div id="messages" class="card">
              <div class="card-header">
                <div class="card text-center">
                  <h3 > Question 2 : </h3>
                </div>
              </div>
                  <div class="card-body">
                    <div>
                       <p>Proposez un css pour modifier la couleur de fond de la page, ainsi que la couleur du titre principal.</p>
                   </div>
<div class="text-center">
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- class pour modifier la couleur du fond -->
  .fond {
  background-color: #0FC7EE;
  }
  <!-- identifiant pour lodifier la couleur du titre  -->
  #FL{
  padding-left: 10px;
  color: white;
  font-size: 30px;
  font-weight: bold;
}
</textarea> 
</div>
<div><p>
        Le CSS que nous avons utiliser permet de changer la couleurs du fond avec un code Hexadécimal:<br> 
        <li> background-color: #0FC7EE;</li> 
        L'attributs background-color nous permet ainsi de modifier la couleur de l'arrère plan.<br><br>
        Pour modifier la couleur ainsi que la forme du Titre de notre site nous avons utiliser les commmande :
        <li> padding-left: 10px; pour placer une marge de 10 pixels sur la gauche.</li> 
        <li> color: white; pour la couleur de notre titre. </li> 
        <li>  font-size: 30px; pour la taille de notre titre.</li>
        <li> font-weight: bold; pour que notre titre apparaisse en Gras.</li> 
        Nous pouvons ainsi grâce au CSS modifier le style de nos différents éléments grâce à des Class ou des identifiants sans faire appelle au bootstrap.</p>
      </div>
      </div>
    <div class="card-footer">
      <small class=" card text-center"> Le Peltier Baptiste Barbet Eliott</small>
    </div>
  </div>

  <div id="messages" class="card">
              <div class="card-header">
                <div class="card text-center">
                  <h3 > Question 3 : </h3>
                </div>
              </div>
                  <div class="card-body">
                    <div>
                       <p>En étudiant le fonctionnement du sélecteur “:hover” et de la propriété “display”, proposez un menu dynamique; utiliser le menu sous forme de liste comme défini dans le squelette. Expliquez le fonctionnement de votre solution et les règles que vous avez défini.</p>
                   </div>
                  
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- Création d'une liste à puces contenant un menu déroulant -->
<nav>
  <li class="nav-item nav-link" ><a href="#" class="barre">Compte Rendu </a>
        <ul id="deroulant">
          <li><a href="FaceLookCompteRendu_Partie1.html" class="barre" >Partie 1</a></li>
          <li><a href="FaceLookCompteRendu_Partie2.html" class="barre">Partie 2</a></li>
          <li><a href="FaceLookCompteRendu_Partie3.html" class="barre" >Partie 3</a></li>
        </ul>
  </li>
</nav>

    <!-- Partie CSS -->
#deroulant{
    display: none;
    background-color: #394268;
    list-style: square;
    border-radius: 20px;
    width:300px;
}
nav > ul li:hover #deroulant{
    display: block;
}

}
</textarea> 
<div><p>
        Dans cette partie nous avons crée un menu déroulant par le billet de liste à puces dans notre barre de navigation avec les mêmes classes utilisée pour crée notre menu avec les Class bootstrap:<br> 
        <li>  nav ;création d'une balise de navigation </li>
       <li> class="nav-item nav-link" a href="#" class="barre" Compte Rendu; </li>
       Ensuite nous avons utiliser un identifiant qui nous permettra de modifier la visibilité de notre menu déroulant
        <li> ul id="deroulant"  </li> <br>
        En étudiant le fonctionnement de la propriété “display”; nous avons affecter à l'ID deroulant: 
        <li> display: none; afin de masqué le contenu. </li> <br>
        Après nous utiliser le fonctionnement du sélecteur :hover qui nous permet lorsque l'on survol dans notre barre de navigation les balises ul et li afin elle de modifier la propiété de diplay dans l'ID deroulant en block afin de faire apparaître les éléments cachés. Pour plus de propreté nous avons ajouter quelque commande de style afin de rendre notre menu déroulant plus agréable. </p>
      </div>

</div>
    <div class="card-footer">
      <small class=" card text-center"> Le Peltier Baptiste Barbet Eliott</small>
    </div>
  </div>
  <div id="messages" class="card">
              <div class="card-header">
                <div class="card text-center">
                  <h3 > Question 4 : </h3>
                </div>
              </div>
                  <div class="card-body">
                    <div>
                       <p>Dans les formulaires, justifier les types de balises “input” que vous utilisez ainsi
que les styles que vous leur associé.</p>
                   </div>
                  
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- <input> qui nous permet d'envoyer du texte  -->
  <input class="form-control" type="text" name="messages" id="messages"/>
  <!-- <input> qui nous permet d'envoyer texte dont la valeur est masquée -->
  <input class="form-control" type="password" name="pseudo" id="pseudo"/>
  <!-- <input> qui nous permet d'envoyer une requête -->
  <form method="POST" action="">
        <input class=" btn-primary form-control" type="submit" value="envoyer"/>
  </form>
  <!-- <select> fournit une liste d'options parmi lesquelles l'utilisateur pourra choisir. -->
  <select name="amis" id="amis">
        <option value="Romain">Romain</option>
        <option value="Gwendal">Gwendal</option>
        <option value="Theodore">Theodore</option>
        <option value="Eliott">Eliott</option>
        <option value="Zahaf">Mr Zahaf</option>
        <option value="Mouchere">Mr Mouchere</option>
  </select>
</textarea> 
<div><p>
        Dans cette partie l'utilisation des input nous permet de créer un contrôle interactif dans un formulaire web d'envoyer des requêtes de différentes types :<br> 
        <li>  input type="text" nous permet de renvoyer du texte</li>
        <li>  input type="submit" nous permet de  crée un bouton qui envoie le formulaire</li>
        <li>  input type"password" qui nous permet d'envoyer texte dont la valeur est masquée</li><br>
       Ensuite nous avons utiliser la balise select afin de fournir une liste d'options parmi lesquelles l'utilisateur pourra choisir sur le même modèle que notre menu déroulant mais qui sera modifier afin d'accueillir les noms des amis.
        <li> select <br> option  </li> <br>
       Enfin nous avons utiliser les Class form-control et btn btn-primary de boostrap pour définir le style de nos boutons : </p>
</div>
<img class="" src="bouton.PNG" alt="Oups erreur"><br>
<img class="" src="bouton2.PNG" alt="Oups erreur"><br>
<img class="" src="bouton3.PNG" alt="Oups erreur">
      </div> 
    <div class="card-footer">
      <small class=" card text-center"> Le Peltier Baptiste Barbet Eliotteeeee</small>
    </div>
  </div>
</div>

   </div>
 </body>

</html>