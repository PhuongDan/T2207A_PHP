<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Category::factory(10)->create();
//        \App\Models\Brand::factory(1000)->create();php artisan migrate:refresh --seed
        \App\Models\Products::factory(1000)->create();
    }
}
