<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CARGAR TIPO DE INMUEBLES
        \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Aparta-Estudio'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Apartamento'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Bodega'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Casa'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Centro Comercial'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Consultorio'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Edificio'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Fábrica'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Finca'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Habitación'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Hotel'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Local'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Lote'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Oficina'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Parcela'
         ]);

         \App\Models\Inmueble::create([
            'categoria_inmueble' => 'Parqueadero'
         ]);

        // CARGAR TIPO DE DOCUMENTOS 
        \App\Models\Documento::create([
            'documento_per' => 'Cédula Ciudadanía'
         ]);

         \App\Models\Documento::create([
            'documento_per' => 'Cédula Extranjería'
         ]);

         \App\Models\Documento::create([
            'documento_per' => 'NIT'
         ]);

         \App\Models\Documento::create([
            'documento_per' => 'Pasaporte'
         ]);

         \App\Models\Documento::create([
            'documento_per' => 'Registro Civil'
         ]);

         \App\Models\Documento::create([
            'documento_per' => 'Tarjeta Extranjería'
         ]);

         \App\Models\Documento::create([
            'documento_per' => 'Tarjeta Identidad'
         ]);

        // CARGAR ESTADOS DE PRPIEDAD
        \App\Models\Estado::create([
            'estado_propiedad' => 'En Arriendo'
         ]); 

         \App\Models\Estado::create([
            'estado_propiedad' => 'En Venta'
         ]); 

         \App\Models\Estado::create([
            'estado_propiedad' => 'Arriendo - Venta'
         ]); 

         \App\Models\Estado::create([
            'estado_propiedad' => 'Permuta'
         ]);


         
        // \App\Models\User::factory(10)->create();
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            RoleHasPermissionSeeder::class,
            UserSeeder::class,
        ]);
    }
}
