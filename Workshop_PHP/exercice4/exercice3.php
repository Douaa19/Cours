<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$var1 = true;
echo $var1;
echo '<br>';
echo gettype ($var1);
echo '<br>';
$var2 = (int)$var1;
echo '<br>';
echo gettype($var2);
echo '<br>';
$var3 = 2;
echo '<br>';
echo gettype($var3);
echo '<br>';
$var4 = (string)$var3;
echo '<br>';
echo gettype($var4);

?>
</body>
</html>