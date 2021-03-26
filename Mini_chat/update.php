<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin-inc.css">
    <title>Modifier</title>
</head>
<body>
    <form action="admin-page.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp">
        <label for="image">Image</label>
        <input type="image" name="image" alt="Image de profil">
        <input type="submit" value="Modifier" name="modifier">
    </form>
</body>
</html>