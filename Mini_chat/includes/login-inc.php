<?php
include_once('../database.php');

    $login = $_POST['login'];

    if (!isset($login)) {
        header('Location: ../index.php');
        die();
    } else {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        if (empty($email)) {
            header('Location: ../index.php?empty_input_email');
            die();
        } 
        if (empty($mdp)) {
            header('Location: ../index.php?empty_input_password');
            die();
        }
        if (!empty($email) && !empty($mdp)){
            // Select
            $select = "SELECT * FROM utilisateurs WHERE email = '$email' AND mdp = '$mdp'";
            $result = mysqli_query($link, $select);
            if (mysqli_num_rows($result) == 1) {
                header('Location: ../chat-page.php');
                die();
            } else {
                $sel = "SELECT * FROM utilisateurs WHERE email = '$email'";
                $result_email = mysqli_query($link, $sel);
                if (mysqli_num_rows($result_email) == 1) {
                    header('Location: ../index.php');
                } else {
                    header('Location: ../sing-up.php');
                }
            }
        }
    }