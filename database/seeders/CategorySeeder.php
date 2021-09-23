<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('categories')->insert([
                'title' => 'Category ' . Str::random(10),
                'seo_url' => 'category_' . Str::random(10),
            ]);
        }
    }
}
