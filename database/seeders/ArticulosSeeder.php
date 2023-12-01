<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'idMarca' => 'RBK01',
            'descripcion' => 'Reebok',
        ]);

        DB::table('marcas')->insert([
            'idMarca' => 'ADS02',
            'descripcion' => 'Adidas',
        ]);

        DB::table('articulos')->insert([
            'idMarca' => 'RBK01',
            'nombre' => 'Tenis para correr',
            'descripcion' => 'Tenis ideales para correr largas distancias.',
            'color' => 'Negro',
            'precioUnitario' => 99.99,
            'observacion' => 'Diseñados con tecnología para absorción de impactos.',
            'foto' => 'tenis.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articulos')->insert([
            'idMarca' => 'ADS02',
            'nombre' => 'Camiseta deportiva',
            'descripcion' => 'Camiseta ligera para actividades deportivas.',
            'color' => 'Azul',
            'precioUnitario' => 29.99,
            'observacion' => 'Transpirable y de secado rápido.',
            'foto' => 'camiseta.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articulos')->insert([
            'idMarca' => 'RBK01',
            'nombre' => 'Botas de senderismo',
            'descripcion' => 'Botas resistentes para senderismo en terrenos difíciles.',
            'color' => 'Marrón',
            'precioUnitario' => 149.99,
            'observacion' => 'Impermeables y con suela antideslizante.',
            'foto' => 'botas.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articulos')->insert([
            'idMarca' => 'ADS02',
            'nombre' => 'Conjunto deportivo',
            'descripcion' => 'Conjunto de chaqueta y pantalón para entrenamiento.',
            'color' => 'Negro y gris',
            'precioUnitario' => 79.99,
            'observacion' => 'Comodidad y movilidad durante el ejercicio.',
            'foto' => 'conjunto.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
