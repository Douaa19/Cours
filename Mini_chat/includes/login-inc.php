<?php
// Sessions
session_start();
include_once('../database.php');

    $login = $_POST['login'];

    if (!isset($login)) {
        header('Location: ../index.php');
        die();
    } else {
        $nom = $_POST['nom'];
        $mdp = $_POST['mdp'];

        if (empty($nom)) {
            header('Location: ../index.php?empty_input_email');
            die();
        } 
        if (empty($mdp)) {
            header('Location: ../index.php?empty_input_password');
            die();
        }
        if (!empty($nom) && !empty($mdp)) {
            // Select
            $select = "SELECT * FROM utilisateurs WHERE nom = '$nom' AND mdp = '$mdp'";
            $result = mysqli_query($link, $select);
            if (mysqli_num_rows($result) == 1) {
                if ($nom == 'admin' && $mdp == 'admin') {
                    header('Location: ../admin-page.php');
                    die();
                } else {$_SESSION['nom'] = $nom;
                        header('Location: ../chat-page.php');
                        die();
                }
            } else {
                $sel = "SELECT * FROM utilisateurs WHERE nom = '$nom'";
                $result_nom = mysqli_query($link, $sel);
                if (mysqli_num_rows($result_nom) == 1) {
                    header('Location: ../index.php');
                } else {
                    header('Location: ../sing-up.php');
                }
            }
        }
    }