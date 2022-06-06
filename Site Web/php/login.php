<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangashop-Connexion</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">    
    <link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
    <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <link href="../css/Pageprincipale34.css" type=" text/css" rel="stylesheet">


</head>
<?php include "header.php" ?>;
<body>
    <div class="login-page">
        <h1>Connexion</h1>
        <form method="post" action="login2.php">
            <input type="email" name="email" id="" placeholder="Email">
            <input type="password" name="motdepasse" id="" placeholder="Mot de passe">
            <button type="submit" class="btn">Se connecter</button>
    <p> <a href="inscription.php">
    Inscrivez-vous
        </a>
    </p>
    </form>
    </div>
    </div>
</body>
</html>