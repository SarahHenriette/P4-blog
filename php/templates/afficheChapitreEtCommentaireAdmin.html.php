<div id="imageChapitre">

<img src="../alaska6.jpg" >
</div>
<?php

    ?>
        <div class="chapitre">
       
        <p id="numeroChapitre"><?php echo $billet["numeroChapitre"];?></p>
        <p id="titreChapitre"><?php echo $billet["titre"];?></p>
        <p><?php echo $billet["date_creation"];?></p>
        <p><?php echo $billet["contenue"];?></p>
        </div>
   <?php
    

?>


<div id="espaceCommentaire">
<h2>Commentaires</h2>
  <div id="commentaires">
<?php
//Affiche les commentaires

foreach($commentaires as $commentaire){
     ?>
     
    <div class="commentaire">
         <p id="pseudoCommentaire"><?php echo $commentaire["pseudo"]?></p>
         <p><?php echo $commentaire["commentaire"]?></p>
         <p><?php echo $commentaire["date_commentaire"]?></p>

    </div>
    <a href="index.php?controller=controllerCommentaire&amp;task=signaler&amp;billet=<?php echo $billet['id'];?>&amp;id=<?php echo $commentaire['id'];?>">signaler le commentaire</a>
    <?php
  }

?>
</div>
<a href="index.php?controller=controllerAdministrateur&amp;task=pageAdmin" >Accueil</a>