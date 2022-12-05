<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histori extends Model
{
    use HasFactory;

    protected $table = "history";
    protected $primaryKey = "id";

    public function gethistory(){
        return $this->orderBy('id', 'DESC')->get();
    }

    public function getRecommended(){
        return $this->where(['is_recommend'=>1])->orderBy('id', 'DESC')->limit(3)->get();
    }

}
