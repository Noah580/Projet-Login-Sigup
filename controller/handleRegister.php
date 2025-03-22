<?php
require '../models/bdd.php';
require '../models/User.php';

function HandleRegister(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $prenom_user = $_POST['Firstname'];
        $name_user = $_POST['Name'];
        $email_user = $_POST['email'];
        $password_user = $_POST['password'];

        $existingUser = getUserByEmail($email_user);

        if ($existingUser) {
            echo "Ce mail existe déjà pour un autre compte";
            return;
        }

        $hash_pwd = password_hash($password_user, PASSWORD_BCRYPT);

        $register = registerUser($prenom_user, $name_user, $email_user, $hash_pwd);

        if ($register) {
            session_start();
            $_SESSION['user_name'] = $prenom_user;
            $_SESSION['user_email'] = $email_user;
            $_SESSION['user_id'] = getLastInsertId();

            header('Location: ../index.php?page=dashboard'); // Correction du chemin
            exit();
        } else {
            echo "Une erreur est survenue, veuillez réessayer.";
        }
    }
}

HandleRegister();

?>