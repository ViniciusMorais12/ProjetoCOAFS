<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;
use App\Comentario;

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

		$comentarios = Comentario::where('noticia', $id)
			->leftJoin('users', 'comentarios.usuario', '=', 'users.id')
			->selectRaw('comentarios.*, users.name usuario')
			->orderBy('comentarios.id', 'desc')
			->get();

		if (isset($obj)) {
			return view('noticiaoficial', ['noticia' => $obj, 'comentarios' => $comentarios]);		
		}
		return redirect()->to(route('noticias'));
	}

	public function store(Request $request)
	{
		$data = $request->only('titulo', 'descricao', 'texto');

		$fotoname = uniqid(date('HisYmd')).".".$request->foto->extension();
		$fototype = $request->foto->getMimeType();
		$fotosize = $request->foto->getClientSize();

		$request->foto->storeAs('public', $fotoname);

		$obj = new noticia;
		$obj->titulo = $data['titulo'];
		$obj->descricao = $data['descricao'];
		$obj->texto = $data['texto'];
		$obj->fotoname = $fotoname;
		$obj->fototype = $fototype;
		$obj->fotosize = $fotosize;
		
		\Auth::user()->noticias()->save($obj);

		return redirect()->to(route('noticias'));
	}

	public function img(Request $request, $nome) {
		$response = \Response::make(\Storage::disk('public')->get($nome), 200);
	    	$response->header("Content-Type", \Storage::disk('public')->mimeType($nome))->header("Content-Size", \Storage::disk('public')->size($nome));
		
		return $response;
	}

	public function comentar(Request $request) {

		$comentario = new Comentario;
		$comentario->text = $request->comentario;
		$comentario->noticia = $request->noticiaid;

		\Auth::user()->comentarios()->save($comentario);

		return redirect()->to(route('noticia', [$request->noticiaid]));

	}

}

