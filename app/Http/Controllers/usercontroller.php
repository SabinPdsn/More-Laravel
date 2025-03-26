<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\SendWecomeMailJob;

use function Laravel\Prompts\password;

class usercontroller extends Controller
{
    public function userRegister(Request $request){

        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email:dns',
            'password'=>'required|string|min:8',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        SendWecomeMailJob::dispatch($user);


    return response()->json([
        "message" => "user registered successfully"
    ]);
    }

}
