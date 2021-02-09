<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Categoria;

class NoticiaController extends Controller
{
    //
    function index(){
        $noticias = Noticia::all();

        return view("noticia.listagem", compact('noticias'));
    }

    function novo(){
        $noticia = new Noticia();
        $noticia->id = 0;
        $noticia->titulo="";
        $noticia->descricao="";
        $noticia->data="";
        $noticia->cidade="";
        $noticia->categoria=0;

        $categorias = Categoria::all();
        return view("noticia.formulario", compact('noticia', 'categorias'));
    }

    function editar($id){
        $noticia = Noticia::find($id); //busca categorias no banco através do ID
        $categorias = Categoria::all();
        return view("noticia.formulario", compact('noticia', 'categorias'));
    }

    function salvar(Request $request){
        return "salvando...";
    }
}
