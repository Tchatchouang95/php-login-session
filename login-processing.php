<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['email']) and $_POST['email'] != '' and
           isset($_POST['password']) and $_POST['password'] != ''
        ){
            session_start(); /*Start SESSION inorder to check in the newly
             input data correspond to that stored in the SESSION, if its true,
              then you are redirected to the profile page, else, you are asked to create an account first.*/
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email == $_SESSION['user']['email'] and $password == $_SESSION['user']['password']){
                $_SESSION['logged_in'] = true; //to confirm that a user is actually logged in
                header('Location: profile.php');
            }
            else {
                //Alert if input data does not coreespond to the one stored in the SESSION
                $_SESSION['error'] = "Incorrect email or password !"; 
                //then redirect to login page again for another triial
                header('Location: index.php');
            }
        }
        else {
            echo "Veuillez rempir tout les champs";
        }
    }
?> 