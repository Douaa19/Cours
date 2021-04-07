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
    
        if(empty($nom) || empty($email) || empty($pseudo) || empty($mdp)) {
            header("Location: ../sing-up.php?error=emptyinput");
            die();
        } else {
            // Si les inputs ne sont pas vides
            // Validation email
            $select = "SELECT * FROM utilisateurs WHERE nom = '$nom' AND pseudo = '$pseudo' AND email = '$email' AND mdp = '$mdp'";
            $res = mysqli_query($link, $select);
            if (mysqli_num_rows($res) == 1) {
                header('Location: ../sing-up.php?This_informations_repated!');
                die();
            } else {
                $insert = 'INSERT INTO utilisateurs(nom, pseudo, email, mdp) VALUES ("' . $nom . '" , "' . $pseudo . '" , "' . $email . '" , "' . $mdp . '")';
                $result = mysqli_query($link, $insert);
                if ($result) {
                    header('Location: ../index.php');
                    die();
                } else {
                    echo "Error: " . $insert . " " . mysqli_error($link);
                    die();
                } 
            }
        }
    }
    
