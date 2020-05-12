<?php 
require 'vendor/autoload.php';

require 'core/Config.php';

require CORE."/Bootstrap.php";

$routes = require CORE."/Routes.php";

carregarRota($routes);

?>


