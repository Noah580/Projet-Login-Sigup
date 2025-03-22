<?php
session_start();

// Afficher la page d'accueil
function DisplayHome(){
    echo "<h1>Bienvenue sur la page d'accueil !</h1>";
    echo "<a href='index.php?page=login'>Se connecter</a>";
    echo "<a href='index.php?page=signup'>S'inscrire</a>";
}

// Afficher la page de connexion
function DisplayLogin(){
    include 'views/login.php';
}

// Afficher la page d'inscription
function DisplaySignup(){
    include 'views/signup.php';
}

// Afficher le dashboard
function DisplayDashboard(){

    if (!isset($_SESSION['user_id'])) {

        header('Location: index.php?page=login');
        exit();
    }


    include 'views/dashboard.php';
    echo "<h1>Bienvenue " . $_SESSION['user_name'] . " !</h1>";
    echo "<a href='index.php?page=logout'>Se déconnecter</a>";
}

// Gérer l'inscription
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['page']) && $_GET['page'] == 'signup') {
    require 'controller/handleRegister.php';
    handleRegister();
}

// Gérer la connexion
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['page']) && $_GET['page'] == 'login') {
    require 'controller/handleLogin.php';
    handleLogin();
}

// Gérer la déconnexion
if (isset($_GET['page']) && $_GET['page'] == 'logout') {
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php?page=home');
    exit();
}
?>
