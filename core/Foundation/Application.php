<?php

namespace Core\Foundation;

use Core\Contracts\Routing\RouterInterface;
// construct route interface
class Application
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
    public function run()
    {
        $this->router->run();
    }
}
