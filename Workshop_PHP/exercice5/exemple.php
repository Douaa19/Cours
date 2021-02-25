<?php

$name1 = '';
$name2 = null;

echo 'checking $name1 : ';
var_dump(isset($name1));
echo '<br>';
var_dump(empty($name1));

echo '<br>';

echo 'checking $name2: ';
var_dump(isset($name2));
echo '<br>';
var_dump(empty($name2));

echo '<br>';

echo 'checking undecleared variable $name3: ';
var_dump(isset($name3));
echo '<br>';
var_dump(empty($name3));



?>