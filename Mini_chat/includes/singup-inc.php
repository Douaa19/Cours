<?php
// Connexion database
include_once('../database.php');

// Récupérer les données avec la méthode POST.
$nom = $_POST['nom'];
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$sing_up = $_POST['sing-up'];

    // La vérification des données sont vides ou pas.
    if(empty($nom) || empty($email) || empty($pseudo) || empty($mdp) || empty($sing_up)) {
        header("Location: ../sing-up.php?error=emptyinput");
        exit();
    } else {
        // Si les inputs ne sont pas vides
        // Validation email
        $insert = "INSERT INTO utilisateurs(nom, pseudo, email, mdp) VALUES ('$nom', '$pseudo', '$email', '$mdp')";
        $result = mysqli_query($link, $insert);
        if ($result) {
            header('Location: ../index.php');
        } else {
            echo "Error: " . $insert . " " . mysqli_error($link);
            die();
        }
    }
