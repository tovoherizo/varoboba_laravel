<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produit = Produit::all();


        return response()->json([
            'results' => $produit
        ], 200);
    }
    public function store(ProduitRequest $request)
    {
        try {
            Produit::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'message' => "something went really wrong"
            ], 500);
        }
    }
    public function show($id)
    {
        $produit = Produit::find($id);

        if (!$produit) {
            return  response()->json([
                'message' => 'User Not found'
            ], 404);
        }
        return response()->json([
            'users' => $produit
        ], 200);
    }
    public function update(ProduitRequest $request, $id)
    {
        try {
            $produit = Produit::find($id);
            if (!$produit) {
                return $produit()->json([
                    'message' => 'User Not Found'
                ], 404);
            }

            $produit->nom_produit = $request->nom_produit;
            $produit->image_produit = $request->image_produit;
            $produit->prix_produit = $request->prix_produit;
            $produit->id_client = $request->id_client;
            $produit->id_categorie_produit = $request->id_categorie_produit;
            $produit->id_taille_produit = $request->id_taille_produit;
            $produit->id_tranche_age = $request->id_tranche_age;
            $produit->id_marque = $request->id_marque;

            $produit->save();
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Something went really wrong"
            ], 500);
        }
    }
    public function destroy($id)
    {
        $produit = Produit::find($id);
        if (!$produit) {
            return response()->json([
                'message' => 'User Not Found'
            ], 404);
        }

        //delete User
        $produit->delete();

        //return json response
        return response()->json([
            'message' => "user successfully deleted"
        ], 200);
    }
}
