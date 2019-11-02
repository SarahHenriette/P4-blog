

    <header></header>
    <nav></nav>
    <section>
        <h1>Billet simple pour l'Alaska de Jean Forteroche</h1>
    </section>
    <section>
        
    <a href="index.php?controller=administrateur&amp;task=deconnexion">deconnexion</a>
<?php


//Je vérifie le mot de passe du formulaire avec celui de la bas de donnee
$motDePasseCorrect = password_verify( $_POST['motDePasse'], $admin["motDePasse"]);

//si les donnees ne sont pas bonnes redirige vers la page d'accueil
if(!$admin){
    \Http::redirection('index.php');
}else{ //sinon sii c'est correct alors sauvergarde les donnees du formulaire dans une session et j'affiche les billets
    if($motDePasseCorrect){
        
 
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['mdp'] = $_POST['motDePasse'];
        if($_SESSION['nom'] && $_SESSION['mdp']){
        echo "Vous etes connecté";
        }
    while($donnee = $billets->fetch()){
    ?>
        <div class="chapitre">
            <div class="billet">
    
                <h2><?php echo $donnee["titre"];?> </h2>
                <p><?php echo $donnee["date_creation"];?></p>
                <p> <?php echo $donnee["contenue"];?></p>
            </div>
            <a href="index.php?controller=billet&amp;task=supprimer&amp;billet=<?php echo $donnee["id"];?> " >supprimer</a>
            <a href="index.php?controller=billet&amp;task=modifier&amp;billet=<?php echo $donnee["id"];?>">modifier</a>
            <a href="index.php?controller=billet&amp;task=afficheChapitreEtCommentaire&amp;billet=<?php echo $donnee["id"];?>">commentaires</a>
        </div>
        <?php
    }
}
}
        ?>   
    <a href="index.php?controller=billet&amp;task=creer" >Creer un nouveau chapitre</a>
      <?php     
  


?>

     

    </section>
    <section></section>

    <footer></footer>


