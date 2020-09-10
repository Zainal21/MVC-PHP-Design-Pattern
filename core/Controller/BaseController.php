<?php

namespace Core\Controller;

use Core\Http\Response;

abstract class BaseController
{

    private $layout;
    public function __construct()
    {
        $this->layout = 'site';
    }
    final protected function setLayout(string $layout)
    {
        $this->layout = $layout;
    }

    final protected function view(string $view, array $data = [])
    {       
        if ($data) extract($data);

        ob_start();
        require base_path().'/app/views/'.$view.'.php';
        $contentInLayout = ob_get_clean();

        require base_path().'/app/views/layouts/'.$this->layout.'.php';

        exit();
    }

    final protected function header(string $content, string $type = null)
    {
        Response::header($content, $type);
    }
}
