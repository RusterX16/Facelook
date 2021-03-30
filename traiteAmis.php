<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>FaceLOOK</title>

</head>

<body>
<?php include("FaceLookMenu.php"); ?>

<div id="corps">
	
<?php
	try {
		$connexion= new PDO("mysql:host=localhost;dbname=FaceLOOK","root", "");
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}

if (!isset($_POST['PseudoLui'])  || empty($_POST['PseudoLui']) )
	{
		echo '<p class="erreur">Il manque des informations obligatoires</p>';
		echo '<p class="erreur">';
	
		if (!isset($_POST['PseudoLui'])|| empty($_POST['PseudoLui']))	echo 'Le Pseudo saisie est incorrect.  <br />';
		
		
		echo '<a href="FaceLookMesAmis.php">Retour</a></p>';
	}else{
		// requete d'insertion
		$req = "INSERT INTO `Amis`(`PseudoMoi`, `PseudoLui`) VALUES ('".$_POST['PseudoMoi']."', '".$_POST['PseudoLui']."');" +
			   "INSERT INTO `Amis`(`PseudoMoi`, `PseudoLui`) VALUES ('".$_POST['PseudoLui']."', '".$_POST['PseudoMoi']."');";
		// execution de la requete et vérification d'erreur
		if(! $connexion->query($req)){
			echo " Problème : $req <br/> "; print_r($connexion->errorInfo());
		}else{
			echo 'Amis ajouté, vous pouvez aller sur <a href="FaceLookMur.php"> votre Mur</a>';
		}
	
	}
	$connexion = null; // deconnexion
?>
</div>
</body>
</html>