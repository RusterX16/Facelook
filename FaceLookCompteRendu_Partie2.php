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

<div class="row">
    <div class="card-deck">
  <div id="messages" class="card">
              <div class="card-header">
                <div class="card text-center">
                  <h3 > Question 1 : </h3>
                </div>
              </div>
                  <div class="card-body">
                    <div>
                       <p>Créer les autres tables du MLD proposé. Donner dans votre compte-rendu les requêtes
de création. Attention à utiliser des types cohérents avec la table “Utilisateur” qui
est imposée.</p>
                   </div>
        <div >
             <p> MLD :</p>
                   </div>   
<img class="" src="MLD1.PNG" alt="Oups erreur"> 
<img class="" src="MLD2.PNG" alt="Oups erreur"> 
<img class="" src="MLD3.PNG" alt="Oups erreur">
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- table Utilisateurs -->
  CREATE TABLE Utilisateurs (Pseudo CHAR(20), nom CHAR(20),prenom CHAR(20), PRIMARY KEY(Pseudo));
  <!-- table Amis -->
  CREATE TABLE Amis (PseudoMoi CHAR(20), PseudoLui CHAR(20),PRIMARY KEY(PseudoMoi,PseudoLui));
  <!-- table Message -->
CREATE TABLE Message (Code int(11) NOT NULL   AUTO_INCREMENT, Texte CHAR(20), PseudoDe CHAR(20) ,PseudoPour CHAR(20) ,PRIMARY KEY(Code));

</textarea>
<img class="" src="table.PNG" alt="Oups erreur"> 
<p> Pour réaliser notre MLD, il fallait que toute les entités du MCD se traduisent en tables avec comme clé
primaire de la table l’identifiant de l’entité soit "Pseudo","Code","PseudoMoi","PseudoLui". </p> <br>
<p>Dans  notre cas on remarque que les relations du MCD, où dans les entités on observe une cardinalité 1-1. Dans ce cas il faut que les identifiants des autres entités participent à la relation en question. Ici "De" et "Pour" doivent participer à la relation "Message" en temps que clé secondaire.</p> 
<p> Enfin dans nos relations où les cardinalités maximales sont à n, ils doivent être traduite par une table où :
<li> clé primaire = l’ensemble des identifiants des entités qui participent à la relation</li>
<li>attributs = les attributs de la relation</li>
Dans notre cas il faut donc que "Lui" et "Moi" soient les clés primaires de l'entité "amis".
 </p> <br>
 <p> Pour la création des tables dans notre base de données on utilise la commande "CREATE TABLE" suivi du nom de la table. Ensuite on utilise notre MLD pour complété les attributs de notre table sans oublier de préciser le type de nos attributs ici "CHAR (20)" pour du texte et "int(11)" pour les chiffres. On précise qu'elles sont nos clé primaire avec l'outil "PRIMARY KEY ()".On ne souhaite pas que l'utilisateur entre un chiffre quand il envoie un message alors on met la clé primaire "Code" en "AUTO_INCREMENT" pour qu'il s'incrémente tout seul.Nous avons donc bien crée nos 3 tables au sein de notre base de données.</p>
      </div> 


    <div class="card-footer">
      <small class=" card text-center"> Le Peltier Baptiste Barbet Eliott</small>
    </div>
  </div>

        <div id="messages" class="card">
              <div class="card-header">
                <div class="card text-center">
                  <h3 > Question 2 : 
                </div>
              </div>
                  <div class="card-body">
                    <div>
                       <p><li>Ajouter quelques entrées dans les tables (4 utilisateurs, 2 liens d’amitiés, 4 messages).</li><br>
                       <li> Donner dans votre compte-rendu les requêtes types pour :</li><br>
                             — Ajouter un lien d’amitié<br>
                             — Ajouter un message </p>
                   </div>
