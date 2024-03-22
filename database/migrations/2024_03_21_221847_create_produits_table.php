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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit', 100);
            $table->string('image_produit', 200);
            $table->tinyInteger('prix_produit');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_categorie_produit')->nullable();
            $table->unsignedBigInteger('id_taille_produit')->nullable();
            $table->unsignedBigInteger('id_tranche_age')->nullable();
            $table->unsignedBigInteger('id_marque_produit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
