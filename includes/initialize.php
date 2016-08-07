<?php 

# Enable Error reporting
error_reporting(E_ALL ^ E_DEPRECATED);
// error_reporting(E_ALL);
ini_set('display_errors', 1);

defined('DS') ? null : define('DS' , DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', '/var/www/html/photo_gallery');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// first load config 
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."pagination.php");

// database class
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");


// all database related classes
require_once(LIB_PATH.DS."user.php");
require_once(LIB_PATH.DS."item.php");
require_once(LIB_PATH.DS."photograph.php");


?>
