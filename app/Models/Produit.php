<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_produit',
        'image_produit',
        'prix_produit',
        'id_client',
        'id_taille_produit',
        'id_tranche_age',
        'id_marque_produit'
    ];
}
