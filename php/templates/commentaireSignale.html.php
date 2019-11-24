
<div id="commentaireSignale">
<h2>Commentaire signale</h2>
<div id="signalement">
      <?php     
foreach($commentairesSignale as $commentaireSignale){;

  
if($commentaireSignale['signalement']>= 4){
  ?>
<div class="signalement">
    <?php echo "vous avez un commentaire signalé"?>
    <h2><?php echo $commentaireSignale["pseudo"];?> </h2>
    <p><?php echo $commentaireSignale["commentaire"];?></p>
    <p> <?php echo $commentaireSignale["date_commentaire"];?></p>
    <a href="index.php?controller=controllerBillet&amp;task=supprimer&amp;commentaire=<?php echo $commentaireSignale["id"];?>">supprimer</a>
    <a href="index.php">concerver</a>

</div>

</div>
  <?php
}
};

?>

     </div>
