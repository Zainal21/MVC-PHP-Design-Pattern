<?php

namespace Core\Routing;

use Core\Contracts\Routing\RouterInterface;
use Core\Http\Input;
use Core\Http\Request;
use Core\Http\Response;
use Core\Exception\ExceptionHandler;

// rpute implement route interface

class Router implements RouterInterface
{

    private static $instance;


    private $uri = '';
    private $routes = [];
    private function __construct()
    {
        $this->setUri();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    private function setUri()
    {
        if (Input::hasGet('uri')) {
            $this->uri = ltrim(Input::get('uri'), '/');

            if (strpos(Request::getRequestUri(), '?uri=') !== false) {      
                Response::redirect($this->uri, 301);
            }
        }
    }

    public function add(string $path, string $action)
    {
        $this->routes[$path] = $action;
    }

    public function run()
    {
        foreach ($this->routes as $path => $action) {
            if ($this->uri == $path) {
                return $this->executeAction($action);
            }
        }

        return $this->executeError404();
    }
    private function executeAction(string $action)
    {
        list($controller, $method) = explode('@', $action);

        $class = '\App\Controllers\\'.ucfirst($controller).'Controller';

        if (!class_exists($class)) {
            throw new ExceptionHandler('Class "'.$class.'" not found.');
        }

        $controllerInstantiate = new $class();

        if (!method_exists($controllerInstantiate, $method)) {
            throw new ExceptionHandler('Method "'.$method.'" not found in '.$class.'.');
        }

        return call_user_func_array([new $controllerInstantiate, $method], []);
    }

    private function executeError404()
    {
        $error = new \App\Controllers\ErrorController();

        return $error->show404();
    }
}
