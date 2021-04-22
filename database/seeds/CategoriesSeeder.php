<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'title' => 'Блог',
            'parent_id' => 0,
            'alias' => 'blog'
        ]);

        DB::table('categories')->insert([
            'title' => 'Resauraunt food',
            'parent_id' => 1,
            'alias' => 'resauraunt-food'
        ]);

        DB::table('categories')->insert([
            'title' => 'Travel news',
            'parent_id' => 1,
            'alias' => 'travel-news'
        ]);

        DB::table('categories')->insert([
            'title' => 'Modern technology',
            'parent_id' => 1,
            'alias' => 'modern-technology'
        ]);
    }
}
