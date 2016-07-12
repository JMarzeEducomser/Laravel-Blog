<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Blog\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Blog\Post::class, function (Faker\Generator $faker) {
    return [
        'codigo' => str_random(10),
        'titulo' => $faker->sentence(6, true),
        'contenido' => $faker->realText(300, 4),
        'publicado' => true,
        'categoria_id' => factory(Blog\Categoria::class)->create()->id,
    ];
});

$factory->define(Blog\Categoria::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence(1, true),
    ];
});
