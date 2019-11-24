<div id="imageChapitre">

<img src="../alaska6.jpg" >
</div>
    <h1 id="nouveauChapitre">Modifier le chapitre</h1>


<form action="index.php?controller=controllerBillet&amp;task=modifierPost" method="POST" id="modifierUnChapitre">

<input type="titre" name="titre" id="titre" value=<?php echo $donnee["titre"];?>>
<textarea cols = 100 rows=10 name="contenue" class="textarea"><?php echo $donnee["contenue"];?></textarea>
<input type="hidden" name="billet" value=" <?php echo $_GET['billet'];?>"/>
<input type="submit" value="Modifier" id="modifier">

</form>