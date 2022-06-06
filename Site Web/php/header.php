<header>

	<body >
		<div class="nav-outer">
			<div class="nav-wrap">
				<nav class="navigation">
					<div class="logo"><a href="../index.php"><img src="../images/logo.png" /></a></div>
					<div class="nav" nav-menu-style="yoga">
						<ul class="nav-menu">
							<li><a href="../index.php">Accueil</a></li>
							<li><a href="contact.php"> Contactez-nous</a></li>
							<li><a href="produit.php?cat=manga"> Boutique</a></li>
							<?php
							session_start();
							
							if (isset($_SESSION["login"])==false || $_SESSION["login"]!=1) {
								echo '<li><a href="login.php"> Se connecter</a></li>';
							}else {
								echo'<li><a href="deconnexion.php"> Déconnexion</a></li>';
							}

							?>
							<li><a href="panier.php">Panier </a></li>
							<li><a href=""></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<br>

		<br>
		<br>
		


</header>