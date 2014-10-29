<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		Ajouter:
		<form method="post" action="">
			<input type="text" name="name" placeholder="home">
			<input type="submit" name="add">
		</form>
		Supprimer:
		<form method="post" action="">
			<input type="text" name="name" placeholder="home">
			<input type="submit" name="remove">
		</form>
		<?php
		if(isset($_POST['add'])){
			if(isset($_POST['name']) && $_POST['name'] != ''){
				fopen("models/m_".$_POST['name'].".php", "w");
				fopen("controllers/c_".$_POST['name'].".php", "w");
				fopen("views/v_".$_POST['name'].".php", "w");
				echo "Fichiers ajoutés";
			}
			else{
				echo "Veuillez écrire un nom pour ajouter les fichiers.";
			}
		}
		if(isset($_POST['remove'])){
			if(isset($_POST['name']) && $_POST['name'] != ''){
				unlink("models/m_".$_POST['name'].".php");
				unlink("controllers/c_".$_POST['name'].".php");
				unlink("views/v_".$_POST['name'].".php");
				echo "Fichiers supprimés";
			}
			else{
				echo "Veuillez écrire un nom pour supprimer les fichiers.";
			}
		}
		?>
	</body>
</html>
