<?php
session_start();
define('ROOT' , __DIR__);

require_once(ROOT.'/components/Router.php');
require (ROOT.'/db/rb-mysql.php');
R::setup( 'mysql:host=localhost;dbname=redbeanphp','root', '');
$router = new Router;
$router->Run();
echo $_SESSION['user'];


?>



