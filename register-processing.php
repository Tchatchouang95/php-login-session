<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //checks if input fields exists and are not empty!
        if(isset($_POST['name'])  and $_POST['name'] != '' and 
           isset($_POST['email']) and $_POST['email'] != '' and
           isset($_POST['username']) and $_POST['username'] != '' and 
           isset($_POST['password']) and $_POST['password'] != ''
        ){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = [
                "name" => $name,
                "email" => $email,
                "username" => $username,
                "password" => $password
            ];

            //Keep user's informations using SESSIONS
            session_start(); // initialising a session to collect and store data

            $_SESSION['user'] = $user; // array where user's input data will be stored
            $_SESSION['logged_in'] = true; /*If you ommit to add this, whenever
            a user tries to create an account, when he clicks on submit, he will
            still be redirected to the index.php instead of the profile page because
            at the profile page, a condition was placed a the head of the page
            that; all users who are not connected and who's $SESSION['logged_in] = false
            should be redirected to the index.php page.

            header('Location: profile.php'); //Then we are redirected to profile page
        }
        else{
            echo 'veuillez remplir tout les champs';
        }
    }
    else{
        //redirects to the homepage if request method != POST
        header('Location: index.php');
    }