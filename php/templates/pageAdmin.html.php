<div id="imageChapitre">

<img src="../alaska6.jpg" >
</div>
 
    <section id="headerEspaceAdmin">
        <h1>Bienvenue sur votre espace Administrateur</h1>
        <p><?php echo $donneeAdministrateur['prenom']?> <?php echo $donneeAdministrateur['nom']?></p>

    </section>

    
    <section id="pageAdmin">
        
    <ul id="navPageAdmin">
            <li><a href="index.php?controller=controllerAdministrateur&amp;task=pageAdmin" >Accueil</a></li>
            <li><a href="index.php?controller=controllerBillet&amp;task=creer" >Creer un nouveau chapitre</a></li>
            <li><a href="index.php?controller=controllerCommentaire&amp;task=commentaireSignale">Commentaire signalé</a></li>
            <li> <a href="index.php?controller=controllerAdministrateur&amp;task=deconnexion">Deconnexion</a></li>
        </ul>
    <div  id="listeBillet">


<?php


foreach($billets as $billet){;
    ?>
        <div class="chapitreAdmin">
            <div class="billetAdmin">

                 
                <p class="numeroChapitre"><?php echo $billet["numeroChapitre"];?> </p>
                <h2><?php echo $billet["titre"];?> </h2>
                <p><?php echo $billet["date_creation"];?></p>
               
            </div >
            <div id="lienBilletAdmin">
            <li><a href="index.php?controller=controllerBillet&amp;task=supprimer&amp;billet=<?php echo $billet["id"];?> " >supprimer</a></li>
            <li><a href="index.php?controller=controllerBillet&amp;task=modifier&amp;billet=<?php echo $billet["id"];?>">modifier</a></li>
            <li><a href="index.php?controller=controllerBillet&amp;task=afficheChapitreEtCommentaireAdmin&amp;billet=<?php echo $billet["id"];?>">commentaires</a></li>
            </div>
        </div>
        <?php
    
}
        ?>   
    </div>
    


    </section>





