<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tableimg extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_product',
        'img_path'
    ];
}
