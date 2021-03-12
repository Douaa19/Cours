<?php

// se connecter à MySQL
$link = mysqli_connect('localhost', 'root', '', 'php');

// tester la connexion
if(!$link){
    echo 'erreur de connexion : ' . mysqli_connect_error();
    die();
}
