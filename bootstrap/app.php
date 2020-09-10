<?php

use Core\Routing\Router;
use Core\Foundation\Application;

// for instance route
$router = Router::getInstance();

// for insrance app
$app = new Application($router);

return $app;
