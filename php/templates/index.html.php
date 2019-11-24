
   
    <header>
    <nav>
        <li><a href="">Accueil</a></li>
        <li><a href="">Chapitres</a></li>
        <li><a href="">Résumé</a></li>
        <li><a href="">Contact</a></li>
    </nav>
        <a href="index.php?controller=controllerAdministrateur&amp;task=formConnexion" id="connexionAdmin">S'identifier</a>
        <div id="presentation">
            <img src="../portraitAuteur.jpg">
        </div>

    </header>
    <div id="textePresentation">
    
    <h1>Billet simple pour l'Alaska de Jean Forteroche</h1>
    <p id="motDeJean">Je suis Jean Forteroche et j'ai le plaisir de te présenter mon nouveau livre "Billet simple pour l'Alaska". Bonne lecture à toi</p>
    <img src="../sign.svg.png">
</div>

   <div id="presentationLivre">
 
    <section id="listeBillets">
    <h2>Derniers chapitres</h2>

        
   <article id="billets">
            
        <?php 
            foreach($billets as $billet){
        ?>
       
            <div class="billet">
                <p class="numeroChapitre"><?php echo $billet["numeroChapitre"];?></p>
                <h3><?= $billet["titre"];?> </h3>
                <p><?php echo $billet["date_creation"];?></p>
                <a href="index.php?controller=controllerBillet&amp;task=afficheChapitreEtCommentaire&amp;billet=<?php echo $billet["id"];?>">Lire le chapitre</a>
            </div>

       
    <?php
        }
    ?> 
      </article>
        <div id="pagination"> 
    
        <?php
            for($i=1; $i<=$pageTotal;$i++){
                echo '<a href="index.php?controller=controllerBillet&task=index&page='.$i.'">'.$i.'</a>';
            }
        ?>
        </div>
       
    </section>
    </div>
    
  <!--  <div id="couverture">
            <p>Voir tout les chapitres</p>
            <img src="../couverture6.jpg">
        </div>-->
       
        
        <div id="couverture">
                <a href="index.php?controller=controllerBillet&amp;task=afficheChapitreEtCommentaire&amp;billet=<?php echo $dernierBillet["id"];?>"><img src="../alaska3.jpg"></a>
            </div>
   
        
    


  
   
    <!--<div id="photoAlaska" >
    <img src="../alaska5.jpg" >
        </div>-->
    
    <section id="aPropos">
        <h2>A propos</h2>
        <p>Auteur de plusieurs livres à succès maintenant je reviens avec un nouveau roman s'inspirant du dernier voyage que j'ai fais en Alaska.
        Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. 
        Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
    </section>

    <!--<section id="actu">

    <div id="carnetDeVoyage">
        <p>Mon carnet de voyage</p>
        <img src="../carnetDeVoyage2.jpg">
    </div>
    <aside>
        <div>Interview</div>
        <div>Livres</div>
        <div>Divers</div>
    </aside>
        </section>-->
    <footer>
    <img src="../fb.png">
    <img src="../insta.png">
    <img src="../twitter.png">
    <img src="../gmail.png">
 
    </footer>

