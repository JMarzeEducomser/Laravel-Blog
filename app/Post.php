<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
// Eliminación de bajo nivel (1)
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // Eliminación de bajo nivel (2)
    use SoftDeletes;

    protected $table = 'posts';
    // Cambiamos el key
    protected $primaryKey = 'codigo';
    // Cambiamos el Auto Increment
    public $incrementing = false;

    protected $fillable = ['codigo', 'titulo', 'contenido', 'publicado', 'categoria_id'];

    // Campos que son fechas
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // Relationships
    public function categoria(){
        return $this->belongsTo('Blog\Categoria');
    }

    public function tags(){
        return $this->belongsToMany('Blog\Tag', 'post_tag', 'post_codigo', 'tag_id');
    }
}
