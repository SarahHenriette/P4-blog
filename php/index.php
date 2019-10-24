<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billet simple pour l'Alaska - Jean Forteroche</title>


</head>

<body>

    <header></header>
    <nav></nav>
    <section>
        <h1>Billet simple pour l'Alaska de Jean Forteroche</h1>
    </section>
    <section>
        <?php
            $bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root', '');
            $req =$bdd->query('SELECT * FROM billets');
            while($donnee = $req->fetch()){
                ?>
                <div class="chapitre">
                <div class="billet">

                <h2><?php echo $donnee["titre"];?> </h2>
                <p><?php echo $donnee["date_creation"];?></p>
                <p> <?php echo $donnee["contenue"];?></p>

            </div>
            <a href="afficheChapitreEtCommentaire.php?billet=<?php echo $donnee["id"];?>">commentaires</a>
        </div>

        <?php    
            }

        ?>

    </section>
    <section></section>

    <footer></footer>
</body>

</html>