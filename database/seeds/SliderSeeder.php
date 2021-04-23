<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sliders')->insert([
            'title' => "Fresh and Delicious Food For your Health",
            'link' => 'menus',
            'img' => 'banner.png'
        ]);

        DB::table('sliders')->insert([
            'title' => "Fresh and Delicious Food For your Health 2",
            'link' => 'menus',
            'img' => 'banner2.png'
        ]);
    }
}
