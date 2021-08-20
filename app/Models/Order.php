<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\clothes;
class Order extends Model
{
    protected $fillable = [
        'email','telephone','street','city','street','zip', 'name','size'
    ];
    public function clothes(){
        return $this->belongsToMany(clothes::class)->withPivot('count','size')->withTimestamps();
    }
    public function getFullPrice(){
        $sum = 0;
        foreach($this->clothes as $product){
            $sum = $sum+ ((double)$product->price*(double)$product->pivot->count);
        }
        return $sum;
    }
    public function saveOrder($name, $street, $email, $city, $phone, $zip){
        if($this->status == 0 ){
            $this->status = 1;
            $this->name = $name;
            $this->street = $street;
            $this->email = $email;
            $this->city = $city;
            $this->telephone = $phone;
            $this->zip = $zip;
            $this->save();
            return true;
        }else{
            return false;
        }
    }
    public function getStatus(){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        if($order->status == 1){
            return true;
        }else{
            return false;
        }
    }
}
