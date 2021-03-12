<?php

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
        // Si les inputs ne sont pas vides, il faut varifier si ils s'étaient créé comme il faut.
        // Validation email
        if (filter_var($emial, FILTER_VALIDATE_EMAIL) == true) {
            "INSERT $email ";
        } else {
            echo "Email not validated";
        }

    //     if(invalidEmail($email) !== false) {
    //         header("location: ../sing-up.php?error=invalidemail");
    //         exit();
    //     }


    //     // Si le nom est déjà utilisé par quelqu'un d'autre.
    //     if(uidExists($link, $nom, $email) !== false) {
    //         header("location: ../sing-up.php?error=usernametaken");
    //         exit();
    //     }
    //     // Si les données sont validées, il faut stoquer les données dans la base de données.
    //     createUser($link, $nom, $email, $pseudo, $mdp);
    //     include_once('./database.php');
     }


