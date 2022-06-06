<!doctype HTML>

<head>
    <title>MangaShop-Figurines</title>
    <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <link href="../css/Pageprincipale34.css" type=" text/css" rel="stylesheet">
    <link href="../css/booter.css" type=" text/css" rel="stylesheet">
    <script type="text/javascript" src="../js/produits.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" type="image/png" sizes="16x16" src="../images/logo.ico">
    <style>
        body {
            position: relative;
            margin: 0;
            padding: 0;
            overflow-x: hide;
        }

        .tout {
            min-height: 100%;


            margin-bottom: -50px;
        }

        .footer,
        .push {
            height: 100px;
        }
    </style>
</head>
<?php include "header.php" ?>

<?php $_GET['cat'];
include '../db/db_connnection.php';
$conn = OpenCon();
$nom;
$img;
$stock;
$prix;
$i = 0;

if ($_GET['cat'] == 'manga') {
    $sql = "SELECT id, nom, cat, img, stock, prix FROM produit WHERE cat='manga'";
    $result = $conn->query($sql);
    $rowcount = mysqli_num_rows($result);
    if ($result->num_rows > 0) {

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $nom[$i] =  $row["nom"];
            $img[$i] =  $row["img"];
            $stock[$i] =  $row["stock"];
            $prix[$i] =  $row["prix"];
            $id[$i] =  $row["id"];
            $titre = "Mangas";
            $i = $i + 1;
        }
    }
}
if ($_GET['cat'] == 'figurine') {
    $sql = "SELECT id, nom, cat, img, stock, prix FROM produit WHERE cat='figurines'";
    $result = $conn->query($sql);
    $rowcount = mysqli_num_rows($result);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $nom[$i] =  $row["nom"];
            $img[$i] =  $row["img"];
            $stock[$i] =  $row["stock"];
            $prix[$i] =  $row["prix"];
            $id[$i] =  $row["id"];
            $titre = "Figurines";
            $i = $i + 1;
        }
    }
}

if ($_GET['cat'] == 'poster') {
    $sql = "SELECT id, nom, cat, img, stock, prix FROM produit WHERE cat='poster'";
    $result = $conn->query($sql);
    $rowcount = mysqli_num_rows($result);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $nom[$i] =  $row["nom"];
            $img[$i] =  $row["img"];
            $stock[$i] =  $row["stock"];
            $prix[$i] =  $row["prix"];
            $id[$i] =  $row["id"];

            $titre = "Posters";
            $i = $i + 1;
        }
    }
}
$test = $_GET['cat'];
CloseCon($conn);
?>


<?php
//$test;

//if ($_SERVER['REQUEST_METHOD'] == "POST") {
//  test();
//}
//function test()
///{
//   echo "<script>alert(\"la variable est nulle\")</script>";
//}

?>


<body onload="modal();">
    <div class="tout">
        <div class="container">
            <div class="box3" style="border-bottom: 3px solid black;">
            <div class="row justify-content-start">
                <div class="col-4">
                    <div class="titre">
                        <p style=" font-family: 'Questrial', sans-serif; font-size:30px; display:inline-block" id="tt">
                            <?php echo $titre; ?></p>
                    </div>
                </div>
                </div>
                <?php 
                if (isset($_SESSION["role"])==false ||$_SESSION["role"]!=2) {
                }else{
                  
                echo '<div class="row justify-content-start">
                    <div class="col-4">
                        <div class="text-left">
                            <p onclick=cacher()><a class="">Afficher/cacher le
                                    stock</a></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="text-left"><a style="color:#000;" href="admin.php">Ajouter/Supprimer produit</a></p>
                    </div>
                </div>
                ';
            }
                
                ?>
            </div>
            <?php for ($i = 0; $i < $rowcount; $i++) {
            ?>
                <div class="col">
                    <div class="box">
                        <div class="all">
                            <div class="box3">
                                <div class="titre">
                                    <p class="text-center"> <?php echo $nom[$i]; ?>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <img style="margin-left: auto;
    margin-right: auto; display: block; width:30%; height:130px" class="Images" id="myImg" src="../<?php echo $img[$i]; ?>" />
                            </div>
                            <div class="box2">
                                <div class="contenu1">
                                    <p class="text-center"></p>
                                </div>
                            </div>
                            <div class="box2">
                                <div class="contenu1">
                                    <div class="text-center">
                                        <button style="display: inline-block;" id="dec" class="btnd" onclick="<?php echo "diminuer(" . $i . ");"; ?>">-</button>
                                        <p style="display: inline-block;">Quantité:</p>
                                        <p style="display: inline-block;" class="counting">0</p>
                                        <button class="btni" style="display: inline-block;" id="inc" onclick="<?php echo "incrementer(" . $i . ");"; ?>">+</button>
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_SESSION["role"]) == false || $_SESSION["role"] == 1) {
                                 echo '
                                 <div style="display: none;" class="box2">
                                     <div class="contenu1">
                                         <div class="text-center">
                                             <p class="stock" style="margin-left: auto;
         margin-right: auto; margin-top:10px; width: 6em;font-family: "Questrial", sans-serif;">Stock : <a class="max">' . $stock[$i] . '</a></p>
                                         </div>
                                     </div>
                                 </div>';
                                
                            } else {
                                echo '
                            <div class="box2">
                                <div class="contenu1">
                                    <div class="text-center">
                                        <p class="stock" style="margin-left: auto;
    margin-right: auto; margin-top:10px; width: 6em;font-family: "Questrial", sans-serif;">Stock : <a class="max">' . $stock[$i] . '</a></p>
                                    </div>
                                </div>
                            </div>';
                            }
                            ?>
                            <div class="box2">
                                <div class="contenu1">
                                    <p class="text-center" style="margin-left: auto;
    margin-right: auto; margin-top:10px; width: 6em;font-family: 'Questrial', sans-serif;"><?php echo $prix[$i]; ?>€</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn" type="submit" onclick="<?php echo "ajt(" . $i . ");"; ?>">Ajouter au panier</button>
                        </div>
                    </div>

                </div>
                <script>
                    function ajt(j) {
                        var xmlhttp = new XMLHttpRequest();
                        max = document.getElementsByClassName("max");
                        ct = document.getElementsByClassName('counting');
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                max2 = max[j].innerHTML
                                q = ct[j].innerHTML
                                max3 = parseInt(max2);
                                if (max3 > 0) {
                                    h = parseInt(q);
                                    stock = max3 - q;
                                    panier(j, q);
                                }
                                max[j].innerHTML = stock;
                            }
                        }
                        xmlhttp.open("GET", "produit.php", true);
                        xmlhttp.send();

                    }

                    function panier(j, m) {
                        var xmlhttp = new XMLHttpRequest();
                        var testo = <?php echo $id[$i] ?>;
                        var testi = <?php echo $rowcount ?>;
                        testa=testo-testi+j+1;
                        console.log(testa);
                        if (m != 0) {
                            xmlhttp.open("GET", "addpanier.php?id=" + testa + "&q=" + m, true);
                            xmlhttp.send();
                        }

                    }
                </script>
            <?php
            }
            ?>

        </div>

    </div>
    </div>
    <div id="myModal" class="mod">


        <span class="close">&times;</span>


        <img class="mod-content" id="img01" style="margin-left: auto;
margin-right: auto; display: block; " />



    </div>



    <div class="box">
        <div class="navcot">

            <a href="produit.php?cat=manga">Mangas</a>
            <a href="produit.php?cat=figurine">Figurines</a>
            <a href="produit.php?cat=poster">Posters</a>
        </div>
    </div>
</body>
<br><br><br>
<?php include("footer.php"); ?>