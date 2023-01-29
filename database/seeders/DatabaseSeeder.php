<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Produit;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Produit::factory(10)->create();
    }
}
