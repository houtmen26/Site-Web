
<!DOCTYPE html>
<html>
<head>
	<link href="../css/inscription.css" rel="stylesheet" type="text/css"> 
	<link href="../css/Pageprincipale34.css" type=" text/css" rel="stylesheet">
	<script type="text/javascript" src="inscription.js"> </script> 
	<title>Mangashop-Inscription</title>
</head>
<?php include "header.php" ?>
<br><br><br>
<body>
	<!--
    Formulaire pour l'inscritpion, avec la foncton check() en onsubmit afin de vérifier la validité des mots de passes
    -->
	<form action="../db/gfg.php" method="POST" onsubmit="return check()" class="whatsapp-form">
		<div class="datainput">
			<select id="wa_select" name="genre">
				<option value="1">Monsieur</option>
				<option value="2">Madame</option>
			</select>
		</div>
		<div class="datainput">
			<input class="validate" name="nom" required="" type="text" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Nom</label>
		</div>
		<div class="datainput">
			<input class="validate" name="prenom" required="" type="text" value="">
			<span class="highlight"></span><span class="bar"></span>
			<label>Prénom</label>
		</div>
		<div class="datainput">
			<input class="validate" id="wa_email" id="mail" name="email" required="" type="email" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Adresse Mail</label>
		</div>
		<div class="datainput">
			<input class="validate" name="motdepasse" required="" type="password" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Mot de passe</label>
		</div>
		<div class="datainput">
			<input class="validate" name="motdepasse2" required="" type="password" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Confirmer le mot de passe</label>
		</div>
		<div class="datainput">
			<input tpye="number" class="validate" id="wa_email" name="numero" required="" type="tel" value=''/>
			<span class="highlight"></span><span class="bar"></span>
			<label>Numéro de tel</label>
		</div> 
		<input class="envoi" type="submit" value="S'inscrire"></input>
		<div id="text-info"></div>
</form>
	<!--
    script d'affichage des messages d'erreur
    -->
	<script type="text/javascript">
		function check() {
    var mdp = document.getElementsByName("motdepasse");
    var mdp2 = document.getElementsByName("motdepasse2");
    if(mdp[0].value !== mdp2[0].value){alert("Veuillez bien saisir le mot de passe"); return false;}
    return true;
}
	</script>

</body>
</html>