<?php
    include_once('database.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-login.css">
    <title>Document</title>
</head>
<body>
    
    <form class="login" action="includes/login.inc.php" method="post">
        <main>
            <h1>login</h1>
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="mdp" placeholder="Password">
            <input type="submit" name="login" value="Login">
            <a href="sing-up.php"  class="sing-up">Sing-up</a>
        </main>
    </form>
    

</body>
</html>