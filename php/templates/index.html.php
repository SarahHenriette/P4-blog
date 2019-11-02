

    <header>
    <form action="index.php?controller=billet&amp;task=pageAdmin" method="POST">

    <input type="text" name="nom"  placeholder="Nom">
    <input type="password" name="motDePasse" placeholder="Mot de passe">
    <input type="submit" value="Connexion">
    
    <form>
    

    </header>
    <nav></nav>
    <section>
        <h1>Billet simple pour l'Alaska de Jean Forteroche</h1>
    </section>
    <section>


    <?php 

    while($billet = $req->fetch()){
        ?>
      <div class="chapitre">
        <div class="billet">

        <h2><?= $billet["titre"];?> </h2>
        <p><?php echo $billet["date_creation"];?></p>
        <p> <?php echo $billet["contenue"];?></p>
        </div>
        <a href="index.php?controller=billet&amp;task=afficheChapitreEtCommentaire&amp;billet=<?php echo $billet["id"];?>">commentaires</a>
        <a href="index.php?>">signaler le commentaire</a>
    </div>
    <?php

    }
?>
                
        </div>

       

    </section>
    <section></section>

    <footer></footer>

