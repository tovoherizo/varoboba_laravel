<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (request()->isMethod('post')) {
        return [


                'nom_produit' => 'required|string|max:258',
                'image_produit' => 'required|string',
                'prix_produit' => 'required|int',
                'id_client' => 'required|string|max:258',
                'id_categorie_produit' => 'string',
                'id_taille_produit' => 'int',
                'id_tranche_age' => 'string|max:258',
                'id_marque' => '|string',

            ];
        } else {
            return [
                'nom_produit' => 'required|string|max:258',
                'image_produit' => 'required|string',
                'prix_produit' => 'required|int',
                'id_client' => 'required|string|max:258',
                'id_categorie_produit' => 'string',
                'id_taille_produit' => 'int',
                'id_tranche_age' => 'string|max:258',
                'id_marque' => '|string',
            ];
        }
    }
    public function message()
    {
        if (request()->isMethod('post')) {
            return [
                'name.required' => 'name is required',
                'email.required' => 'email is required',
                'password.required' => 'password is required'
            ];
        } else {
            return [
                'name.required' => 'name is required',
                'email.required' => 'email is required',
                'password.required' => 'password is required'
            ];
        }
    }

    }

