<?php
	$success = array();
	$errors = array();
	if(isset($_POST['submit'])){
		if(isset($_POST['email']) && isset($_POST['password'])){
			if(!empty($_POST['email']) && !empty($_POST['password'])){
				if(isAccount($_POST['email'], hash("sha256", $_POST['password']))){
					$_SESSION['id'] = User::getId($_POST['email']);
					$success[] = "Vous êtes bien connecté.";
				} else {
					$errors[] = "Cet utilisateur n'existe pas. Veuillez verifier vos identifiants.";
				}
			} else {
				$errors[] = "Tous les champs doivent être remplit.";
			}
		} else {
			$errors[] = "Veuillez verifier que vous avez bien remplit le formulaire.";
		}
	}
?>