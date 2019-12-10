<?php

namespace Laradex\Http\Controllers;

use Laradex\Http\Controllers\Controller;

class PruebaController extends Controller{
	public function prueba($param){
		return 'Estoy recibiendo un parametro: '.$param;
	}
}
