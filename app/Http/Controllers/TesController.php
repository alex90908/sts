<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
class TesController extends Controller
{
    public function formk(Request $request){
        $user = new form();
        $user->Nama=$request->post('nama');
        $user->email=$request->post('email');
        $user->Alamat=$request->post('Alamat');
        $user->Metode=$request->post('Metode');
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
