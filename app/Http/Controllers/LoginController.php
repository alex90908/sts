<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return response()->json();
        }return response()->json(false);
    }

    public function simpanreg(Request $request){
        $user = new User();
        $user->email=$request->post('email');
        $user->password=bcrypt($request->post('password'));
        if($user->save()){
            return response()->json([
                'success' =>true,
            ]); 
        }else{
            return response()->json([
                'success' =>false,               
            ]);
        }
    }
}
