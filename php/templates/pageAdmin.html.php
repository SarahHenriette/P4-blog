    <nav></nav>
    <section>
        <h1>Bienvenue dans votre espace Administrateur</h1>
    </section>
    <section>
        
    <a href="index.php?controller=controllerAdministrateur&amp;task=deconnexion">deconnexion</a>
    <div  id="listeBillet">
<?php


foreach($billets as $billet){;
    ?>
        <div class="chapitreAdmin">
            <div class="billetAdmin">
    
                <h2><?php echo $billet["titre"];?> </h2>
                <p><?php echo $billet["date_creation"];?></p>
                <p> <?php echo $billet["contenue"];?></p>
            </div>
            <a href="index.php?controller=controllerBillet&amp;task=supprimer&amp;billet=<?php echo $billet["id"];?> " >supprimer</a>
            <a href="index.php?controller=controllerBillet&amp;task=modifier&amp;billet=<?php echo $billet["id"];?>">modifier</a>
            <a href="index.php?controller=controllerBillet&amp;task=afficheChapitreEtCommentaire&amp;billet=<?php echo $billet["id"];?>">commentaires</a>
        </div>
        <?php
    
}
        ?>   
    </div>
    <a href="index.php?controller=controllerBillet&amp;task=creer" >Creer un nouveau chapitre</a>

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
  <?php
}
};

?>

     </div>

    </section>
    <section></section>

    <footer></footer>


