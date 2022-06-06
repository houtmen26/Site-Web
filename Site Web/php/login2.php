
<?php
session_start();
$test = file_get_contents('../db/gfg.json');
$data = json_decode($test, true);
$mail = $_POST['email'];
$motdepasse = $_POST['motdepasse'];
foreach ($data as $key => $value) {
    if (trim($value["email"]) == trim($mail)) {
        if (trim($value["motdepasse"]) == trim($motdepasse)) {
            $_SESSION["login"] = 1;
            $_SESSION["email"] = $value["email"];
            $_SESSION["prenom"] = $value["prenom"];
            $_SESSION["nom"] = $value["nom"];
            $_SESSION["role"] = $value["role"];
            $_SESSION["panier"]=array();
            header("Location:../index.php");
            exit();
        }
        
    }else {
        header("Location:login.php");
    }
}
?>