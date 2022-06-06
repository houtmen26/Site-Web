<?php
    //Pour vider le panier on a juste à vider la varieble SESSION du panier 
    //Au passage à chaque id enlevé du panier il faut remettre dans le stock le produit 
    include '../db/db_connnection.php';
$conn = OpenCon();
    session_start();
    $panier = $_SESSION["panier"];
    $quant=$_SESSION["quantite"];
    $taille = count($panier);
    for ($i = 0; $i < $taille; $i++) {
        $result = $conn->query('SELECT nom, prix FROM produit WHERE id="' . $panier[$i] . '"');
        $sql = 'UPDATE produit SET stock=stock+' . $quant[$i] . ' WHERE id="' . $panier[$i] . '"';
        $conn->query($sql);
    }
    $_SESSION["quantite"]=array();
    $_SESSION["panier"] = array();
    header("Location: panier.php"); exit();  
    CloseCon($conn);  
?>