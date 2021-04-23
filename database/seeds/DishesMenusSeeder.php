<?php

use Illuminate\Database\Seeder;

class DishesMenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dishes_menus')->insert([
            'title' => 'Chicken Chilis',
            'description' => 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.',
            'img' => '1.png',
            'price' => 20
        ]);

        DB::table('dishes_menus')->insert([
            'title' => 'Burger Cury',
            'description' => 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.',
            'img' => '1.png',
            'price' => 15.5
        ]);

        DB::table('dishes_menus')->insert([
            'title' => 'Vegetable fry',
            'description' => 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.',
            'img' => '1.png',
            'price' => 20.5
        ]);

        DB::table('dishes_menus')->insert([
            'title' => 'Fried Rice',
            'description' => 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.',
            'img' => '1.png',
            'price' => 25
        ]);

        DB::table('dishes_menus')->insert([
            'title' => 'Chicken Chilis',
            'description' => 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.',
            'img' => '1.png',
            'price' => 45.3
        ]);

        DB::table('dishes_menus')->insert([
            'title' => 'Chicken Chilis',
            'description' => 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.',
            'img' => '1.png',
            'price' => 30.5
        ]);
    }
}
