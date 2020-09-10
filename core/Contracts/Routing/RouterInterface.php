<?php

namespace Core\Contracts\Routing;

// interface for route
interface RouterInterface
{
  
    public static function getInstance();
    public function add(string $path, string $action);
    public function run();
}
