<?php
require __DIR__ . '/../models/bdd.php';
require __DIR__ . '/../models/User.php';

function handleLogin() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email_user = $_POST['email'];
        $password_user = $_POST['password'];

        // Vérifie si l'utilisateur existe dans la base de données
        $existingUser = getUserByEmail($email_user);

        if ($existingUser) {
            // L'utilisateur existe, on compare le mot de passe
            if (password_verify($password_user, $existingUser['mdp_user'])) {
                // Le mot de passe est correct
                session_start();
                $_SESSION['user_name'] = $existingUser['prenom_user'];
                $_SESSION['user_email'] = $existingUser['mail_user'];
                $_SESSION['user_id'] = $existingUser['id_user'];

                // Redirection vers le dashboard
                header('Location: index.php?page=dashboard');
                exit();
            } else {
                // Le mot de passe est incorrect
                echo "Mot de passe incorrect.";
            }
        } else {
            // L'utilisateur n'existe pas
            echo "Aucun utilisateur trouvé avec cet email.";
        }
    }
}
