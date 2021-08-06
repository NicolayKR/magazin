<?php

namespace App\Http\Controllers;

use App\Models\clothes;
use App\Models\Blog;
use App\Models\tableimg;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function getDataSlider(){
        $collection = clothes::select('id','category', 'name', 'price', 'img_path','reviews','old_price')->orderBy('updated_at', 'DESC')->take(10)->get();
        return $collection;
    }
    public function getDataNew(){
        $collection = clothes::select('id','category', 'name', 'price', 'img_path','reviews','old_price')
                            ->orderBy('updated_at', 'DESC')->take(4)->get();
        return $collection;
    }
    public function getDataBlogs(){
        $collection = Blog::select('id','topic', 'title', 'text','img_path')->selectRaw('DATE(updated_at) as date')->get();
        return $collection;
    }
    public function getDataCatalog(){
        $collection = clothes::select('id','category', 'name', 'price', 'img_path','status','reviews','old_price')->get();
        return $collection;
    }
    public function getCardProduct($id){
        $index = clothes::select('reviews')->where('id',$id)->get();
        $current_index = $index[0]->reviews + 1;
        clothes::where('id',$id)->update(array('reviews'=>$current_index));
        $product = clothes::select('id','category', 'name', 'price', 'img_path','status','reviews','old_price','description','tags')->where('id', $id)->get()->toArray();
        $img_collection = tableimg::select('img_path')->where('id_product', $id)->get();
        $img_array = [];
        $final_array = [];
        foreach($img_collection as $item){
            $img_array[] = $item['img_path'];
        }
        $product[0]['img_slider'][] = $img_array;
        return view('productCard', [
            'product' => $product
        ]);
    }
    public function getBlog($id){
        $collection = Blog::select('id','topic', 'title', 'text','img_path')->selectRaw('DATE(updated_at) as date')->where('id', $id)->get();
        return view('blog-card', [
            'collection' => $collection
        ]);
    }
}
