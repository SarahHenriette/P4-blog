<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Billet simple pour l'Alaska - Jean Forteroche</title>
</head>
<body>
  
<h2>Chapitre <?php echo $_GET["billet"] ?></h2>
<?php

$bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root', '');
$req =$bdd->prepare('SELECT * FROM billets WHERE id=? ');
$req->execute(array( $_GET["billet"]));
if(isset($_GET['billet'])){
    while($donnee = $req->fetch()){
     echo $donnee["titre"];
     echo $donnee["date_creation"];
   echo $donnee["contenue"];

    }
}



echo '<h2>Commentaires</h2>';

$requete =$bdd->prepare('SELECT * FROM commentaires WHERE id=? ');
$requete->execute(array( $_GET["billet"]));
while($donnees = $requete->fetch()){
?>
<div class="commentaire">
 <p><?php echo  $donnees["pseudo"];?></p>
 <p><?php echo $donnees["commentaire"];?></p>
 <p><?php echo $donnees["date_commentaire"];?></p>
</div>
<?php
 }
?>
</body>
</html>






