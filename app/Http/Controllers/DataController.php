<?php

namespace App\Http\Controllers;

use App\Models\clothes;
use App\Models\Blog;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function getDataSlider(){
        $collection = clothes::select('id','category', 'name', 'price', 'img_path')->orderBy('updated_at', 'DESC')->take(10)->get();
        return $collection;
    }
    public function getDataNew(){
        $collection = clothes::select('id','category', 'name', 'price', 'img_path')
                            ->orderBy('updated_at', 'DESC')->take(4)->get();
        return $collection;
    }
    public function getDataBlogs(){
        $collection = Blog::select('id','topic', 'title', 'text','img_path')->selectRaw('DATE(updated_at) as date')->get();
        return $collection;
    }
    public function getDataCatalog(){
        $collection = clothes::select('id','category', 'name', 'price', 'img_path','status')->get();
        return $collection;
    }
}
