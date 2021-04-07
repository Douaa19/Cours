<?php

    include_once('database.php');
    
    $select = "SELECT * FROM utilisateurs";
    $result = mysqli_query($link, $select);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin-style.css">
    <title>Admin page</title>
</head>
<body>
    <table>
        <tr>
            <th>Id_utilisateur</th>
            <th>Nom</th>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Mots de passe</th>
        </tr>
        <?php foreach($result as $row) { ?>
        <tr>
            <td><?php echo $row['id_utilisateur']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['pseudo']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mdp']; ?></td>
            <td><a href="update.php?id= <?php echo $row['id_utilisateur']; ?>">Modifier</a> /
            <a href="includes/delete-inc.php?supprimer= <?php echo $row['id_utilisateur']; ?>">Supprimer</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>