<textarea  name="Q2"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- utilisateurs -->
INSERT INTO `utilisateur`(`Pseudo`, `nom`, `prenom`) VALUES ('Moto','Henriot','Romain');
INSERT INTO `utilisateur`(`Pseudo`, `nom`, `prenom`) VALUES ('LPB','Le Peltier','Baptiste');
INSERT INTO `utilisateur`(`Pseudo`, `nom`, `prenom`) VALUES ('KhaZix','Barbet','Eliott');
INSERT INTO `utilisateur`(`Pseudo`, `nom`, `prenom`) VALUES ('LEETIC','Le Thiec','Gwendal');
</textarea> 
 <img class="text-center" src="Utilisateur.PNG" alt="Oups erreur">
 <p>Pour ajouter nos utilisateurs dans notre table "utilisateur" on fait appelle à la commande "INSERT INTO" qui permet l'insertion de données  en remplissant les champs valeurs de "Pseudo","nom" et "prenom"  en valeurs textuelles.</p> <br>
<textarea  name="Q2"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
<!-- Amis -->
INSERT INTO `Amis`(`PseudoMoi`, `PseudoLui`) VALUES ('Moto','LPB');
INSERT INTO `Amis`(`PseudoMoi`, `PseudoLui`) VALUES ('LPB','Moto');
INSERT INTO `Amis`(`PseudoMoi`, `PseudoLui`) VALUES ('KhaZix','LPB');
INSERT INTO `Amis`(`PseudoMoi`, `PseudoLui`) VALUES ('LPB','KhaZix');
</textarea> 
<img class="text-center" src="amis.PNG" alt="Oups erreur">
<p> Nous fesons de même pour ajouter nos liens d'amitié dans notre table "Amis" avec la commande "INSERT INTO" sauf que ici pour réaliser un lien d'amité il faut utiliser deux commande "INSERT INTO" afin que l'amitié soit réciproque sinon la personne serait amis avec l'utilisateur sans que lui en retour le soit et causerait des problème par la suite lorsque l'on voudra regarder son Mur ou écrire des messages. </p> <br>
<textarea  name="Q2"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
<!-- Message -->
INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`) VALUES ('cc','LPB','Moto');
INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`) VALUES ('ça va','Moto','LPB');
INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`) VALUES ('ok','LPB','Moto');
INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`) VALUES ('apéro?','Moto','LPB');
</textarea> 
<img class="text-center" src="message.PNG" alt="Oups erreur">
<p> Enfin  nous réalisons la même chose pour ajouter des messages dans notre table "message" avec la commande "INSERT INTO". </p> <br>
<p> Nous avons donc bien crée dans notre base de données 4 utilisateurs avec 3 liens amitié ainsi que 4 messages.</p> <br>
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
                       <p>Soit “XXX” le pseudo d’un utilisateur.
Proposer les 3 requêtes permettant d’obtenir<br>
— les nom et prénom de l’utilisateur XXX<br>
— sa liste des amis de XXX (avec leur pseudo, nom et prénom)<br>
— la liste des messages de lui ou pour lui, avec les pseudo des expéditeurs et
destinataires (pas leur nom/prénom)</p>
                   </div>
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- selection du nom prenom d'un utilisateur amis -->
  SELECT nom , prenom FROM amis INNER JOIN utilisateur ON amis.PseudoLui=utilisateur.Pseudo WHERE PseudoLui ='Moto'
</textarea> 
<img class="" src="selectnomprenom.PNG" alt="Oups erreur">
<p> Pour sélectionner des informations particulières au sein de notre bas de données on fait appelle à la commande "SELECT FROM". Le "SELECT" permet de choisir les attributs qui nous intéressent soit "nom" et "prenom". Le "FROM" désigne la table dans laquelle on va réaliser l'opération ici il s'agit de notre table "amis". Le "INNER JOIN * ON" est la commande qui permet de faire la jointure entre nos tables, ici nous voulons récupérer les attributs de la table "utilisateur"  où on affecte  une relation entre la clé primaire  de la table "amis", "PseudoLui" à la clé primaire "Pseudo". Enfin le "WHERE" est la condition qui permet de réaliser  la sélection et si en condition on met 1 alors on retourner tout les nom et prenom de nos amis. Nous avons mi en condition le pseudo d'un amis et il retourne bien son "nom" et "prenom".</p> <br>
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- Liste des amis -->
  SELECT `PseudoMoi`, `PseudoLui`, prenom,nom FROM `amis` INNER JOIN utilisateur ON utilisateur.Pseudo = PseudoLui  WHERE PseudoMoi ='LPB'
