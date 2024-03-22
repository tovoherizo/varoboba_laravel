<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table(
            'produits', function (Blueprint $table) {
                $table->foreign('id_client')
                    ->references('id')
                    ->on('users')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
                $table->foreign('id_categorie_produit')
                    ->references('id')
                    ->on('categorie_produits')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
                $table->foreign('id_taille_produit')
                    ->references('id')
                    ->on('taille_produits')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
                $table->foreign('id_tranche_age')
                    ->references('id')
                    ->on('tranche_ages')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
                $table->foreign('id_marque_produit')
                    ->references('id')
                    ->on('marque_produits')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
