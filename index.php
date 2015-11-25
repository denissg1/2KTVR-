<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include_once 'vendor/autoload.php';
	include_once 'model/DBH.php';
	include_once 'model/PostModel.php';
	include_once 'model/UserModel.php';
	include_once 'controllers/PostController.php';
	include_once 'controllers/UserController.php';
	include_once 'route/routing.php';
	
	$response-> send();
?>





