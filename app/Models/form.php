<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    protected $table = "form";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','Nama','email','Alamat','Metode'];
}
