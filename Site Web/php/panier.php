<!doctype HTML>

<head>
    <title>MangaShop-Panier</title>

    <link href="../css/Pageprincipale34.css" type=" text/css" rel="stylesheet">
    <link href="../css/booter.css" type=" text/css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   
</head>

<header>

<?php include "header.php" ?>
<br><br><br><br><br>
<header>
<?php
$panier=0;
$taille=0;
if(isset($_SESSION["panier"])==true){
$panier = $_SESSION["panier"];
$quant = $_SESSION["quantite"];
$taille = count($panier);
}
$total = 0;

include '../db/db_connnection.php';
$conn = OpenCon();
$nom;
$img;
$stock;
$prix;
$i;
$j = 0;


for ($i = 0; $i < $taille; $i++) {
    $result = $conn->query('SELECT nom, prix FROM produit WHERE id="' . $panier[$i] . '"');
    $sql = 'UPDATE produit SET stock=stock-' . $quant[$i] . ' WHERE id="' . $panier[$i] . '"';
    $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $nom[$j] =  $row["nom"];
            $prix[$j] =  $row["prix"];
            $j = $j + 1;
        }
    }
}

CloseCon($conn);
?>

<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="box">
                <div class="all">
                    <div class="box3">
                        <div class="titre">
                            <p class="text-left">Panier : <?php if ($taille==0 || $taille==1) {
                                echo $taille, " Article";
                            }else {
                                echo $taille, " Articles";
                            }
                            ?></p>
                        </div>
                    </div>

                    <?php for ($z = 0; $z < $j; $z++) {
                        $total = $total + $prix[$z] * $quant[$z]; ?>
                        <div class="box2">
                            <div class="contenu1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <p class="text-center">Article : <?php echo $nom[$z]; ?> </p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="text-center">Quantité :<?php echo $quant[$z] ?></p>
                                        </div>
                                        <div class="col-sm">
                                            <p class="text-center"><?php echo $prix[$z]; ?>€</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                    <div class="box4">
                        <div class="titre">
                            <p class="text-right">
                                <?php echo $total; ?>€</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <!--
        Bouttons pour check out le panier ou le vider
        -->
                            <form action="viderpanier.php" method="POST" class="text-left" ><input class="btn" type="submit" value="Vider le panier" style="font-family: 'Questrial', sans-serif;"></input></form>


                            <form action="adresse.php" method="POST" class="text-right" > <input class="btn" type="submit" value="Payer" style="font-family: 'Questrial', sans-serif;"></input></form>
                        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
                   
                 
            </body>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <?php include("footer.php"); ?>
            

            </html>