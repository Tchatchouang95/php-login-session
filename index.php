<?php 
    session_start();
       //The user cannot access any other page apart from profile.php if he is already logged in.
    if(isset($_SESSION['logged_in']) and $_SESSION['logged_in'] == true){
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="header">Connexion</h1>
    <form action="login-processing.php" method="post">
        <div class="input-fields">
            <input type="email" name="email" id="email-field" placeholder="Adresse email">
        </div>
        <div class="input-fields">
            <input type="password" name="password" id="password-field" placeholder="Mot de passe">
        </div>
        
        <div>
            <p><?php 
            //Afficher le message d'erreur si le données entrés ne sont pas correct.
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                }
                ?>
            </p>
            <?php
                //Effacer le message d'erreur quand on actualise la page
                unset($_SESSION['error']);
            ?>
        </div>

        <button type="submit">Se connecter</button>

        <p><span>Pas encore membre?</span> <a href="register.php">créer un compte !</a></p>
    </form>
</body>
</html>