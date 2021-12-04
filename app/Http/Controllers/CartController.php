<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Cart;
use Auth;
use Session;
use App\Models\orders;
use App\Models\order_details;


use Illuminate\Http\Request;

class CartController extends Controller
{
   Public function addcart($id){
	   
	   $product=DB::table('products')->where('id',$id)->first();
	   
	   
	   $data =array();
	   if($product->discount_price == NULL){
	   $data['id'] =$product->id;
	   $data['name'] =$product->product_name;
	   $data['qty'] =1;
	   $data['price'] =$product->price;
	   $data['weight'] =1;
	   $data['option']['image'] =$product->image_1;
	   
	   
	   Cart::add($data);
	   
	   $items=Cart::count();
	   $amount=Cart::subtotal();
	   
	   return \Response::json(['status'=>true,'item'=>$items,'amounts'=>$amount,'msg' => 'Successfully added to cart']);
	   
   }
   
   else{
	   
	    $data['id'] =$product->id;
	   $data['name'] =$product->product_name;
	   $data['qty'] =1;
	   $data['price'] =$product->discount_price;
	   $data['weight'] =1;
	   $data['options']['image'] =$product->image_1;
	   
	    Cart::add($data);
	    $items=Cart::count();
	   $amount=Cart::subtotal();
	   return \Response::json(['status'=>true,'item'=>$items,'amounts'=>$amount,'msg' => 'Successfully added to cart']);
	   
	   
	   
   }
   
}

public function show_cart(){
	
	
	$cart=Cart::content();

	if(request()->ajax()){

		return view('Frontend.cart.cart_data', compact('cart'));
	}
	
	return view('Frontend.cart',compact('cart'));
	
}


public function delete_cart($rowId){
	
	
	Cart::remove($rowId);
	return back()->with('Success','Successfully Cart Data Remove');
	
}




public function CartIncrement(Request $request){
	
	
	
	$rowId=$request->product_id;
	$qty=$request->qty;
	Cart::update($rowId,$qty);
			return back()->with('update','Successfully Cart Data Update');

	
}


public function checkout(){
	
	if(Auth::check()){
		
		$cart=Cart::content();
        return view('Frontend.user_checkout',compact('cart'));
		
	}
	
	else{
		
		return redirect('/login')->with('error','At First Login your Account');
		


		
		
	}
	
	
}

public function coupon(Request $request){


$code=$request->coupon_code;

$coupon=DB::table('coupons')->where('Coupon_Name',$code)->first();
if($coupon){
	
	
	Session::put('coupon',[
			'Coupon_name' => $coupon->Coupon_Name,
			'Discount' => $coupon->Coupon_Discount,
			
			
			]);
			return back()->with('success','Succefully Coupon Added ');
	
}
else{
	
	return back()->with('invaild','Sorry, this Coupon is not valid. Please check for any typing errors. ');

	
}




}



public function order(Request $request){
	
	
	 $orders =array();
	 $orders['User_id'] = Auth::user()->id;
	 $orders['Payment_method'] = $request->cash_one;
	 $order_id=rand(1111,9999);
	$orders['order_id'] =$order_id;
	 $orders['shipping_charge'] =$request->shipping_charge;
	 
	 
	 if(Session::has('coupon')){
		 
		 $orders['sub_total'] = $request->total;
	 }
	 
	 else{
		 
		$orders['sub_total'] =Cart::subtotal(); 
		 
	 }
	 
	 $orders['month'] = date('m');
	 $orders['date'] = date('d');
	 $orders['year'] = date('Y');
	 
	 DB::table('orders')->insert($orders);
	 
	 //shipping
	
	$ship =array();
	$ship['order_id']=$order_id;
	$ship['Frist_Name']=$request->fname;
	$ship['Last_Name']=$request->lname;
	$ship['Address']=$request->address;
	$ship['Town']=$request->town;
	$ship['District']=$request->district;
	$ship['Zip']=$request->zip;
	$ship['Phone']=$request->phone;
	$ship['Email']=$request->email;
	$ship['addition']=$request->addtional;
	
     DB::table('shippings')->insert($ship);
	
   $cart=Cart::content();
   $details=array();
   foreach($cart as $row){
	   
	   $details['order_id']=$order_id;
	   $details['product_id']=$row->id;
	   $details['product_Name']=$row->name;
	  $details['Qty']=$row->qty;
	   $details['Single_Price']=$row->price;
	   $details['Totla_price']=$row->qty * $row->price;
	  
	     DB::table('order_details')->insert($details);
	   
	   
   }
	
	Cart::destroy();
	Session::forget('coupon');
	
	
	
			return redirect('/sucess')->with('Success','Order are Placed Succesfully');


}


  public function order_completed(){
	   
	   if(Auth::check())
		{
		  


         $order=orders::where('User_id',Auth::user()->id)->latest('id')->first();
		 $id=$order->order_id;
		 $order_detail=order_details::where('order_id',$id)->get();
		  
		   
		 return view('Frontend.user_sucess',compact('order','order_detail'));  
	   }
	   
	   else{
		   
		   return view('Frontend.master');
		   
	   }
	   
   }
   


public function fetchcart(){
	
	$cart=Cart::content();
	return response()->json([
	 
	 'carts' =>$cart,
	 
	]);
	
	
	
}






}