<?php

use Core\Routing\Router;


// routing web

$router = Router::getInstance();

$router->add('', 'Home@index');
