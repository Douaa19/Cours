<?php 

    function invalidUid($nom){
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $nom ) ) {
            $resutl = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result;
        if (!filter_var($email, FILTER_VALIDATION_EMAIL)) {
            $resutl = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function uidExists($link, $nom, $email) {
        $sql = "SELECT * FROM utilisateur WHERE id_utilisateur =? OR email_utilisateur = ?;";
        // Pour plus de sécurité
        $prepare = mysqli_stmt_init($link);
        if (!mysqli_stmt_prepare()) {

        }

    }