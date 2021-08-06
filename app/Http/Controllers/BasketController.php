<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\clothes;
use App\Models\Order;

class BasketController extends Controller
{
    public function basket(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        return view('basket');
        // , [
        //     'order' => $order
        // ]);
    }
    // public function addToCart($productId)
    // {
    //     $orderId = session('orderId');
    //     if(is_null($orderId)){
    //         $order = Order::create()->id;
    //         session(['orderId'=> $order]);
    //     }else{
    //         $order = Order::find($orderId);
    //     }
        
    //     $order->clothes()->attach($productId); 
    // }
    public function addToCart(Request $request){
        if(!isset($_COOKIE['cart_id'])){
            setcookie('cart_id', uniqid());
        }
        $cart_id = $_COOKIE['cart_id'];
        $product = clothes::where('id', $request->id)->first();
        \Cart::session($cart_id)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => (int)$request->qty,
            'attributes' => array(
                'img'=>$product->img_path
            ),
            'associatedModel' => $product
        ));
        return response()->json(\Cart::getContent());
    }
}
