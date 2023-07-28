<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ["name" => "Art & Design", "description" => "This is "],
            ["name" => "Affaires & Finance", "description" => "This is "],
            ["name" => "IT & Logiciel", "description" => "This is "],
            ["name" => "Langue & Littérature", "description" => "This is "],
            ["name" => "Développement Personnel", "description" => "This is "],
            ["name" => "Santé & Fitness", "description" => "This is "],
            ["name" => "Musique & Divertissement", "description" => "This is Design"],
            ["name" => "Science & Ingénierie", "description" => "This is Design"],
            ["name" => "Cuisine", "description" => "This is Design"],
            ["name" => "Artisanat", "description" => "This is Design"],
            ["name" => "Autres", "description" => "This is Design"],
            // Add as many categories as you want
        ]);        //
    }
}
