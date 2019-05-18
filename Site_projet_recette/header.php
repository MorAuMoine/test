<!DOCTYPE html>
<html>
<head>
	<title>Toutes les meilleurs recettes !</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="recettes.css">
	<link rel="stylesheet" href="inscription.css">
	<!--<link rel="stylesheet" href="NouvelleRecette.css">-->
	<link rel="stylesheet" href="Titre.css">
	<link rel="stylesheet" href="Connexion.css">
	<link rel="icon" href="icon.png">
</head>

<body>
	<div class="bloc_page">
		<nav class="entete">
			<h1><a href="recettes.php"><img src = "logo.png"></a></h1>
			<a href="inscription.php">
				<nav class="compte">
					<ul>
						<?php
						 if($_SESSION){
							echo"<a href=\"deconnexion.php\"><li class=\"li_entete\">Déconnexion</li></a>";
						}
						else{
							echo"<li class=\"li_entete\">Connexion</li>";
						}
						?>
						<!--<li class="li_entete">Connexion</li>-->
						
					</ul>
				</nav>
			</a>

			<div class="recherche"> 
				<input class="input_entete" type="text" name="" placeholder="Entrez un plat">
				<a class="e" href="#"><div class="test">
				</div></a>
			</div>
		</nav>
		
<!--
</body>

</html>-->