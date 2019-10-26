<?php
require_once('models/Model.php');
class Billet extends Model{

    //Recupere tout les billets
    protected $table = "billets";



//Je recupere juste un billet indivuellement et j'affiche le contenu : titre, chapitre, date 
function afficherUn(){
   

        while($donnee = $this->requete->fetch()){
        ?>
        <div class="Chapitre">
        <p><?php echo $donnee["titre"];?></p>
        <p><?php echo $donnee["date_creation"];?></p>
      <p><?php echo $donnee["contenue"];?></p>

       </div>
    <?php
        }//while
    
}

function renvoieDonneeUn(){
  
    $donnee = $this->requete->fetch();
    return $donnee;
}

//J'affiche les Billets
function afficher(){
 
   while($donnee = $this->requete->fetch()){
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
   
    while($donnee = $this->requete->fetch()){
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
    
    $req = $this->bdd->prepare('INSERT INTO billets (titre, contenue, date_creation) VALUES(:titre, :contenue, NOW())');
    $req->execute(array(
        "titre" => $_POST["Titre"],
        "contenue" => $_POST["Contenue"]
    ));
    }


    //Permet de modifier un commentaire
function modifier(){
   
    $req = $this->bdd->prepare('UPDATE billets SET titre= :titre, contenue= :contenue, date_creation= NOW() WHERE id=:id');
$req->execute(array(
    "titre" => $_POST["titre"],
    "contenue" => $_POST["contenue"],
    "id" => $_POST["billet"]
));
}

function supprimer($id){

   $req = $this->bdd->prepare('DELETE FROM billets WHERE id=?');
   $req->execute(array($id));
   
   }
}//fermeture de la Class



?>