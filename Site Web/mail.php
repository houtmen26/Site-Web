<?php
ini_set('SMTP', 'smtp.menara.ma');
$a = "dahmanimal@cy-tech.fr";
$de = $_POST['email'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$sujet = $_POST['sujet'];
$objet = "Message";
$objet2 = "Copie du message submission";
$message = $prenom . " " . $nom . " a laissé un message à propos de:" . $sujet . "\n\n" . $_POST['message'];
$message2 = "Copie de ton message " . $prenom . "\n\n" . $_POST['message'];

$headers = "de:" . $de;
$headers2 = "de:" . $a;
mail($a, $objet, $message, $headers);
mail($de, $objet2, $message2, $headers2);
