<?php
// Connexion database
include_once('../database.php');
if(!include_once('../database.php')){
    echo 'erreur de connexion : ' . mysqli_connect_error();
    die();
}

// Récupérer les données avec la méthode POST.

    // La vérification des données.
    if(isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];
        // $image = $_POST['image'];
    
        if(empty($nom) || empty($email) || empty($pseudo) || empty($mdp)) {
            header("Location: ../sing-up.php?error=emptyinput");
            exit();
        } else {
            // Si les inputs ne sont pas vides
            // Validation email
            $insert = 'INSERT INTO utilisateurs(nom, pseudo, email, mdp) VALUES ("' . $nom . '" , "' . $pseudo . '" , "' . $email . '" , "' . $mdp . '")';
            mysqli_query($link, $insert);
            if (mysqli_query($link, $insert)) {
                header('Location: ../index.php');
            } else {
                echo "Error: " . $insert . " " . mysqli_error($link);
                die();
            }
        }
    }
    
