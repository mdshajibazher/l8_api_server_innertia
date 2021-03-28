<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'category 1',
            'slug' => Str::slug('category 1'),
        ]);
        DB::table('categories')->insert([
            'name' => 'category 2',
            'slug' => Str::slug('category 2'),
        ]);
        DB::table('categories')->insert([
            'name' => 'category 3',
            'slug' => Str::slug('category 3'),
        ]);
        DB::table('categories')->insert([
            'name' => 'category 4',
            'slug' => Str::slug('category 4'),
        ]);
        DB::table('categories')->insert([
            'name' => 'category 5',
            'slug' => Str::slug('category 5'),
        ]);
    }
}
