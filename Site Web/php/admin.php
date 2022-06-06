<head>
    <title>MangaShop-Figurines</title>
    <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <link href="../css/Pageprincipale34.css" type=" text/css" rel="stylesheet">
    <link href="../css/booter.css" type=" text/css" rel="stylesheet">
    <link href="../css/inscription.css" type=" text/css" rel="stylesheet">
    <script type="text/javascript" src="js/produits.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
    <style>
        body {
            background: none;
        }
    </style>
</head>
<?php include "header.php" ?>
<br>


<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="box">
                <div class="all">
                    <div class="box3">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="titre">
                                        <p class="text-right"><a style="color:#000;" href="?action=add">Ajouter un produit</a></p>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="titre">
                                        <p class="text-left"><a style="color:#000;"" href=" ?action=modifyanddelete">Supprimer un produit</a></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <?php

        include '../db/db_connnection.php';
        $conn = OpenCon();
        /*La page fonctionne de la manière suivante : 
quand on clique sur ajouter un produit, on va afficher un formulaire pour rentrer les informations du produit
en suite les informations de ce formulaire vont être intégrées dans une variable sql qui correspond aux variables produit
que l'on affiche dans la boutique, si on clique sur supprimer alors les produits vont s'afficher comme dans la boutique 
et on pourra alors choisir le produit à supprimer, la suppression va détruire la variable session comme ça le produit n'existera plus*/


        if (isset($_GET['action'])) {

            if ($_GET['action'] == 'add') {


                if (isset($_POST['submit'])) {
                    //On récupère les informations du nouveau produit (nom,prix,lien de l'image,) pour les mettres dans la base de données sql
                    $stock = $_POST['stock'];
                    $title = $_POST['title'];
                    $cat = $_POST['cat'];
                    $prix = $_POST['prix'];
                    $photo = $_FILES['img']['name'];
                    $upload = "../images/" . $photo;
                    move_uploaded_file($_FILES['img']['tmp_name'], $upload);

                    if ($title && $cat && $prix && $stock) {



                        $sql = ("INSERT INTO produit SET nom='$title',prix='$prix',img='./images/$photo',cat='$cat' ,stock='$stock'");
                        mysqli_query($conn, $sql);
                    } else {
                        echo 'veuillez remplir tous les champs';
                    }
                }
        ?>
                <!--
    Affichage du formulaire d'ajout
    -->
                <form action="" method="post" enctype="multipart/form-data" class="whatsapp-form">
                    <div class="datainput">
                        <input class="validate" name=" title" required="" type="text" value='' />
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Titre du produit</label>
                    </div>
                    <div class="datainput">
                        <input class="validate" name="cat" required="" type="area" value='' />
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Categorie du produit</label>
                    </div>
                    <div class="datainput">
                        <input class="validate" name=" prix" required="" type="number" value='' />
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Prix</label>
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
                    <!--
    ATTENTION !!!!! L'image doit provenir du dossier images dans le dossier boutique du site, sinon elle ne s'affichera pas 
    pour ajouter un nouvel article il faudra donc rajouter son image dans le dossier
    -->
                    <h3> Image :</h3><br>
                    <input type="file" name="img" accept="image/*" /><br><br>
                    <div class="datainput">
                        <input class="validate" name="stock" required="" type="number" value='' />
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Stock</label>
                    </div>
                    <input class="envoi" type="submit" name="submit" />
                </form>

            <?php

            } else if ($_GET['action'] == 'modifyanddelete') {
                //Affichage des produits pour pouvoir les supprimer 
                $sql = ("SELECT * FROM produit");

                $result = $conn->query($sql);
            ?>
                <div class="container">
                    <div class="row">
                        <?php
                        $rowcount = mysqli_num_rows($result);
                        $i = 0;
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $nom[$i] =  $row["nom"];
                                $img[$i] =  $row["img"];
                                $stock[$i] =  $row["stock"];
                                $prix[$i] =  $row["prix"];
                                $id[$i] =  $row["id"];

                                $i = $i + 1;
                            }
                        }
                        $z = 0;
                        for ($z = 1; $z < $rowcount; $z++) {
                        ?>
                            <div class="col-lg-4">
                                <div class="box">
                                    <div class="all">
                                        <div class="box3">
                                            <div class="titre">
                                                <p class="text-center"><?php echo $nom[$z]; ?></p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <img style="margin-left: auto;
    margin-right: auto; display: block; width:30%; height:130px" src="../<?php echo $img[$z]; ?>" />
                                        </div>
                                        <div class="box2">
                                            <div class="contenu1">
                                                <p class="text-center"></p>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="contenu1">
                                                <div class="text-center">
                                                    <p class="stock" style="margin-left: auto;
    margin-right: auto; margin-top:10px; width: 6em;font-family: 'Questrial', sans-serif;">Stock : <a class="max"><?php echo $stock[$z]; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box2">
                                            <div class="contenu1">
                                                <p class="text-center" style="margin-left: auto;
    margin-right: auto; margin-top:10px; width: 6em;font-family: 'Questrial', sans-serif;"><?php echo $prix[$z]; ?></p>
                                            </div>
                                        </div>


                                    </div>
                                    <form action="?action=delete&amp;id=<?php echo $id[$z]; ?>" method="POST" class="text-center"> <input class="btn" type="submit" value="Supprimer"></input></form>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div><br>
        <?php

            } else if ($_GET['action'] == 'delete') {
                //Suppression du produit choisi
                $id = $_GET['id'];
                $sql = ("DELETE FROM produit WHERE id=$id");
                mysqli_query($conn, $sql);
            }
        }


        ?>