<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $files_liste = scandir(dirname(__DIR__, 2) .  '/storage/app/public/img/photos/produits');
        // $user = DB::table('users')->where('id', ')->first();

        return [
            'nom_produit' => fake()->firstNameMale(),
            'image_produit' => $files_liste[rand(0, 27)],
            'prix_produit' => rand(3000, 60000),
            'id_categorie_produit' => rand(1, 7),
            'id_client' => rand(1, 50),
            'id_taille_produit' => rand(1, 10),
            'id_tranche_age' => rand(1, 4),
            'id_marque_produit' => rand(1, 39)
        ];
    }
}
