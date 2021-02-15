<?php

namespace App\Controllers;

use App\Libraries\Json;
use App\Models\Pokemon;

class Home extends BaseController
{
	protected $libreria;

	function __construct()
	{
		$this->libreria = new Json;
	}

	public function index()
	{
		$db = $this->libreria->obtener();
		return view('inicio', ["db" => $db]);
	}

	public function registrar()
	{
		if ($this->request->getVar()) {
			$pokemon = new Pokemon;
			$pokemon->avistar($this->request->getVar("nombre"), $this->request->getVar("tipo1"), $this->request->getVar("tipo2"), $this->request->getVar("info"));
			$this->libreria->crear($pokemon);
			echo view('success');
		}

		return view('registrar');
	}

	public function eliminar($id)
	{
		$this->libreria->eliminar($id);
		return redirect()->to(base_url("/"));
	}

	public function editar($id)
	{
		if ($this->request->getVar()) {
			$pokemon = new Pokemon;
			$pokemon->avistar($this->request->getVar("nombre"), $this->request->getVar("tipo1"), $this->request->getVar("tipo2"), $this->request->getVar("info"));
			$this->libreria->cambiar($id, $pokemon);
			echo view('success');
		}

		$pokemon = $this->libreria->info($id);
		return view('editar', ["id" => $id, "pokemon" => $pokemon]);
	}
}
