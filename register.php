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
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
    <h1 class="header">S'enregistrer</h1>
    <form action="register-processing.php" method="post">
        <div class="input-fields">
            <input type="text" name="name" id="name-field" required placeholder="Nom complet">
        </div>
        <div class="input-fields">
            <input type="email" name="email" id="email-field" required placeholder="Adresse email">
        </div>
        <div class="input-fields">
            <input type="text" name="username" id="username-field" required placeholder="Username">
        </div>
        <div class="input-fields">
            <input type="password" name="password" id="password-field" required placeholder="Password">
        </div>

        <button type="submit">Créer un Compte</button>

        <p><span>Déjà membre?</span> <a href="index.php">connectez-vous !</a></p>
    </form>
</body>
</html>