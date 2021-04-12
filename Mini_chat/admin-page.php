<?php
    session_start();
    include_once('database.php');
    
    $select = "SELECT * FROM utilisateurs";
    $result = mysqli_query($link, $select);




    if (isset($_POST['submit'])) {
        $id = $_POST['id_utilisateur'];
        $n_nom = $_POST['nom'];
        $n_pseudo = $_POST['pseudo'];
        $n_email = $_POST['email'];
        $n_mdp = $_POST['mdp'];

        if (!empty($n_nom) && !empty($n_pseudo) && !empty($n_email) && !empty($n_mdp)) {
            $update = "UPDATE utilisateurs SET nom = '$n_nom', pseudo = '$n_pseudo', email = '$n_email', mdp = '$n_mdp' WHERE id_utilisateur = $id";
            $query = mysqli_query($link, $update);
            header('Locatio: admin-page.php');
            die();
            if ($query) {
                header('Locatio: admin-page.php');
                die();
            } else {
                die("query_is_not_working!!!!");
            }
        }
    }

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
    <main>
        <div class="admin">
            <h1>hello admin</h1>
        </div>
        <div class="table">
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
        </div>
    </main>
</body>
</html>