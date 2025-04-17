<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\post;
use App\Models\User;

class AdminController extends Controller
{

    public function Adminlogin(Request $request){

        $credentials = $request->only('email','password');

         if(Auth::attempt($credentials)){
            $Auth_user = Auth::user();
            $token = $Auth_user->createToken('My_Token')->plainTextToken;

            return response()->json([
                'message' => 'Welcome SuperAdmin',
                'Token' => $token
            ]);
         }
         return response()->json('innvalid credentials');
    }

    public function index(){

        $this->authorize('index',post::class);

        $user=auth()->user();
        return response()->json($user->load('posts')); 
    }

    public function show(){
        return response()->json(['This can only be viewed by admin']);
    }

    public function store(){
        return response()->json(['only admin can store']);
    }

    public function update(){
        return response()->json(['onlyy admin can update']);
    }

    public function destroy(){
        return response()->json(['only admin can delete']);
    }
}
