<?php

    include_once('../database.php');
    
    $submit = $_POST['submit'];
    if (isset($submit)) {
        $id = $_POST['id_utilisateur'];
        $n_nom = $_POST['nom'];
        $n_pseudo = $_POST['pseudo'];
        $n_email = $_POST['email'];
        $n_mdp = $_POST['mdp'];

        if (!empty($n_nom) && !empty($n_pseudo) && !empty($n_email) && !empty($n_mdp)) {
            $update = "UPDATE utilisateurs SET nom = '$n_nom', pseudo = '$n_pseudo', email = '$n_email', mdp = '$n_mdp' WHERE id_utilisateur = $id";
            $query = mysqli_query($link, $update);
            header('Locatio: ../admin-page.php');
            die();
            // if ($query) {
            //     header('Locatio: ../admin-page.php');
            //     die();
            // } else {
            //     die("query_is_not_working!!!!");
            // }
        }
    } 
    // else {
    //     header('Location: ../update.php');
    //     die();
    // }
    


























// $nom = '';
    // $pseudo = '';
    // $email = '';
    // $mdp = '';

    // $modifier =  $_GET['modifier'];
    // if (isset($modifier)) {
    //     $select = "SELECT * FROM utilisateurs WHERE id_utilisateur = $id_utilisateur";
    //     $result = mysqli_query($link, $select);
    //     if (mysqli_num_rows($result)==1) {
    //         foreach ($result as $row) {
    //             $nom = $row['nom'];
    //             $pseudo = $row['pseudo'];
    //             $email = $row['email'];
    //             $mdp = $row['mdp'];
    //         }
    //     } else {
    //         die("Error_query");
    //     }
    // }
?>