<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        Category::create(['name' => 'Laptop']);
        Category::create(['name' => 'DeskTop']);
        Category::create(['name' => 'Mobile']);
        Category::create(['name' => 'Tab']);
        Category::create(['name' => 'Head Phones']);
        Category::create(['name' => 'MP3']);
        Category::create(['name' => 'Camera']);
        Category::create(['name' => 'Pendrive']);
        Category::create(['name' => 'Cooler']);
        Category::create(['name' => 'Chargers']);
    }
}
