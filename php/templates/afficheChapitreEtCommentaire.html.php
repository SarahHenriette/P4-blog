  
<?php


//require_once('controllers/Billet.php');
//require_once('controllers/Commentaire.php');

 //Affiche le billet       
$Billets = new \Models\Billet;
//$commentaires = new \Controllers\Commentaire;


while($billet = $req->fetch()){
    ?>
        <div class="Chapitre">
        <p><?php echo $billet["titre"];?></p>
        <p><?php echo $billet["date_creation"];?></p>
        <p><?php echo $billet["contenue"];?></p>
        </div>
   <?php
    }

?>
<h2>Commentaires</h2>

<?php
//Affiche les commentaires

while($commentaire = $commentaires->fetch()){
     ?>
     
    <div class="commentaire">
         <p><?php echo $commentaire["pseudo"]?></p>
         <p><?php echo $commentaire["commentaire"]?></p>
         <p><?php echo $commentaire["date_commentaire"]?></p>

    </div>
    <?php
  }

?>

<h3>Connecte-toi pour rajouter un commentaire</h3>

<form action="index.php?controller=commentaire&amp;task=ajouter" method="POST">
 
  <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
  <textarea name="message" cols="20" rows="10" placeholder="Message..."></textarea>
  <input type="submit" name="Valider" id="Valider" value="Valider">
  <input type="hidden" name="billet" value=" <?php echo $_GET['billet'];?>"/>
</form>

<a href="index.php">Page d'accueil</a>




