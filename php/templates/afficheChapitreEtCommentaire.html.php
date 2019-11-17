  
<?php


//require_once('controllers/Billet.php');
//require_once('controllers/Commentaire.php');

 //Affiche le billet       
$Billets = new \Models\ModelBillet;
//$commentaires = new \Controllers\Commentaire;



    ?>
        <div class="chapitre">
        <p><?php echo $billet["titre"];?></p>
        <p><?php echo $billet["date_creation"];?></p>
        <p><?php echo $billet["contenue"];?></p>
        </div>
   <?php
    

?>

<div id="formulaireCommentaire">
<h3>Laisse un commentaire</h3>

<form action="index.php?controller=controllerCommentaire&amp;task=ajouter" method="POST" >
 
  <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
  <textarea name="message" cols="20" rows="1" placeholder="Message..."></textarea>
  <input type="submit" name="Valider" id="Valider" value="Valider">
  <input type="hidden" name="billet" value=" <?php echo htmlspecialchars($_GET['billet']);?>"/>
</form>
</div>
</div>

<h2>Commentaires</h2>
<div id="espaceCommentaire">
  <div id="commentaires">
<?php
//Affiche les commentaires

foreach($commentaires as $commentaire){
     ?>
     
    <div class="commentaire">
         <p><?php echo $commentaire["pseudo"]?></p>
         <p><?php echo $commentaire["commentaire"]?></p>
         <p><?php echo $commentaire["date_commentaire"]?></p>

    </div>
    <a href="index.php?controller=controllerCommentaire&amp;task=signaler&amp;billet=<?php echo $billet['id'];?>&amp;id=<?php echo $commentaire['id'];?>">signaler le commentaire</a>
    <?php
  }

?>
</div>

<a href="index.php">Page d'accueil</a>




