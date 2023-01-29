<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_produit' => Str::random(10),
            'libelle' => $this->faker->text(),
            //'prix' =>$this->faker->numeric(),
            'quantite_stock' => Str::random(10),
            'description' => $this->faker->paragraph(),
        ];
    }
}
