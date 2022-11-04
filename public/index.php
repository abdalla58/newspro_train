<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define( "APP" , ROOT.DS.'app');
define( "CONFIG" , APP.DS.'config'.DS);
define( "CONTROLLERS" , APP.DS.'controllers'.DS);
define( "CORE" , APP.DS.'core'.DS);
define( "VIEW" , APP.DS.'views'.DS);
define( "MODELS" , APP.DS.'models'.DS);

//config
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","lms");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://practise.test/");

require_once ("../vendor/auto1load.php");


$app = new \MVC\core\app();