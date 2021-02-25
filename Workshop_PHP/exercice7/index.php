<?php

$array = array("HTML", "CSS", "PHP", "Balsamiq", "Figma", "MySQL");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($array as $value) : ?>
    <ul>
        <li><?php  echo $value ?></li>
    </ul>
    <?php endforeach ?>
</body>
</html>