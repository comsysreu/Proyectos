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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'sexo' => rand(0,1),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\proveedores_model::class, function (Faker\Generator $faker) {


    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'nit' => $faker->ean8,
        'telefono' => $faker->e164PhoneNumber,
    ];
});

$factory->define(App\clientes_model::class, function (Faker\Generator $faker) {


    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'fecha_nacimiento' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'sexo' => rand(0,1),
        'nit' => $faker->ean8,
        'telefono' => $faker->e164PhoneNumber,
    ];
});

$factory->define(App\productos::class, function (Faker\Generator $faker) {


    return [
        'nombre' => $faker->name,
        'codigo' => $faker->ean13,
        'SKU' => $faker->ean8,
    ];
});

$factory->define(App\clientes_proveedores::class, function (Faker\Generator $faker) {


    return [
        'id_cliente' => rand(1,10),
        'id_proveedor' => rand(1,10),
    ];
});

$factory->define(App\ventas::class, function (Faker\Generator $faker) {


    return [
        'id_usuario' => rand(1,10),
        'id_cliente' => rand(1,10),
        'total' => rand(15.0,550.0),

    ];
});

$factory->define(App\ventas_detalle::class, function (Faker\Generator $faker) {


    return [
        'id_venta' => rand(1,10),
        'id_producto' => rand(1,10),
        'cantidad' => rand(1,20),
        'subtotal' => rand(15.0,550.0),

    ];
});