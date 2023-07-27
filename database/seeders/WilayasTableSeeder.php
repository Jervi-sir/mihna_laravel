<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WilayasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wilayas = [
            'Adrar',
            'Chlef',
            'Laghouat',
            'Oum El Bouaghi',
            'Batna',
            'Béjaïa',
            'Biskra',
            'Béchar',
            'Blida',
            'Bouira',
            'Tamanrasset',
            'Tébessa',
            'Tlemcen',
            'Tiaret',
            'Tizi Ouzou',
            'Algiers',
            'Djelfa',
            'Jijel',
            'Sétif',
            'Saïda',
        ];

        foreach ($wilayas as $index => $wilaya) {
            DB::table('wilayas')->insert([
                'name' => $wilaya,
                'number' => $index
            ]);
        }
    }
}
