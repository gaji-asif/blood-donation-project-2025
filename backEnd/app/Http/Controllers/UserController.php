<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function show($id){
        $user = User::find($id);
        if(!$user){
            return response()->json([
                'success' => false,
                'message' => 'User not found',
                'data' => $user
            ],404);

        }
        return response()->json([
            'success' => true,
            'message' => 'User found',
            'data' => $user
        ],200);
    }
}
