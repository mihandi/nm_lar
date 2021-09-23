<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = DB::table('users')->select('id');

        $users = $query->pluck('id')->toArray();
        $users_number = sizeof($users) -1;

        $query = DB::table('categories')->select('id');

        $categories = $query->pluck('id')->toArray();
        $categories_number = sizeof($categories) -1;

        for ($i = 0; $i < 20; $i++) {
            DB::table('articles')->insert([
                'title' => 'Article ' . Str::random(10),
                'seo_url' => 'article_' . Str::random(10),
                'user_id' => $users[rand(0, $users_number)],
                'category_id' => $categories[rand(0, $categories_number)],
                'description' => Str::random(100),
                'status' => rand(0,1)
            ]);
        }
    }
}
