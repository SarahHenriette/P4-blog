<?php
require_once('baseDeDonnee.php');
class Billet {
    
    //Recupere tout les billets
function recupereTout(){
    $bdd = connexionBaseDeDonnee();
    $req =$bdd->query('SELECT * FROM billets');
    return $req;
}

//Je recupere juste un billet indivuellement et j'affiche le contenu : titre, chapitre, date 
function recupereUn($id){
    $bdd = connexionBaseDeDonnee();
    $req =$bdd->prepare('SELECT * FROM billets WHERE id=? ');
    $req->execute(array( $id));
    if(isset($id)){
        while($donnee = $req->fetch()){
         echo $donnee["titre"];
         echo $donnee["date_creation"];
       echo $donnee["contenue"];
    
        }//while
    }//if
}

function recupereUnSansAffichage($id){
    $bdd = connexionBaseDeDonnee();
    $req =$bdd->prepare('SELECT * FROM billets WHERE id=? ');
$req->execute(array( $id));
$donnee = $req->fetch();
return $donnee;
}

//J'affiche les Billets
function afficher(){
    $bdd = connexionBaseDeDonnee();
    $req=$bdd->query('SELECT * FROM billets ORDER BY date_creation DESC ');
   while($donnee = $req->fetch()){
        ?>
      <div class="chapitre">
        <div class="billet">

        <h2><?php echo $donnee["titre"];?> </h2>
        <p><?php echo $donnee["date_creation"];?></p>
        <p> <?php echo $donnee["contenue"];?></p>
        </div>
        <a href="afficheChapitreEtCommentaire.php?billet=<?php echo $donnee["id"];?>">commentaires</a>
    </div>
    <?php

    }
}

//Affiche les billets de la page Administration
function afficherPageAdmin(){
    $billet = new Billet;

    $req= $billet->recupereTout();
    while($donnee = $req->fetch()){
        ?>
        <div class="chapitre">
        <div class="billet">

        <h2><?php echo $donnee["titre"];?> </h2>
        <p><?php echo $donnee["date_creation"];?></p>
        <p> <?php echo $donnee["contenue"];?></p>

    </div>
    <a href="supprimerUnBillet.php?billet=<?php echo $donnee["id"];?> " >supprimer</a>
    <a href="modifierUnBillet.php?billet=<?php echo $donnee["id"];?>">modifier</a>
    <a href="afficheChapitreEtCommentaire.php?billet=<?php echo $donnee["id"];?>">commentaires</a>
</div>
<?php
}
}

//Permet de créer un commentaire
function creer(){
    $bdd = connexionBaseDeDonnee();
    $req = $bdd->prepare('INSERT INTO billets (titre, contenue, date_creation) VALUES(:titre, :contenue, NOW())');
    $req->execute(array(
        "titre" => $_POST["Titre"],
        "contenue" => $_POST["Contenue"]
    ));
    }


    //Permet de modifier un commentaire
function modifier(){
    $bdd = connexionBaseDeDonnee();
    $req = $bdd->prepare('UPDATE billets SET titre= :titre, contenue= :contenue, date_creation= NOW() WHERE id=:id');
$req->execute(array(
    "titre" => $_POST["titre"],
    "contenue" => $_POST["contenue"],
    "id" => $_POST["billet"]
));
}

function supprimer($id){
    $bdd = connexionBaseDeDonnee();
   $req = $bdd->prepare('DELETE FROM billets WHERE id=?');
   $req->execute(array($id));
   
   }
}//fermeture de la Class



?>