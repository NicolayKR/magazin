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
        }else{
            $order = null;
        }
        return view('basket', [
            'order' => $order
        ]);
    }
    public function addToCart($productId, Request $request)
    {
        $flag = false;
        $orderId = session('orderId');
        if(is_null($orderId)){
            $order = Order::create();
            session(['orderId'=> $order->id]);
        }else{
            $order = Order::find($orderId);
        }
        if($order->clothes->contains($productId)){
            $pivotRow = $order->clothes()->where('clothes_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
            return redirect()->route('basket');
        }else{
            $order->clothes()->attach($productId); 
            $pivotRow = $order->clothes()->where('clothes_id', $productId)->first()->pivot;
            if($request->quant){
                $pivotRow->count = $request->quant;
            }
            else{
                $pivotRow->count = 1;
            }
            $pivotRow->update();
            return redirect()->route('basket');
        }
    }
    public function removeToCart($productId){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        if($order->clothes->contains($productId)){
            $pivotRow = $order->clothes()->where('clothes_id', $productId)->first()->pivot;
            if($pivotRow->count < 2){
                $order->clothes()->detach($productId); 
            }else{
                $pivotRow->count--;
                $pivotRow->update();
            }
        }else{
            $order->clothes()->detach($productId); 
        }
        return redirect()->route('basket');
    }
    public function removeAllCart($productId){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        $order->clothes()->detach($productId); 
        return redirect()->route('basket');
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
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->fullname_invoice,$request->street_invoice,$request->emailaddress_invoice,$request->city_invoice, $request->phonenumber_invoice, $request->zip_invoice);
        return view('payment');
    }
    public function GetPreview(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }else{
            $order = null;
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
            $order = null;
        }
        $success = $order->getStatus();
        session()->forget('orderId');
        if($success){
            session()->flash('success', 'Ваш заказ принят в обработку');
        }else{
            session()->flash('warning', 'Произошла ошибка');
        }
        return redirect()->route('index');
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
