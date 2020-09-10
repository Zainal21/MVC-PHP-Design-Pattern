<?php

namespace App\Models;

// model for 
class Book extends Model
{
  public function getData()
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
      return $data;
  }
}
