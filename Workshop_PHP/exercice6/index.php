<?php

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
<form action="reponse.php" method="POST">
    <div class="infos">
        <div class="name">
            <label for="name">Your name: </label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div class="weight">
            <label for="weight">Your weight: </label>
            <input type="text" name="weight" id="weight" placeholder="Weight in Kg">
        </div>
        <div class="size">
            <label for="size">Your size: </label>
            <input type="text" name="size" id="size" placeholder="Size in Cm">
        </div>
        <button type="submit"><a>Submit</a></button>
    </div>
</form>
</body>
</html>