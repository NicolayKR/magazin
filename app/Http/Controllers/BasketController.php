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
        return $order;
    }
    public function modalBasket(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }else{
            $order = null;
        }
        return $order->clothes;
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
    public function removeToCart(Request $request){
        $id = $request->query('item');
        $orderId = session('orderId');
        $order = Order::find($orderId);
        if($order->clothes->contains($productId)){
            $pivotRow = $order->clothes()->where('clothes_id', $id)->first()->pivot;
            if($pivotRow->count < 2){
                $order->clothes()->detach($id); 
            }else{
                $pivotRow->count--;
                $pivotRow->update();
            }
        }else{
            $order->clothes()->detach($id); 
        }
    }
    public function removeAllCart(Request $request){
        $id = $request->query('item');
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        $order->clothes()->detach($id); 
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
        return view('payment',[
            'order' => $order
        ]);
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
