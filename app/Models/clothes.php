<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clothes extends Model
{
    use HasFactory;
    protected $fillable = [
        'category','name',
        'price','img_path','status','old_price','reviews',
        'description', 'tags','size'
    ];
}
