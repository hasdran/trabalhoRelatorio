<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exportar extends Controller
{
	public function listar() {
		return view('exportar');
	}
}
