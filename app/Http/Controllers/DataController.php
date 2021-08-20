<?php

namespace App\Http\Controllers;

use App\Models\clothes;
use App\Models\Blog;
use App\Models\tableimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Models\NewsletterMail;
use App\Models\SizeTable;

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
        if($index[0]){
            $current_index = $index[0]->reviews + 1;
            clothes::where('id',$id)->update(array('reviews'=>$current_index));
        }else{
            clothes::where('id',$id)->update(array('reviews'=>1)); 
        }
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
    public function getCardData(Request $request){
        $id = $request->query('item');
        $index = clothes::select('reviews')->where('id',$id)->get();
        $product = [];
        $collection = DB::table('clothes')
            ->leftJoin('size_tables',function ($join) {
                $join->on('clothes.id', '=', 'size_tables.clothes_id');})
            ->where('clothes.id', $id)
            ->select('clothes.id','category', 'name', 'price', 'img_path','status','reviews','old_price','description','tags','size','count')
            ->get();
        foreach($collection as $item){
            $product[0]['id'] = $item->id;
            $product[0]['name'] = $item->name;
            $product[0]['price'] = $item->price;
            $product[0]['img_path'] = $item->img_path;
            $product[0]['status'] = $item->status;
            $product[0]['reviews'] = $item->reviews;
            $product[0]['old_price'] = $item->old_price;
            $product[0]['description'] = $item->description;
            $product[0]['tags'] = $item->tags;
            $product[0]['size'][$item->size] = $item->count;
        }
        $img_collection = tableimg::select('img_path')->where('id_product', $id)->get();
        $img_array = [];
        $final_array = [];
        foreach($img_collection as $item){
            $img_array[] = $item['img_path'];
        }
        $product[0]['img_slider'][] = $img_array;
        return $product;
    }
    public function getBlog($id){
        $result = Blog::select(Blog::raw('COUNT(*)'))->where('id',$id)->count(); 
        if($result == 1) {
            $collection = Blog::select('id','topic', 'title', 'text','img_path')->selectRaw('DATE(updated_at) as date')->where('id', $id)->get();
            return view('blog-card', [
                'collection' => $collection
            ]);
        }else{
            abort(404);
        }
    }
    public function getDataBlog(Request $request){
        $blog = $request->query('blog');
        if($blog == 'null'){
            $count = DB::table('blogs')->count();
            $random_id = random_int(1, $count);
            $collection = Blog::select('id','author','topic', 'title', 'text','img_path')->selectRaw('DATE(updated_at) as date')->where('id',$random_id)->get();
            return $collection;
        }else{
            $collection = Blog::select('id','author','topic', 'title', 'text','img_path')->selectRaw('DATE(updated_at) as date')->where('id',$blog)->get();
            return $collection;
        }
    }
    public function postMail(Request $request){
        $toEmail = 'n.kryuchkov@enterprise-it.ru';
        $email = $request->email;
        $name = $request->name;
        $surname = $request->surname;//Фамилия
        $mess = $request->mess;
        Mail::to($toEmail)->send(new Contact($name, $email, $surname, $mess));
        return redirect()->route('/');
    }
    public function getMail(Request $request){
        $mail = $request->query('mail');
        NewsletterMail::create(array(
            'mail'=>$mail
        ));
        return 1; 
    }
}
