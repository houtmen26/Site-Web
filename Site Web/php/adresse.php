<!DOCTYPE html>
<!--
Formulaire pour mettre l'adresse avannt le paiement 
-->
<html>

<head>
	<link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
	<link href="../css/inscription.css" rel="stylesheet" type="text/css">
	<link href="../css/Pageprincipale34.css" type=" text/css" rel="stylesheet">

	<script type="text/javascript" src="js/formulaire.js"> </script>
	<title>MangaShop-Adresse</title>
	<style>
		body {
			background-size: cover;
			overflow-x: hidden;
			position: relative;
			margin: 0;
			padding: 0;
		}

		.tout {
			min-height: 100%;
			overflow-x: hidden;
			margin-bottom: -50px;
		}

		.footer,
		.push {
			height: 100px;
			overflow-x: hidden;
		}
	</style>
</head>

<body onload="verif2()">
	<?php include "header.php" ?>
	<?php
	if (isset($_SESSION["login"]) == false || $_SESSION["login"] != 1) {
	} else {
		$email=$_SESSION["email"];
		$prenom=$_SESSION["prenom"];
		$nom=$_SESSION["nom"];
	}
	?>
	<div class="tout">
		<form action="paye.php" name="contact" method="POST" class="whatsapp-form">
			<div class="datainput">
				<input class="validate" name="nom" required="" id="nom" type="text" value="<?php if (isset($nom)==true) {
					echo $nom;
				}?>" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Nom</label>
			</div>
			<p id="erreurchara" style="color: rgb(246, 7, 7);"> </p>
			<div class="datainput">
				<input id="prenom" class="validate" name="prenom" required="" type="text" value="<?php if (isset($prenom)==true) {
					echo $prenom;
				}?>" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Prénom</label>
			</div>
			<p id="erreurchara2" style="color: rgb(229, 9, 46);"> </p>
			<div class="datainput">
				<input class="validate" id="wa_email" id="mail" name="email" required="" type="email"  value="<?php if (isset($email)==true) {
					echo $email;
				}?>" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Adresse Mail</label>
			</div>
			<div class="datainput">
				<input class="validate" name="adresse" required="" type="text" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Adresse (numero et rue)</label>
			</div>
			<div class="datainput">
				<input class="validate" name="pays" required="" type="text" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Pays</label>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="datainput">
							<input class="validate" name="ville" required="" type="text" />
							<span class="highlight"></span><span class="bar"></span>
							<label>Ville</label>
						</div>
					</div>
					<div class="col">
						<div class="datainput">
							<input class="validate" name="codepostal" required="" type="number" max="99999" />
							<span class="highlight"></span><span class="bar"></span>
							<label>Code Postal</label>
						</div>
					</div>
				</div>
			</div>
			<input class="envoi" id="envoi" type="submit" value="Envoyer"></input>
			<div id="text-info"></div>
		</form>
		<br><br><br><br>
		<?php include("footer.php"); ?>

	</div>

</body>

</html>