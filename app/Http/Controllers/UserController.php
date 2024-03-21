<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();


        return response()->json([
            'results'=>$users
        ],200);



    }
    public function store(UserStoreRequest $request)
    {
       try {
        //code...
       } catch (\Exception $e) {

       return response()->json([
        'message'=>"something went really wrong"
       ],500);
       }
    }
    public function show($id){
        $users = User::find($id);

        if(!$users){
            return  response()->json([
                'message' => 'User Not found'
            ], 404);
        }
          return response()->json([
            'users'=>$users
          ],200);

    }




}
