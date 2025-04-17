<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\SendWecomeMailJob;
use App\Util\ResponseUtil;
use Illuminate\Support\Facades\Response;

class usercontroller extends Controller
{
    public function userRegister(Request $request){

        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
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

    //use of ResponseUtil

    public function useDI(ResponseUtil $sabin){
       return response()->json( $sabin->sendResponse('this is DI test','DI1,DI2,DI3'));
    }


    //BIRTH KUNDALI BIRTHPLACE LAT LONG PART
    public function location(){
        return view('CreateKundali');
    }

}
