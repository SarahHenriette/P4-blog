<form action="index.php?controller=controllerBillet&amp;task=modifierPost" method="POST">

<input type="titre" name="titre" value=<?php echo $donnee["titre"];?>>
<textarea cols = 100 rows=10 name="contenue"><?php echo $donnee["contenue"];?></textarea>
<input type="hidden" name="billet" value=" <?php echo $_GET['billet'];?>"/>
<input type="submit" value="Modifier">

</form>