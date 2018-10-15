<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoopController extends Controller
{
    
	public function quemsomos(){
		return view('quemsomos');
	}

	public function historia(){
		return view('historia');
	}

	public function comosurge(){
		return view('comosurge');
	}

	public function noticias(){
		return view('noticias');
	}

	public function contato(){
		return view('contato');
	}

}
