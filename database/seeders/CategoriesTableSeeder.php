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
            ['name' => 'UI/UX Design', 'description' => 'This is UI/UX Design'],
            ['name' => 'Development', 'description' => 'This is Development'],
            ['name' => 'Data Science', 'description' => 'This is Data Science'],
            ['name' => 'Business', 'description' => 'This is Business'],
            ['name' => 'Financial', 'description' => 'This is Financial'],
            ['name' => 'Marketing', 'description' => 'This is Marketing'],
            ['name' => 'Design', 'description' => 'This is Design'],
            // Add as many categories as you want
        ]);        //
    }
}
