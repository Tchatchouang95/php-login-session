<?php 
    session_start();
    //All users who are not logged in should be redirected to the index.php to log in.
    if(!isset($_SESSION['logged_in']) and $_SESSION['logged_in'] == false){
        header('Location: index.php');
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
    <title>Profile</title>
</head>
<body>
    <img src="images/user.png" alt="profile"  class="center-all">
    <p  class="center-all" id="welcome">Bienvenue dans votre compte, <?php echo $_SESSION['user']['name'] ?></p>
    <p  class="center-all"><?php echo $_SESSION['user']['username'] ?></p>
    <p  class="center-all"><?php echo $_SESSION['user']['email'] ?></p>

    <div>
        <button id="btn-logout"><a href="logout.php">Décconexion</a></button>
    </div>
</body>
</html>