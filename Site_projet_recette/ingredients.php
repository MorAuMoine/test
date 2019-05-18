<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=solibio', 'root', '');


	  if(isset($_POST['ok'])) 
	  {
	   	$ingredients = htmlspecialchars($_POST['ingredients']);		
	  	$requser = $bdd->prepare("SELECT * FROM recette WHERE ingredients = ?"); //titre = ?
	  	$requser->execute(array($ingredients));
	  	$userinfo = $requser->fetch();
		//$_SESSION['ingredients'] = $userinfo['ingredients'];
		$_SESSION['ingredients'] = $ingredients;
	  	$bdd->exec("UPDATE `recette` SET `ingredients`= '$ingredients' WHERE `lastID` = '".$_SESSION['test']."'" );
	  	header('Location: dureeCuisson_Preparation.php');	

	  } 

?>

<?php include("header.php");
?>
	<div class="formulaireTitre">
		<form action="" method="post">
			<div class="recetteR">
				<label for="ingrediens">Ingredients <?php //echo $_SESSION['ingredients']?>:</label>
				<textarea name="ingredients"></textarea><br /><br /><br />
			</div>
			<input class="bouton" type="submit" name="ok" value="ok">
		</form>
	</div>
</div>
</body>
</html>