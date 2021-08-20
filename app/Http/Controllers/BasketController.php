<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\clothes;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\SizeTable;

class BasketController extends Controller
{
    public function basketData(){
        $orderId = session('orderId');
        date_default_timezone_set("Europe/Moscow");
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
            return $order->clothes;
        }else{
            $order = null;
            return 0;
        }
    }
    public function modalBasket(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
            return $order->clothes;
        }else{
            $order = null;
            return 0;
        }
    }
    public function addToCart(Request $request)
    {
        date_default_timezone_set("Europe/Moscow");
        $id = (int)$request->query('item');
        $quant = (int)$request->query('quant');
        $size = $request->query('size');
        $orderId = session('orderId');
        $current_quant = 0;
        if(is_null($orderId)){
            $order = Order::create();
            session(['orderId'=> $order->id]);
            $orderId = session('orderId');
        }else{
            $order = Order::find($orderId);
        }
        if($quant > 1){
            $current_quant = $quant;
        }
        else{
            $current_quant = 1;
        }
        if(DB::table('clothes_order')->where('order_id', $orderId)->where('clothes_id', $id)->where('size', $size)->exists()){
            $count = DB::table('clothes_order')->where('order_id', $orderId)->where('clothes_id', $id)->where('size', $size)->select('count')->get();
            DB::table('clothes_order')->where('order_id', $orderId)->where('clothes_id', $id)->where('size', $size)->update([
                'count'=>$count[0]->count + $current_quant,
            ]);
        }else{
            DB::table('clothes_order')->insert([
                'order_id'=>$orderId,
                'clothes_id'=> $id,
                'count' => $current_quant,
                'size'=>$size,
                'created_at'=> date("Y-m-d H:i:s"),  
            ]);
        }
        
    }
    public function removeToCart(Request $request){
        date_default_timezone_set("Europe/Moscow");
        $id = $request->query('item');
        $size = $request->query('size');
        $orderId = session('orderId');
        $order = Order::find($orderId);
        $count = DB::table('clothes_order')->where('order_id', $orderId)->where('clothes_id', $id)->where('size', $size)->select('count')->get();
        if($count[0]->count < 2){
            DB::table('clothes_order')->where('order_id', $orderId)->where('clothes_id', $id)->where('size', $size)->delete();
        }else{
            DB::table('clothes_order')->where('order_id', $orderId)->where('clothes_id', $id)->where('size', $size)->update([
                'count'=>$count[0]->count-1,
            ]);
        }
        
    }
    public function removeAllCart(Request $request){
        date_default_timezone_set("Europe/Moscow");
        $id = $request->query('item');
        $size = $request->query('size');
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('basket');
        }
        DB::table('clothes_order')->where('order_id', $orderId)->where('clothes_id', $id)->where('size', $size)->delete();
    }
    public function BasketPlace(){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }else{
            $order = Order::find($orderId);
            return view('order', [
                'order' => $order 
            ]);
        }
    }
    public function BasketConfirm(Request $request){
        date_default_timezone_set("Europe/Moscow");
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        if($request->fullname_invoice and $request->street_invoice){
            $success = $order->saveOrder($request->fullname_invoice,$request->street_invoice,$request->emailaddress_invoice,$request->city_invoice, $request->phonenumber_invoice, $request->zip_invoice);
        }elseif($request->shipping_fullname_invoice and $request->shipping_street_invoice){
            $success = $order->saveOrder($request->shipping_fullname_invoice,$request->shipping_street_invoice,$request->shipping_emailaddress_invoice,$request->shipping_city_invoice, $request->shipping_phonenumber_invoice, $request->shipping_zip_invoice);
        }
        return view('payment',[
            'order' => $order
        ]);
    }
    public function GetPreview(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }else{
            $order = 0;
        }
        return view('preview', [
            'order' => $order
        ]);
    }
    public function finishOrder(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }else{
            $order = 0;
        }
        $success = $order->getStatus();
        session()->forget('orderId');
        if($success){
            $status = 'Ваш заказ принят в обработку';
        }else{
            $status = 'Произошла ошибка';
        }
        return view('index')->with('status', $status);
    }
    public function BasketCount(){
        $count = 0;
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::find(session('orderId'));
            foreach($order->clothes as $product){
                $count =$count + $product->pivot->count;
            }
        }
        return $count;
    }
    // public function addToCart(Request $request){
    //     if(!isset($_COOKIE['cart_id'])){
    //         setcookie('cart_id', uniqid());
    //     }
    //     $cart_id = $_COOKIE['cart_id'];
    //     $product = clothes::where('id', $request->id)->first();
    //     \Cart::session($cart_id)->add(array(
    //         'id' => $product->id,
    //         'name' => $product->name,
    //         'price' => $product->price,
    //         'quantity' => (int)$request->qty,
    //         'attributes' => array(
    //             'img'=>$product->img_path
    //         ),
    //         'associatedModel' => $product
    //     ));
    //     return response()->json(\Cart::getContent());
    // }
}
