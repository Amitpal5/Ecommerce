<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Product;
use App\Models\orders;
use App\Models\order_details;
use App\Models\site;
use App\Models\contact;
use Illuminate\Support\Facades\DB;



use App\Models\Brand;

class FrontendController extends Controller
{
    public function index(){
		
		$brand=Brand::get();
		return view('Frontend.master',compact('brand'));
		
	}
	
	
	
	public function dashboard(){
		
		if(Auth::id()){
			 $order=orders::where('User_id',Auth::user()->id)->get();
			 $ordes=orders::where('User_id',Auth::user()->id)->get();
			return view('Frontend.user_dashboard',compact('order','ordes'));	
		
		}
       else{
		   
		   return view('auth.login');
		   
	   }		
		
		
	}
	
	public function orderdetails($id){
		
			if(Auth::id()){
			 $orderdet=order_details::where('order_id',$id)->get();
			return view('Frontend.userorder_details',compact('orderdet'));	
		
		}
       else{
		   
		   return view('auth.login');
		   
	   }		
		
		
		
		
	}
	
	public function ordertracking(){
		
		return view('Frontend.user_tracking');
		
		
	}
	
	
	
	public function orderchecking(Request $request){
		
		$code=$request->order_id;
		
		$order=orders::where('order_id',$code)->first();
		if($order){
			
			return view('Frontend.usertracking_view',compact('order'));
		}
		else{
			
		return back()->with('Success','Order Id Not Match');

		}
		
	}
	
	
public function searchautocomplete(Request $request){
	 $search = $request->search;
	  $datas = product::where('product_name', 'LIKE',"%$search%")->paginate(12);
			$catagory=DB::table('catagories')->get();
		
	return view('Frontend.searchpage',compact('datas','catagory'));
	
	
}



public function update_password(Request $request){
	
	
	$password=Auth::user()->password;
	$old=$request->old;
	$new=$request->new_password;
	$confirm=$request->confirm;
	
	
	if(Hash::check($old,$password)){
		
		if($new==$confirm){
			
			$user=User::find(Auth::id());
			$user->password=Hash::make($request->new_password);
			$user->save();
			Auth::logout();
			
			return redirect('/login')->with('message','Succesfully Password are Change');
		}
		else{
					return back()->with('error','Password and Confirm not matched');

			
			
		}
	
	}
	
		else{
				return back()->with('Error','Old Password are not matched');

			
			
		}
	
	
}



      public function returnproduct($id){
	
	
       	$orders=orders::where('id',$id)->update(['return_order' =>1]);
		 return back()->with('error','Order Request Done');

	
	
	
}

public function requestreturn(){
	
	
	$order=orders::where('return_order',1)->paginate(10);
	return view('admin.request_order',compact('order'));
	
}

public function contact(){
	
	
	$data=site::first();
	return view('Frontend.contact',compact('data'));
	
}

public function addcontactdata(Request $request){
	
	
	$contact = new contact();
	$contact->name=$request->name;
	$contact->email=$request->email;
	$contact->subject=$request->subject;
	$contact->message=$request->message;
	
	$contact->save();
	 return back()->with('error','Thanking for your message,You will contact you very soon');

	
}

public function admincontact(){
	
	$contact=contact::paginate(10);
	return view('admin.contactpage',compact('contact'));
	
	
}










}





