<!DOCTYPE html>
<!--
Formulaire pour mettre l'adresse avant le paiement 
-->
<html>

<head>

	<link href="../css/inscription.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../js/formulaire.js"> </script>
	<title>MangaShop-Contactez-nous</title>
	<script type="text/javascript" src="js/formulaire.js"></script>
	<link href="../css/booter.css" type=" text/css" rel="stylesheet">
	<link href="../css/Pageprincipale34.css" type=" text/css" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
	<style>
		body {
			background-image: url("https://images4.alphacoders.com/111/thumb-1920-1113439.jpg");
			background-size: cover;
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

<?php include "header.php" ?>;
<?php
if (isset($_SESSION["login"]) == 1) {
	$email = $_SESSION["email"];
	$prenom = $_SESSION["prenom"];
	$nom = $_SESSION["nom"];
}
?>




<?php
$errmail = $errprenom = $errnom = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_POST["nom"];
	$_POST["prenom"];
	$_POST["email"];
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	if (preg_match(" /[^a-zA-Z\-\é\è\à\ê\ë\ï\î ]/", $nom) || empty($_POST["nom"])) {
		$errnom = "Le nom est vide ou contient des caractères spéciaux";
	}
	if (preg_match(" /[^a-zA-Z\-\é\è\à\ê\ë\ï\î ]/", $prenom) || empty($_POST["prenom"])) {
		$errprenom = "Le prenom est vide ou contient des caractères spéciaux";
	}

	$email = $_POST["email"];
	$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
	if (!preg_match($pattern, $email)) {
		$errmail = "Email non valide";
	}
}
?>

<body onload="verif()">
	<div class="tout" >
		<form name="contact" method="POST" class="whatsapp-form">
			<label>Date de contact</label>
			<br>
			<div class="datainput">

				<input class="validate" required="" id="date" type="date" />
				<span class="highlight"></span><span class="bar"></span>

			</div>
			<p id="erreur" style="color: rgb(246, 7, 7);"> </p>
			<div class="datainput">
				<input class="validate" name="nom" required="" id="nom" type="text" value="<?php if (isset($nom) == true) {
																								echo $nom;
																							} ?>" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Nom</label>
			</div>
			<span class="error"><?php echo $errnom; ?> </span>
			<p id="erreurchara" style="color: rgb(246, 7, 7);"> </p>
			<div class="datainput">
				<input id="prenom" class="validate" name="prenom" required="" type="text" value="<?php if (isset($prenom) == true) {
																										echo $prenom;
																									} ?>" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Prénom</label>
			</div>
			<span class="error"><?php echo $errprenom; ?> </span>
			<p id="erreurchara2" style="color: rgb(229, 9, 46);"> </p>
			<div class="datainput">
				<input class="validate" id="mail" name="email" required="" type="email" value="<?php if (isset($email) == true) {
																									echo $email;
																								} ?>" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Adresse Mail</label>
			</div>
			<span class="error"><?php echo $errmail; ?> </span>
			<br>
			<label>Sexe</label>
			<br><br>
			<div class=>
				<input class="validate" name="Sexe" required="" type="radio" />
				<label style="display:inline-block;" for="Sexe">Homme</label>



			</div>
			<div class=>
				<input name="Sexe" required="" type="radio" value="femem" />
				<label style="display:inline-block;" for="Sexe">Femme</label>



			</div>
			<br>
			<label>Date de naissance</label>
			<br>
			<div class="datainput">

				<input class="validate" id="date2" name="name" required="" type="date" />
				<span class="highlight"></span><span class="bar"></span>

			</div>
			<p id="erreur2" style="color: rgb(246, 7, 7);"> </p>
			<label>Statut</label>
			<br>
			<div class="datainput">

				<select required="">
					<option>Professionel</option>
					<option>Particulier</option>
				</select>
				<span class="highlight"></span><span class="bar"></span>

			</div>
			<div class="datainput">
				<input class="validate" name="name" required="" type="text" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Sujet</label>
			</div>
			<div class="datainput">
				<input class="validate" name="name" required="" type="text" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Votre commentaire</label>
			</div>
			<input onclick="color()" class="envoi" id="envoi" type="submit" value="envoyer"></input>
			<div id="text-info"></div>
		</form>
		<br><br><br><br>
		<?php include("footer.php"); ?>

	</div>

</body>


</html>