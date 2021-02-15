<?php

namespace App\Models;

class Pokemon
{
    public $nombre;
    public $tipo1;
    public $tipo2;
    public $info;

    public function avistar($nombre, $tipo1, $tipo2, $info)
    {
        $this->nombre = $nombre;
        $this->tipo1 = $tipo1;
        $this->tipo2 = $tipo2;
        $this->info = $info;
    }
}
