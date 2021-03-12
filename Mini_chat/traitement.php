<?php

    include_once('database.php');
    $utilisateur = $_POST['utilisateur'];
    $message = $_POST['message'];
    $submit = $_POST['envoyer'];

    if(empty($submit) || empty($utilisateur) || empty($message)){
        echo "Un champ est vide!!!";
    }else {
        $query = 'INSERT INTO messages(utilisateur, contenu_message) VALUES ("' . $utilisateur . '" , "' . $message . '")';
        mysqli_query($link, $query);
    }
    
    header("Location: ./chat-page.php?");



// si le message est envoyé correctement
//     récupérer les données dans des variables
//     si les valeurs récupéré sont vides
//         se redériger ver la page index avec le message d'erreur sauvgarde dans un query string
//     si non afficher préparer la requête d'insertion
//     vérifier qu'elle s'execute correctement
//     s'il y a une erreur afficher le message puis arrêter le programme avec la "die"
//     si non se redériger à la page index qui devera insérer le message nouvellement inséré


?>