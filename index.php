<?php
	session_start();

	include_once('./includes/functions.php');
	include_once('./includes/MySQL.php');
	$bdd = new MySQL();

	define('HTTP_HOST', $_SERVER['HTTP_HOST'], true);
	define('WEBROOT', 'http://'.HTTP_HOST.str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), true);

	$page = 'home'; // Default page

	$req = Utils::parseUrl(key($_GET));
	// $req = array_map('strtolower', $req);
	define('CURRENT_PAGE', implode('/', $req));

	date_default_timezone_set('Europe/Paris');

	if(!empty($req[0])) {
		$page = $req[0];
		array_shift($req);

	} else {$req = array();}

	// On verifie s'il y a erreur 404
	$controllers = scandir('./controllers');
	$implode = implode('_', $req);
	if(!empty($req) && in_array('c_'.$page.'_'.$implode.'.php', $controllers)) $page .= '_'.$implode;
	elseif(!in_array('c_'.$page.'.php', $controllers)) $page = '404';

	// On charge la page
	// - Modele
	$models = scandir('./models');
	if(in_array('m_'.$page.'.php', $models)) include_once('./models/m_'.$page.'.php');

	// - Page
	include_once('./controllers/c_'.$page.'.php');

	// - View
	$views = scandir('./views');
	if(in_array('v_'.$page.'.php', $views)) {
		include_once('./views/top.php');
		include_once('./views/v_'.$page.'.php');
		include_once('./views/btm.php');
	}
?>