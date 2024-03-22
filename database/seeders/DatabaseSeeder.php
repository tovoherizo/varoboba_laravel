<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategorieProduit;
use App\Models\MarqueProduit;
use App\Models\Produit;
use App\Models\TailleProduit;
use App\Models\TrancheAge;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ACOTE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ACQUAVERDE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ADIDAS'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ADIDAS UNDERWEAR'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'AEC Paris'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'AGNES B. - Seconde Main'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'AIGLE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ALBERTINE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ALEXANDER MCQUEEN - Seconde Main'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ALME'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ALOHAS'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'AMERICAN VINTAGE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'AMI PARIS - Seconde Main'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ANAKI'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ANATOLE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ANCIENT GREEK SANDALS'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'ANGARDE'
        //     ]
        // );




        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BALENCIAGA - Seconde Main'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BALMAIN - Seconde Main'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BALZAC PARIS - Seconde Main'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BANANA MOON'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BANGLE UP'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BARBOUR'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BA&SH'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BBUBLE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BECKSONDERGAARD'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BELIZA'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BELLA JONES'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BELLEPIECE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BELLEROSE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BENSIMON'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BERENICE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BILLABONG'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'BILLI BI'
        //     ]
        // );






        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'CHANTELLE'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'CHICHI CASTELNANGO'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'CHIE MIHARA'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'CHLOE - Seconde Main'
        //     ]
        // );
        // MarqueProduit::factory()->create(
        //     [
        //         'nom_marque_produit' => 'CHLOE - Seconde Main'
        //     ]
        // );

        // TrancheAge::factory()->create(
        //     [
        //         'nom_tranche_age' => 'adulte'
        //     ]
        // );
        // TrancheAge::factory()->create(
        //     [
        //         'nom_tranche_age' => 'adolescent'
        //     ]
        // );
        // TrancheAge::factory()->create(
        //     [
        //         'nom_tranche_age' => 'enfant'
        //     ]
        // );
        // TrancheAge::factory()->create(
        //     [
        //         'nom_tranche_age' => 'bébé'
        //     ]
        // );


        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => 'L'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => 'M'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => 'XL'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => 'XXL'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => 'ML'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => '15'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => '20'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => '30'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => '40'
        //     ]
        // );

        // TailleProduit::factory()->create(
        //     [
        //         'nom_taille_produit' => '60'
        //     ]
        // );

        // CategorieProduit::factory()->create(
        //     [
        //         'nom_categorie_produit' => 'vintage'
        //     ]
        // );
        // CategorieProduit::factory()->create(
        //     [
        //         'nom_categorie_produit' => 'casual'
        //     ]
        // );
        // CategorieProduit::factory()->create(
        //     [
        //         'nom_categorie_produit' => 'sportwear'
        //     ]
        // );
        // CategorieProduit::factory()->create(
        //     [
        //         'nom_categorie_produit' => 'boheme'
        //     ]
        // );
        // CategorieProduit::factory()->create(
        //     [
        //         'nom_categorie_produit' => 'romantique'
        //     ]
        // );
        // CategorieProduit::factory()->create(
        //     [
        //         'nom_categorie_produit' => 'fashion'
        //     ]
        // );
        // CategorieProduit::factory()->create(
        //     [
        //         'nom_categorie_produit' => 'classique'
        //     ]
        // );

        Produit::factory()->count(28)->create();

    }
}
