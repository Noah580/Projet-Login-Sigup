<?php
require_once 'bdd.php';

function registerUser($prenom, $nom, $email, $password) {
    $pdo = getDataBase(); // Obtenir la connexion
    
    $query = "INSERT INTO utilisateur (prenom_user, nom_user, mail_user, mdp_user, dt_crea_user) 
              VALUES (:prenom, :nom, :email, :password, NOW())";
    $stmt = $pdo->prepare($query);
    
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    return $stmt->execute();
}

function getUserByEmail($email) {
    $pdo = getDataBase(); // Obtenir la connexion

    $query = "SELECT * FROM utilisateur WHERE mail_user = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC); 
}

function getLastInsertId() {
    $pdo = getDataBase(); // Obtenir la connexion
    return $pdo->lastInsertId();
}
?>