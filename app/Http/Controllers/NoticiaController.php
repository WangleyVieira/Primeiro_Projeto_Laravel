<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    //
    function index(){
        $noticias = Noticia::all();

        return view("noticia.listagem", compact('noticias'));
    }
}
