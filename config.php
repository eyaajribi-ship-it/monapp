<?php
$servername = "localhost";
$username = "root";
$password = ""; // sur XAMPP, le mot de passe est vide par défaut
$dbname = "monapp"; // le nom de ta base de données

// Connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>
