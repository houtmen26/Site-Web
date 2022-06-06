<!doctype HTML>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MangaShop-Accueil</title>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.2/iconfont/material-icons.min.css'>

    <link href="./Boutique/css/Pageprincipale.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.jpg" />
    <link href="css/Pageprincipale34.css" rel="stylesheet">
    <style>
        body {
            background-image: url("http://www.favorisxp.com/fonds-decran/lively-wallpaper/paysages/fond-d-ecran-paysage-anime-sakura-volcan-lively-wallpaper.jpg");
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
<header>

	<body >
		<div class="nav-outer">
			<div class="nav-wrap">
				<nav class="navigation">
					<div class="logo"><a href="../index.php"><img src="./images/logo.png" /></a></div>
					<div class="nav" nav-menu-style="yoga">
						<ul class="nav-menu">
							<li><a href="./index.php">Accueil</a></li>
							<li><a href="./php/contact.php"> Contactez-nous</a></li>
							<li><a href="./php/produit.php?cat=manga"> Boutique</a></li>
							<?php
							session_start();
							
							if (isset($_SESSION["login"])==false || $_SESSION["login"]!=1) {
								echo '<li><a href="./php/login.php"> Se connecter</a></li>';
							}else {
								echo'<li><a href="./php/deconnexion.php"> Déconnexion</a></li>';
							}

							?>
							<li><a href="./php/panier.php">Panier </a></li>
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

    <div class="tout">
        <div class="container" style="margin-left: 20%;
    margin-right: 20%;">

            <div class="box">
                <div class="all">
                    <div class="box3">
                        <div class="titre">
                            <p class="text-left" style="margin-left: 1%;
    margin-right: auto; margin-top:10px;font-family: 'Questrial', sans-serif; font-size:20px;">MangaShop</p>
                        </div>
                    </div>
                    <div class="box2">
                        <div class="contenu1">
                            <p class="text-center">MangaShop est une boutique, au coeur de Paris, englobant
                                des activités concernant le rayonnement de la culture
                                nippone et asiatique par le vente de livres, posters et
                                figurines à l’effigie de l’univers de différents animes.
                                Vous pouvez accéder à notre boutique via l'onglet boutique
                                dans le menu. Dans cette boutique vous pourrez y retrouvez 
                                divers articles à différent prix. Il y en a pour tous les goûts!
                                <br>
     Cette boutique se voulant collaborative,
                                nous vous invitons à donner votre avis et surtout n&#39;hésitez
                                pas à nous conseiller. aligato gozaïmass !
                            </p>
                        </div>
                    </div>

                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include("./php/footer.php"); ?>
    </div>
</body>

</html>