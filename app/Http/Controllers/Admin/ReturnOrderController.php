<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;
use Illuminate\Support\Facades\DB;


class ReturnOrderController extends Controller
{
   public function return_product(){
	   
	   $return=orders::where('return_order',1)->paginate(10);
	   return view('admin.returnproduct',compact('return'));
	   
   }
   
   
   
   
   public function approve_product($id){
	   
	   
	   DB::table('orders')->where('id',$id)->update(['return_order'=>2]);
	   	     return redirect()->route('admin.return.product')->with('message','Order are Return Succesfully');

	   
	   
   }
   
   
   public function return_allorder(){
	   
	    $returns=orders::where('return_order',2)->paginate(10);
	   return view('admin.returnallproduct',compact('returns'));
	   
	   
   }
   
   
   
   
}
