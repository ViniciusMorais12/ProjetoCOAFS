<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

class noticiacontroller extends Controller
{
    public function index()
	{
		$all = noticia::orderBy('id', 'desc')->get();
		return view('inicio', ['noticias' => $all]);
	}

	public function create()
	{
		return view('criarnoticia');
	}

	public function show($id)
	{
		$obj = noticia::find($id);

		if (isset($obj)) {
			return view('noticiaoficial', ['noticia' => $obj]);		
		}
		return redirect()->to(route('noticias'));
	}

	public function store(Request $request)
	{
		$data = $request->only('titulo', 'descricao', 'texto');
		$obj = new noticia;
		$obj->titulo = $data['titulo'];
		$obj->descricao = $data['descricao'];
		$obj->texto = $data['texto'];
		$obj->save();
		return redirect()->to(route('noticias'));
	}

}