</textarea> 
<img class="" src="Listeamis.png" alt="Oups erreur">
<p> Pour sélectionner la liste des amis on a également fait appelle à la commande "SELECT FROM" avec les attribus "PseudoMoi", "PseudoLui", "prenom","nom" et lié le "PseudoLui" de notre amis à sont Pseudo "utilisateur" ainsi que la condition PseudoMoi ='LPB'pour afficher la liste des amis de l'utilisateur 'LPB'. Nous obtenons bien la liste des amis de l'utilisateur ainsi que leur nom et prenom.</p> <br>
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- Liste des messages -->
  SELECT  `Texte`, `PseudoDe`, `PseudoPour`, `Date` FROM `message` WHERE PseudoDE ='LPB'
</textarea> 
<img class="" src="Listemessage.png" alt="Oups erreur">
<p> Pour sélectionner la liste des messages on a également fait appelle à la commande "SELECT FROM" avec les attribus `Texte`, `PseudoDe`, `PseudoPour` avec la condition PseudoDE ='LPB' pour afficher la liste des messages que  l'utilisateur 'LPB' à envoyer . Nous obtenons bien la liste des messages que l'utilisateur à envoyés ainsi que le pseudo de l'utilisateur qui à reçu le message.</p> <br>
      </div> 
      
    <div class="card-footer">
      <small class=" card text-center"> Le Peltier Baptiste Barbet Eliott</small>
    </div>
  </div>
  <div id="messages" class="card">
              <div class="card-header">
                <div class="card text-center">
                  <h3 > Question 4 (Bonus): </h3>
                </div>
              </div>
                  <div class="card-body">
                    <div>
                       <p>Ajouter un champ “date” aux messages pour pouvoir trier les messages par date et afficher
cette date dans la partie suivante.</p>
                   </div>
<textarea  name="Q1"  rows="10" cols="42" placeholder="Voici le code."readonly="readonly" class="code">
  <!-- mise à jour de la table Message -->
  CREATE TABLE Message (Code int(11) NOT NULL   AUTO_INCREMENT, Texte CHAR(20), PseudoDe CHAR(20) ,PseudoPour CHAR(20) ,Date_message DATETIME NOT NULL,PRIMARY KEY(Code));
  <!-- ajout de la date des messages -->

INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`,Date_message) VALUES ('cc','LPB','Moto','2021/03/23 18:46:59');
INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`,Date_message) VALUES ('ça va','Moto','LPB','2021/03/23 18:47:59');
INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`,Date_message) VALUES ('ok','LPB','Moto','2021/03/23 18:48:59');
INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`,Date_message) VALUES ('apéro?','Moto','LPB','2021/03/23 18:49:59');
INSERT INTO `message`(`Texte`, `PseudoDe`, `PseudoPour`,Date_message) VALUES ('petite bière','LPB','Moto','2021/03/23 18:50:59');
<!-- trie des messages par date -->
SELECT * FROM   message
WHERE  Date_message BETWEEN '2021/03/23 18:47:59' AND '2021/03/23 18:50:59'
</textarea> 
<img class="" src="Date.png" alt="Oups erreur">
<p> Pour la modifiaction de la tables "message" dans notre base de données on a supprimer l'ancienne pour en crée une nouvelle table avec l'attributs "Date_message" en utilisant la commande "CREATE TABLE". Ensuite on utilise l'outil "DATETIME" pour afficher la date de nos messages.On aurait aussi pu utiliser la commande "Update" mais nous avons préférés l'autre option. Pour ajouter nos messages dans notre table "messages" on fait appelle à la commande "INSERT INTO"  et en supprimant le champ "Code" vu qu'il s'auto incrémente et on remplis les champs  de notre table avec la date des messages.Pour trier on réalise un "SELECT" avec comme condition les messages entre deux dates défini. Nous obtenons ainsi la table message et on peut a présent trier nos messages par date.</p> <br>
<img class="" src="Date_message.png" alt="Oups erreur">
      </div> 
    <div class="card-footer">
      <small class=" card text-center"> Le Peltier Baptiste Barbet Eliott</small>
    </div>
  </div>
</div>
   
 </body>

</html>