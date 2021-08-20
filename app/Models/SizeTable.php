<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'clothes_id','size','count'
    ];


}
