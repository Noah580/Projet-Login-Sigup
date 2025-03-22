<?php

    function DisplayHome(){
        echo "<h1>Bienvenue sur la page d'accueil !</h1>";
        echo "<a href='index.php?page=login'>Se connecter</a>";
        echo "<a href='index.php?page=signup'>S'inscrire</a>";
    }

    function DisplayLogin(){
        include 'views/login.php';
    }

    function DisplaySignup(){
        include 'views/signup.php';
    }

    function DisplayDashboard(){
        include 'views/dashboard.php';
    }
?>

