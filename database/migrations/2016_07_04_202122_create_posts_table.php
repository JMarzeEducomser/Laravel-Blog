<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('codigo', 10)->primary();
            $table->string('titulo', 100)->unique();
            $table->text('contenido');
            $table->boolean('publicado')->default(true);

            // Foreign Key
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->timestamps(); //created_at y updated_at
            $table->softDeletes(); //deleted_at
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->string('post_codigo', 10)->index();
            $table->foreign('post_codigo')->references('codigo')->on('posts');

            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_tag');
        Schema::drop('posts');
    }
}
