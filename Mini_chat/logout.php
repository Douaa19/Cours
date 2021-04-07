<?php
    session_start();

    if (isset($_SESSION['nom'])) {
        session_destroy();
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }