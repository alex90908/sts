<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Auth;

class UpdateController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => 'confirmed',
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $user->email = $request->email;
        $user->nama=$request->nama;
        $user->nohp=$request->nohp;


        $user->update();
        return response()->json([
            'success' => true, 
            'message' => 'Information has been updated successfully!',
            'user' =>$user
        ]);


        
    }
}