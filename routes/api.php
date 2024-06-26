<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//route utilisateur
Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);
Route::post('addnew',[UserController::class,'store']);
Route::put('usersupdate/{id}',[UserController::class,'update']);
Route::delete('usersdelete/{id}',[UserController::class,'destroy']);

//produit
Route::get('produits', [ProduitController::class, 'index']);
Route::get('produits/{id}', [ProduitController::class, 'show']);
Route::post('addnewProduit', [ProduitController::class, 'store']);
Route::put('produitsupdate/{id}', [ProduitController::class, 'update']);
Route::delete('produitsdelete/{id}', [ProduitController::class, 'destroy']);

// table user: -id client
//                    --client

// status : --is status
//               --admin
//               --user
// table produit: --id produit
//                           --categorie produit:--id categorie
//                                                              --nom categorie
//                           --prix produit
//                          --image produit
// transaction :--id transaction
//                        --id acheteur
//                        --id vendeur
//                        --montant transaction
//                        --etat transaction
