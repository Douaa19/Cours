<?php

    include_once('../database.php');

    if (isset($_GET['supprimer'])) {
        $id = $_GET['supprimer'];
        $sup = "DELETE FROM utilisateurs WHERE id_utilisateur=$id";
        $supprimer = mysqli_query($link, $sup);
        header('Location: ../admin-page.php');
    } else {
        die("Button_not_working");
    }
?>