<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $table = "noticias";
    public $timestamps = false;

    public function categoria(){
        return $this->belongsTo("App\Models\Categoria");
    }
}
