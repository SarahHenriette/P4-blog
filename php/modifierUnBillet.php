<?php
require_once('baseDeDonnee.php');
require_once('models/Billet.php');
$billet = new Billet;

$bdd = connexionBaseDeDonnee();

$donnee = $billet->recupereUnSansAffichage($_GET["billet"]);

?>

<form action="modifierUnBillet_post.php" method="POST">

<input type="titre" name="titre" value=<?php echo $donnee["titre"];?>>
<textarea cols = 100 rows=10 name="contenue"><?php echo $donnee["contenue"];?></textarea>
<input type="hidden" name="billet" value=" <?php echo $_GET['billet'];?>"/>
<input type="submit" value="Modifier">

</form>
