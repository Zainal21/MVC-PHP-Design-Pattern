<?php

namespace App\Controllers;

class BookController extends Controller
{

    public function index()
    {
        $data = [
            'web' => [
              'judul' => 'Pemrograman web',
              'Penulis' => 'Bara',
              'Jenis' => 'Pemrograman',
            ],
            'pbo' => [
              'judul' => 'Pemrograman Berorientasi Object',
              'Penulis' => 'Dinda',
              'Jenis' => 'Pemrograman',
            ],
            'ppb' => [
              'judul' => 'Pemrograman perangkat bergerak',
              'Penulis' => 'Bramasyta',
              'Jenis' => 'Pemrograman',
            ],
          ];
        //   var_dump($data);
        return $this->view('main/index', [
            'title' => 'MVC DESIGN PATTERN',
            'data' => $data
        ]);  
    }
}
