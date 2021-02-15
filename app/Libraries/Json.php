<?php

namespace App\Libraries;

class Json implements IPokemon
{
    private $rutadb = ROOTPATH . "/public/db.json";

    public function crear($pokemon)
    {
        $db = file_get_contents($this->rutadb);
        $db = json_decode($db, true);

        $db[] = (array) $pokemon;
        file_put_contents($this->rutadb, json_encode($db));
    }

    public function obtener()
    {
        $db = file_get_contents($this->rutadb);
        return json_decode($db, true);
    }

    public function eliminar($id)
    {
        $db = file_get_contents($this->rutadb);
        $db = json_decode($db, true);
        unset($db[$id]);
        file_put_contents($this->rutadb, json_encode($db));
    }

    public function info($id)
    {
        $db = file_get_contents($this->rutadb);
        $db = json_decode($db, true);
        return $db[$id];
    }

    public function cambiar($id, $pokemon)
    {
        $db = file_get_contents($this->rutadb);
        $db = json_decode($db, true);

        $db[$id] = (array) $pokemon;
        file_put_contents($this->rutadb, json_encode($db));
    }
}
