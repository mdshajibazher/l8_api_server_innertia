<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'name' => 'Size 1',
            'slug' => Str::slug('Size 1'),
        ]);

        DB::table('sizes')->insert([
            'name' => 'Size 2',
            'slug' => Str::slug('Size 2'),
        ]);
        DB::table('sizes')->insert([
            'name' => 'Size 3',
            'slug' => Str::slug('Size 3'),
        ]);
        DB::table('sizes')->insert([
            'name' => 'Size 4',
            'slug' => Str::slug('Size 4'),
        ]);
        DB::table('sizes')->insert([
            'name' => 'Size 5',
            'slug' => Str::slug('Size 5'),
        ]);
    }
}
