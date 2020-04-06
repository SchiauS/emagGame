<?php
require '../vendor/autoload.php';

use Src\Controller;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == 'GET'){
	header("Content-Type: text/html; charset=UTF-8");
	require '../views/index.php';
}else{

	try {

	$controller = new Controller();
	call_user_func_array([$controller, $uri[2]], array($_POST));

	}catch(Exception $e){
		throw new Exception("Route not found", 1);
	}

}




