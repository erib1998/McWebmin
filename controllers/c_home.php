<?php
	$success = array();
	$errors = array();
	if(isset($_POST['submit'])){
		if(isset($_POST['email']) && isset($_POST['password'])){
			if(!empty($_POST['email']) && !empty($_POST['password'])){
				if(isAccount($_POST['email'], hash("sha256", $_POST['password']))){
					$_SESSION['id'] = User::getId($_POST['email']); // DEFINE SESSION - PUT USER ONLINE
					updateIp($_SERVER['REMOTE_ADDR'], $_POST['email']); // UPDATE LAST IP IN DATABASE
					$success[] = "Vous êtes bien connecté."; // DEFINE SUCCESS MESSAGE
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