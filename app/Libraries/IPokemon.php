<?php

namespace App\Libraries;

use App\Models\Pokemon;

interface IPokemon
{
    public function crear(Pokemon $pokemon);
    public function obtener();
    public function eliminar($id);
    public function info($id);
    public function cambiar($id,Pokemon $pokemon);
}
