<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //
    function index(){
        $categorias = Categoria::all();

        return view("categoria.listagem")->with('categorias', $categorias);
    }

    function novo(){
        $categoria = new Categoria();
        return view("categoria.formulario", compact('categoria'));
    }

    function editar($id){
        $categoria = Categoria::find($id); //busca categorias no banco através do ID
        return view("categoria.formulario", compact('categoria'));
    }

    function salvar(Request $request){
        echo "estarei salvando em alguns instantes";
    }
}
