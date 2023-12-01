<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
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

        DB::table('marcas')->insert([
            'idMarca' => 'NIK03',
            'descripcion' => 'Nike',
        ]);

        DB::table('marcas')->insert([
            'idMarca' => 'PUM04',
            'descripcion' => 'Puma',
        ]);

        DB::table('marcas')->insert([
            'idMarca' => 'OTH05',
            'descripcion' => 'Otra Marca',
        ]);
    }
}

