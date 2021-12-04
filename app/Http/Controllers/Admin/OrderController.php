<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pending_order(){
		
		$order=orders::where('Status',0)->paginate(10);
		return view('admin.order.admin_pending',compact('order'));
		
	}
	
	
	
	
	public function vieworder($id,$order_id){
		
		$orders=DB::table('orders')->join('users','orders.User_id','users.id')->
		select('orders.*','users.name','users.email')->where('orders.id',$id)->first();
		
		
		$ships=DB::table('shippings')->where('order_id',$order_id)->first();
		$orderss=DB::table('order_details')->where('order_id',$order_id)->get();
		
		
		return view('admin.order.view_orders',compact('orders','ships','orderss'));
		
	}
	
	public function accept_order($acc_id){
		
		$orders=DB::table('orders')->where('orders.id',$acc_id)->update(['Status'=>1]);
		
	return redirect()->route('admin.order')->with('message','Order Are Accept Succesfully');

		
		
		
		
	}
	public function cancel_order($cancel_id){
		
		$orders=DB::table('orders')->where('orders.id',$cancel_id)->update(['Status'=>4]);
		
	return redirect()->route('admin.order')->with('error','Order Are Cancel Succesfully');
		
		
	}
	
	public function acceptorder(){
		
		$order=orders::where('Status',1)->paginate(10);
		return view('admin.order.admin_accept_order',compact('order'));
		
	}
	
	public function viewacceptorder($id,$order_id){
		
		$orders=DB::table('orders')->join('users','orders.User_id','users.id')->
		select('orders.*','users.name','users.email')->where('orders.id',$id)->first();
		
		
		$ships=DB::table('shippings')->where('order_id',$order_id)->first();
		$orderss=DB::table('order_details')->where('order_id',$order_id)->get();
		
		
		return view('admin.order.aceept_view_order',compact('orders','ships','orderss'));
		
	}
	
	
	
	public function accept_deliveryorder($de_id){
		
		$orders=DB::table('orders')->where('orders.id',$de_id)->update(['Status'=>2]);
		
	return redirect()->route('admin.accept.order')->with('message','Hand Over to Delivery Man Succesfully');

		
		
		
		
	}
	
	
	public function deliverymanorder(){
		
		$order=orders::where('Status',2)->paginate(10);
		return view('admin.order.delivery_accept_order',compact('order'));
		
	}
	
	public function viewdeliveryacceptorder($id,$order_id){
		
		$orders=DB::table('orders')->join('users','orders.User_id','users.id')->
		select('orders.*','users.name','users.email')->where('orders.id',$id)->first();
		
		
		$ships=DB::table('shippings')->where('order_id',$order_id)->first();
		$orderss=DB::table('order_details')->where('order_id',$order_id)->get();
		
		
		return view('admin.order.delivery_man_accept',compact('orders','ships','orderss'));
		
	}
	
	
	
	public function completedorder($completed_id){
		
		$orders=DB::table('orders')->where('orders.id',$completed_id)->update(['Status'=>3]);
		
	return redirect()->route('admin.delivery.order')->with('message','Product are Deliver Succesfully');

		
		
		
		
	}
	
	public function scuccesorder(){
		
		$order=orders::where('Status',3)->paginate(10);
		return view('admin.order.succed_order',compact('order'));
		
	}
	
	
	public function viewsuccedorder($id,$order_id){
		
		$orders=DB::table('orders')->join('users','orders.User_id','users.id')->
		select('orders.*','users.name','users.email')->where('orders.id',$id)->first();
		
		
		$ships=DB::table('shippings')->where('order_id',$order_id)->first();
		$orderss=DB::table('order_details')->where('order_id',$order_id)->get();
		
		
		return view('admin.order.view_succed_order',compact('orders','ships','orderss'));
		
	}
	
	
	
	public function cancelorder(){
		
		$order=orders::where('Status',4)->paginate(10);
		return view('admin.order.cancel_order',compact('order'));
		
	}
	
	
	
	
}
