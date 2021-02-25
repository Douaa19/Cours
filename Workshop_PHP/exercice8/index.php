<?php
    $mesInformations = array("Nom"=>"Larif","Prenom"=>"Douaa", "Age"=>"24", "Sexe"=>"Femme", "Ville"=>"Youssoufia", "Origin"=>"Wazzan");
    $infos = ["Prenom", "Nom", "Age", "Sexe", "Ville", "Origin"];
    $lesInformations = array(
        ["Douaa", "Larif","24","Femme","Youssoufia","Wazzan"],
        ["Asmae", "Nom","22","Femme","Youssoufia","Youssoufia"],
        ["Yassin", "Nom","20","Homme","Youssoufia","Agadir"],
        ["Youssef", "Bouhalla","23","Homme","Youssoufia","Youssoufia"],
        ["Mohammed", "Aboudi","22","Homme","Youssoufia","youssoufia"],
        );
    $var = ["formation", "dev web"];
    
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($mesInformations as $key=>$value) : ?>  
    <ul>
        <li><?php echo $key . ": " . $value;  ?></li>
    </ul>
    <?php endforeach ?>
    <table class="table">
        <tr class="tr">
        <?php  foreach($var as $V)  :?>
            <th class="th"><?php echo $V ?></th>
        <?php  endforeach ?>
        </tr>

        <tr class="tr">
        <?php  foreach($infos as $informations)  :?>
            <th class="th"><?php echo $informations ?></th>
        <?php  endforeach ?>
        </tr>
        <?php foreach($lesInformations as list($p, $n, $a, $s, $v, $o))  :?>
        <tr class="tr">
            <td class="td"><?php echo "$p<br>"?></td>
            <td class="td"><?php echo "$n<br>"?></td>
            <td class="td"><?php echo "$a<br>"?></td>
            <td class="td"><?php echo "$s<br>"?></td>
            <td class="td"><?php echo "$v<br>"?></td>
            <td class="td"><?php echo "$o<br>"?></td>
        </tr>
        <?php  endforeach ?>
    </table>
    
</body>
</html>