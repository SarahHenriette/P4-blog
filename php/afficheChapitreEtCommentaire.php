<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
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
?>
<h2>Commentaires</h2>

<?php
$requete =$bdd->prepare('SELECT * FROM commentaires WHERE id_billet=? ORDER BY date_commentaire DESC ');
$requete->execute(array( $_GET["billet"]));
while($donnees = $requete->fetch()){
?>
<div class="commentaire">
 <p><?php echo  $donnees["pseudo"];?></p>
 <p><?php echo $donnees["commentaire"];?></p>
 <p><?php echo "publié le " . $donnees["date_commentaire"];?></p>
</div>
<?php
 }
?>


<h3>Connecte-toi pour rajouter un commentaire</h3>

<form action="ajoutDeCommentaire.php" method="POST">
 
  <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
  <textarea name="message" cols="20" rows="10" placeholder="Message..."></textarea>
  <input type="submit" name="Valider" id="Valider" value="Valider">
  <input type="hidden" name="billet" value=" <?php echo $_GET['billet'];?>"/>
</form>
</body>
</html>








