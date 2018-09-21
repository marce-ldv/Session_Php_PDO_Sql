<?php 

	require_once('config/config.php');
	require_once('config/autoload.php');

	use config\Router as Router;
	use config\Request as Request;

	if (!isset($_SESSION)) {
		session_start();
	}
	
	$router= new Router(new Request());
?>

