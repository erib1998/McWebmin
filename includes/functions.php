<?php

class Utils {
	public static function parseURL($input) {
	if(self::stringStartsWith($input, '/')) {
			$input = substr_replace($input, '', 0, 1);
		}

		if(self::stringEndsWith($input, '/')) {
			$input = substr_replace($input, '', strlen($input) - 1, 1);
		}

		return explode("/", $input);
	}

	public static function stringStartsWith($haystack, $needle) {
		return !strncmp($haystack, $needle, strlen($needle));
	}

	public static function stringEndsWith($haystack, $needle) {
		$length = strlen($needle);

		if ($length == 0) {
			return true;
		}

		return substr($haystack, -$length) === $needle ? true : false;
	}

	public static function shorten($string, $how){
		if(strlen($string) > $how){
			return substr($string, 0,$how)."...";
		} else {
			return $string;
		}
	}
}

class User{
	public static function getId($email){
		global $bdd;
		$req = $bdd->query("SELECT id FROM users WHERE email = :email", array("email" => $email));
		return $req[0]['id'];
	}
	public static function isConnected(){
		return (isset($_SESSION['id']));
	}
}

?>