<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
use App\Models\FoodChef;

class HomeController extends Controller
{
   public function index(){
    $data = Food::all();
    $chef = FoodChef::all();
    return view('home',compact('data','chef'));
   }

   public function redirects(){
    $usertype=Auth::user()->usertype;

 if($usertype=='1'){
        return view('admin.adminhome');
    }else{
        $userId = Auth::id();
        $cart = Cart::where('userId',$userId)->get();
        $count = Cart::where('userId',$userId)->count();
        $data = Food::all();  
    $chef = FoodChef::all();
        return view ('home',compact('data','chef','count','cart'));
    }
   }

   public function addcart(Request $request ,$id){
    if(Auth::id()){
        $userId = Auth::id();
        $foodId = $id;
        $present = Cart::where('foodid',$foodId)->get();
        $quantity = $request->quantity;

if($present == null){

        $cart = new cart;
        $cart->userId = $userId;
        $cart->foodId = $foodId;
        $cart->quantity = $quantity;
        $cart->save();
}else{
   $present[0]->quantity = $present[0]->quantity + $request->quantity;
   $present[0]->save();
}

        return redirect()->back();
    }else{
        return redirect('/login');
    }
   }

   public function showcart(Request $request ,$id){
    $count = Cart::where('userId',$id)->count();
    $cart = Cart::where('userId',$id)->with('getFood')->get();
    return view('showcart',compact('count','cart'));
   }

   public function deletecart($id){
    $data = Cart::find($id);
    $data->delete();
    return redirect()->back()->with('message','Item Removed Successfully');
   }

   public function checkout(){
    return view('order');
   }

   public function order(Request $request){
$cart = Cart::with('getFood')->get();
// dd($cart[0]->getFood[0]->title);

$validate = $request->validate([
    'name'=>'required',
    'address'=>'required',
    'phone' => 'required|digits:10|numeric',
    'city'=>'required'

]);

 foreach($cart as $cart){
    $order = new Order;
    $order->name = $request->name;
    $order->mobile = $request->phone;
    $order->city = $request->city;
    $order->address = $request->address;

    $order->productName = $cart->getFood[0]->title;
    $order->productPrice = $cart->getFood[0]->price;
    $order->productQuantity = $cart->quantity;
    $order->productImage= $cart->getFood[0]->image;
    $order->save();

    $userId = Auth::id();
    $cart = Cart::where('userId',$userId)->delete();

    return redirect()->back()->with('message','order placed successfully');
 }
   }

  
}
