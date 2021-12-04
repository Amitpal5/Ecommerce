<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Coupon;

use Illuminate\Http\Request;

class CouponController extends Controller
{
   
   
   public function coupon(){
	   
	   $coupon=Coupon::paginate(5);
	   return view('admin.coupon',compact('coupon'));
	   
	   
   }
   
   
   
   
   public function addCoupon(Request $request){
	   
	   $validate=$request->validate([
	   
	   
	   'Coupon_Name' => 'required|unique:coupons',
	   'Coupon_Discount' => 'required',
	   
	   
	   
	   ]);
	   
	   
	   $coupon=new Coupon();
	   $coupon->Coupon_Name	=$request->Coupon_Name;
	   $coupon->Coupon_Discount	=$request->Coupon_Discount;
	   
	   $coupon->save();
	   	  return redirect()->route('admin.coupon')->with('message','Coupon added Successfully');

	   
	   
   }
   
   public function update_coupon(Request $request){
   
      $coupon_update=Coupon::find($request->id);
       $coupon_update->Coupon_Name=$request->Coupon_Name;
	   $coupon_update->Coupon_Discount=$request->Coupon_Discount;
	   
	   $coupon_update->save();
	   	  return redirect()->route('admin.coupon')->with('message','Coupon Update Successfully');
   
   
}



public function coupon_delete($Coupon_id){
	
	$coupon_delete=Coupon::find($Coupon_id);
	$coupon_delete->delete();
 return redirect()->route('admin.coupon')->with('error','Coupon Delete Successfully');

	
}







}
