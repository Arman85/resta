<?php

use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
            'title' => 'Home',
            'path' => '/',
            'parent' => '0'
        ]);

        DB::table('menus')->insert([
            'title' => 'Menu',
            'path' => '/menu',
            'parent' => '0'
        ]);

        DB::table('menus')->insert([
            'title' => 'About',
            'path' => '/about',
            'parent' => '0'
        ]);

        DB::table('menus')->insert([
            'title' => 'Blog',
            'path' => '/blog',
            'parent' => '0'
        ]);

        DB::table('menus')->insert([
            'title' => 'Contact',
            'path' => '/contact',
            'parent' => '0'
        ]);

        DB::table('menus')->insert([
            'title' => 'Elements',
            'path' => '/elements',
            'parent' => '3'
        ]);

        DB::table('menus')->insert([
            'title' => 'Single - Blog',
            'path' => '/single-blog',
            'parent' => '4'
        ]);
    }
}
