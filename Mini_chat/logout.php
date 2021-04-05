<?php
    session_start();

    unset($_SESSION['email']);
    header('Location: index.php');

    // if(isset($_SESSION['email'])) {
    //     session_destroy();
    //     header('Location: index.php');
    // } else {
    //     header('Location: index.php');
    // }











    
    ?>