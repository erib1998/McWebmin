<?php
	function isAccount($email,$password){
		global $bdd;
		$req = $bdd->query("SELECT id FROM users WHERE email = :email AND password = :password", array("email" => $email, "password" => $password));
		return (!empty($req));
	}

	function updateIp($ip, $email){
		global $bdd;
		$req = $bdd->insert("UPDATE users SET ip = :ip WHERE email = :email", array("ip" => $ip, "email" => $email));
	}

	function getNews($how = 8){
		global $bdd;
		$req = $bdd->query("SELECT title,news,date FROM news ORDER BY id DESC LIMIT 0,$how");
		return $req;
	}

	function getWorks($how = 8){
		global $bdd;
		$req = $bdd->query("SELECT title,description,date FROM works ORDER BY id DESC LIMIT 0,$how");
		return $req;
	}
?>