    <nav>
        <li><a href="">accueil</a></li>
        <li><a href="">Chapitres</a></li>
        <li><a href="">Résumé</a></li>
        <li><a href="">Contact</a></li>
    </nav>
    
    <header>
    
    <a href="templates/connexionAdministrateur.php" id="connexionAdmin">S'identifier</a>

    <div id="presentation">
    <img src="../portraitAuteur.jpg">
</div>
    </header>
   
    <div id="textePresentation">
    
    <h1>Billet simple pour l'Alaska de Jean Forteroche</h1>
    <p>Je suis Jean Forteroche et j'ai le plaisir de te présenter mon nouveau livre "Billet simple pour l'Alaska". Bonne lecture à toi</p>
</div>
   
    <section id="listeBillets">

    <div id="listeChapitre">
    <?php 
   
foreach($billets as $billet){
        ?>
      <div class="chapitres">
        <div class="billet">

        <h2><?= $billet["titre"];?> </h2>
        <p><?php echo $billet["date_creation"];?></p>
        <p> <?php echo $billet["contenue"];?></p>
        </div>
        <a href="index.php?controller=controllerBillet&amp;task=afficheChapitreEtCommentaire&amp;billet=<?php echo $billet["id"];?>">Lire le chapitre</a>
        
    </div>
    <?php

 }
?> </div> <?php
 for($i=1; $i<=$pageTotal;$i++){
  
    echo '<a href="index.php?controller=controllerBillet&task=index&page='.$i.'">'.$i.'</a>';

}
?>
        
       

    </section>
</div>
    <section></section>

    <footer>

    </footer>

