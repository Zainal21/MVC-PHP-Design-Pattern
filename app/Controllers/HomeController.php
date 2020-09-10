<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('specific-page/home', [
            'baliseTitle' => 'MVC DESIGN PATTERN',
            'metaDescription' => 'Homepage desciption',
        ]);  
    }
}
