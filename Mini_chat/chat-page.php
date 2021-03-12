<?php
    include_once('database.php');
    

    //selectionner les messages dans la base de donnée
    $query = "SELECT * FROM messages ORDER BY date";
    $results = mysqli_query($link, $query);
    $messages = mysqli_fetch_assoc($results);
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat box</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <div class="titleBar container">
        <h1>Welcome Youssef</h1>
        </div>
        <div class="messages container">
            <ul>
                <?php foreach ($results as $row) : ?>

                    <div class="util"><li class="message"><?php echo $row["utilisateur"];  ?></div>  <div class="mess"><?php echo $row["contenu_message"];  ?></div>  <div class="date"><?php echo $row['date']; ?></div> </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class=" container">
            <form class="comment" action="traitement.php" method="post">
                <input type="text" name="utilisateur" id="utilisateur" placeholder="Saisir votre username">
                <input type="text" name="message" id="message" placeholder="Saisir votre message">
                <input type="submit" class="envoyer" name="envoyer" value="Envoyer">
            </form>
        </div>
    </main>

</body>
</html>