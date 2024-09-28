<?php  

ob_start();
session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");


// Universal variables
$company = "Joxim India";

// Localhost settings
 $path = '../public/';
 
 defined('DB_HOST') ? null : define('DB_HOST', 'localhost');

 defined('DB_USER') ? null : define('DB_USER', 'root');

 defined('DB_PASS') ? null : define('DB_PASS', 'VAQ~r:0_Z2y|U|1=E,{p[RoazT.H<n0Z');

 defined('DB_NAME') ? null : define('DB_NAME', 'joxim');


// Database connections
$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$link->set_charset("utf8mb4");

//Check connection
if ($link -> connect_errno) {
	echo 'Failed to connect to Database because: ' . $link->connect_errno;
	exit();
}


// include functions file
require_once('functions.php');

?>