<?php
    
    
    
    $w = $_POST['weight'];
    $weight = (integer)$w;
    $s = $_POST['size'];
    $sizeCm = (integer)$s;
    $sizeM = $sizeCm / 100;
    $sizeMC = $sizeM ** 2;
    $IMC = $weight / $sizeMC;
    

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
    <p>Name: <?php echo $_POST['name'] ?></p>
    <p>Your IMC: <?php echo $IMC ?></p>
</body>
</html>