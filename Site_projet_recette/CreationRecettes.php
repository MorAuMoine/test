<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=solibio', 'root', '');


	  if(isset($_POST['ok'])) 
	  {
	  	$titre = htmlspecialchars($_POST['titre']);	
	  	$ingredients = htmlspecialchars($_POST['ingredients']);
	  	$dureeCuisson = htmlspecialchars($_POST['dureeCuisson']);
	  	$dureePrepa = htmlspecialchars($_POST['dureePrepa']);	
	  	$image = sha1($_POST['image']);
	  	$note = 5;
	  	$etapes = htmlspecialchars($_POST['etapes']);

	  	$bdd->exec("INSERT INTO recette(titre, ingredients, dureeCuisson, dureePrepa, image, note, etapes) VALUES('".$titre."','".$ingredients."','".$dureeCuisson."','".$dureePrepa."','".$image."','".$note."','".$etapes."')");
	  	$abc =$bdd->exec("SELECT * from recette");
	  	echo $abc;
	  }

?>

<?php include("header.php");
?>
	<div class="formulhaire">
		<img src="avatar.png">
		<form action="" method="post">
			<label for="Titre">Titre :</label>
			<input type="text" name="titre"><br />
			<!--<textarea name="ingredients"></textarea>-->
			<label for="ingredients">Ingrédients :</label>
			<input type="text" name="ingredients"><br />
			<label for="dureeCuisson">Durée de cuisson :</label>
			<input type="text" name="dureeCuisson"><br />
			<label for="dureePrepa">Durée de préparation :</label>
			<input type="text" name="dureePrepa"><br />
			<!--<textarea name="etapes"></textarea>-->
			<label for="etapes">Etapes :</label>
			<input type="text" name="etapes"><br />
			<label for="image">Importer une miniature :</label>
			<input type="file" name="image"><br />
			<input class="bouton" type="submit" name="ok" value="ok">
		</form>
	</div>
</div>
</body>
</html>