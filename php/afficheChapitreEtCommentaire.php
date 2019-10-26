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

require_once('baseDeDonnee.php');
require_once('models/Billet.php');
require_once('models/Commentaire.php');

 //Affiche le billet       
$bdd = connexionBaseDeDonnee();
$billet = new Billet;
$commentaire= new Commentaire;

$billet->recupereUn($_GET["billet"]);
?>


<h2>Commentaires</h2>

<?php

//Affiche les commentaires

$commentaire-> recupere($_GET["billet"]);

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








