<?php

    include_once('database.php');

    $nom = '';
    $pseudo = '';
    $email = '';
    $mdp = '';

    
    if (isset($_GET['id'])) {
        $id =  $_GET['id'];
        $select = "SELECT * FROM utilisateurs WHERE id_utilisateur = $id";
        $result = mysqli_query($link, $select);
        if (!$result) {
            die("Error select");
        } else {
            $row = mysqli_fetch_assoc($result);
            $nom = $row['nom'];
            $pseudo = $row['pseudo'];
            $email = $row['email'];
            $mdp = $row['mdp'];
        }    
    }


    

    
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-update.css">
    <title>Modifier</title>
</head>
<body>
    <main>
        <div class="form">
            <form action="admin-page.php" method="post">
                <label for="id">Id</label>
                <input type="text" name="id_utilisateur" value= "<?php echo $id; ?>">

                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?php echo $nom; ?>" placeholder="Nom">

                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" value="<?php echo $pseudo; ?>" placeholder="Pseudo">

                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">

                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" value="<?php echo $mdp; ?>" placeholder="Mots de passe">

                <input type="submit" name="submit" value="Modifier">
            </form>
        </div>
    </main>
</body>
</html>