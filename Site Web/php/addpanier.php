<?php

$c=$_REQUEST["q"];
$b=$_GET["id"];
session_start();
$panier = $_SESSION["panier"];
$quant=$_SESSION["quantite"];
$taille = count($panier);
$quant[$taille] = $c;
$panier[$taille] = $b;
$_SESSION["panier"] = $panier;
$_SESSION["quantite"] = $quant;

?>