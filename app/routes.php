<?php

use Core\Routing\Router;


// routing web

$router = Router::getInstance();

$router->add('', 'Book@index');
