<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['descripcion', 'created_ad', 'updated_at'];
    protected $table= 'categorias';
}
