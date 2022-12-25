<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\histori;
use App\Models\sepatu;
use App\Models\User;

class tampilkan extends Controller
{
    public function index()
    {
        $barangs = histori::paginate(20);
        dd($barangs);
    }

    public function welcomeInfo(){
        $list = new histori();
        $list = $list->gethistory();
        //$list['article_content']=html_entity_decode($list['article_content']);
        foreach ($list as $item){
            $item['alamat']=strip_tags($item['alamat']);
            $item['alamat']=$Content = preg_replace("/&#?[a-z0-9]+;/i"," ",$item['alamat']); 
        }
        return response()->json($list);
    }

    public function tampilkan(){
        $list = new histori();
        $list = $list->gethistory();
        //$list['article_content']=html_entity_decode($list['article_content']);
        foreach ($list as $item){
            $item['alamat']=strip_tags($item['alamat']);
            $item['alamat']=$Content = preg_replace("/&#?[a-z0-9]+;/i"," ",$item['alamat']); 
        }
        return response()->json($list);
    }

    public function getsepatu(){
        $list = new sepatu();
        $list = $list->getsepatu();
        //$list['article_content']=html_entity_decode($list['article_content']);
        return response()->json($list);
    }

    public function getuser(){
        $list = new User();
        $list = $list->getuser();
        //$list['article_content']=html_entity_decode($list['article_content']);
        return response()->json($list);
    }



}
