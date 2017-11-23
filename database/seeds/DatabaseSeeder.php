<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        factory(App\proveedores_model::class, 10)->create();
        factory(App\clientes_model::class, 10)->create();
        factory(App\User::class, 10)->create();
        factory(App\productos::class, 10)->create();
        factory(App\clientes_proveedores::class, 10)->create();
        factory(App\ventas::class, 10)->create();
        factory(App\ventas_detalle::class, 10)->create();
        

    }
}
