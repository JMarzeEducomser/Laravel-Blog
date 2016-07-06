<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Nombre de la tabla
    protected $table = 'categorias';
    // Campos que puedo llenar de forma masiva
    protected $fillable = ['nombre'];
    // No timestamps
    public $timestamps = false;

    // Relationships
    public function posts(){
        return $this->hasMany('Blog\Post');
    }
}
