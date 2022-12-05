<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sepatu extends Model
{
    use HasFactory;
    protected $table = "sepatu";
    protected $primaryKey = "id";

    public function getsepatu(){
        return $this->orderBy('id', 'DESC')->get();
    }
}
