<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link href="../css/inscription.css" rel="stylesheet" type="text/css">
	<link href="../css/Pageprincipale34.css" type=" text/css" rel="stylesheet">
	<title>MangaShop-Paiement</title>
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

<body>

	<?php include "header.php" ?>;
	<div class="tout">
		<form action="recu.php" method="POST" onsubmit="return check()" class="whatsapp-form">
			<div class="datainput">
				<input class="validate" name="cardnum" required="" type="number" oninvalid="this.setCustomValidity('Veuillez entrer un numéro de carte valide')" oninput="this.setCustomValidity('')" max="9999999999999999" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Numero de Carte </label>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="datainput">
							<input class="validate" name="expi" required="" type="month" />
							<span class="highlight"></span><span class="bar"></span>
							<label></label>
						</div>
					</div>
					<div class="col">
						<div class="datainput">
							<input class="validate" name="CVV" oninvalid="this.setCustomValidity('Veuillez entrer un CVV valide')" oninput="this.setCustomValidity('')" type="number" max="999" />
							<span class="highlight"></span><span class="bar"></span>
							<label>CVV</label>
						</div>
					</div>
				</div>
			</div>
			<input class="envoi" id="envoi" type="submit" value="Payer"></input>
			<div id="text-info"></div>
		</form>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<footer>
			<div class="footer" style="overflow: hidden">
				<div class="nav-wrap">
					<nav class="navigation">

						<div class="nav" nav-menu-style="yoga">
							<ul class="nav-menu">

								<a> Copyright Malik Dahmani Houtmen EL MORRABIT</a>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>