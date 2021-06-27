<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    
    public function run()
    {
        $categories = [
            [
                'name' => 'celulares y tablets', 
                'slug' => Str::slug('celulares y tablets'), 
                'icon' => '<i class="fas fa-tablet-alt"></i>'
            ],

            [
                'name' => 'TV, Audio & video', 
                'slug' => Str::slug('TV, Audio & video'), 
                'icon' => '<i class="fas fa-tv"></i>'
            ],

            [
                'name' => 'Consolas & Video juegos', 
                'slug' => Str::slug('Consolas & Video juegos'), 
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],

            [
                'name' => 'PC & Laptops', 
                'slug' => Str::slug('PC & Laptops'), 
                'icon' => '<i class="fas fa-laptop"></i>'
            ],

            [
                'name' => 'Muebles', 
                'slug' => Str::slug('Muebles'), 
                'icon' => '<i class="fas fa-couch"></i>'
            ],

            [
                'name' => 'Moda', 
                'slug' => Str::slug('Moda'), 
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],


        ];

        foreach ($categories as $category) {
            Category::factory(1)->create($category);
        }
    }
}
