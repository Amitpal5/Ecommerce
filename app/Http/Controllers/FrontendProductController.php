<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Cart;


use Illuminate\Http\Request;

class FrontendProductController extends Controller
{
    public function index($pro_id){
		
		$product=product::where('products.id',$pro_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->first();
		$product_sub=product::where('products.id',$pro_id)->join('sub_catagories','products.subcatagory_id','sub_catagories.id')->get();
		$productview=product::where('products.id',$pro_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->join('sub_catagories','products.subcatagory_id','sub_catagories.id')
					->join('brands','products.brand_id','brands.id')
				  ->select('products.*','catagories.Cat_name','brands.Brand_name','sub_catagories.SubCatagory_name')
				  ->get();
			$productss=product::where('products.id',$pro_id)->first();	  
		$cata_id=$product->catgory_id;
        $related_product=product::where('catgory_id',$cata_id)->limit(4)->get();	
		return view('Frontend.singleproduct',compact('product','product_sub','productview','related_product','productss'));
		
		
	}
	
	
	public function subcatagory_wise($sub_id){
		
		
		$sub=product::where('subcatagory_id',$sub_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->join('sub_catagories','products.subcatagory_id','sub_catagories.id')
					
				  ->select('products.*','catagories.Cat_name','sub_catagories.SubCatagory_name')
				  ->paginate(10);
		
		
		$catagory=DB::table('catagories')->get();
		$name=DB::table('sub_catagories')->where('id',$sub_id)->get();
				

		
		return view('Frontend.sub_catagorywish',compact('sub','catagory','name'));
		
		
		
		
		
	}
	public function catagory_wise($catpro_id){
		
		
		$cata=product::where('catgory_id',$catpro_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->select('products.*','catagories.Cat_name')
				  ->paginate(10);
		$name=product::where('catgory_id',$catpro_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->select('products.*','catagories.Cat_name')->first();
		
		
		$catagory=DB::table('catagories')->get();
		
		$sub=DB::table('sub_catagories')->limit(5)->get();
		return view('Frontend.cat_catagorywish',compact('cata','name','catagory','sub'));
		
		
		
		
		
	}
	
	
	public function addtocart(Request $request,$id){
		
		
		  $product=DB::table('products')->where('id',$id)->first();
	   
	   
	   $data =array();
	   if($product->discount_price == NULL){
	   $data['id'] =$product->id;
	   $data['name'] =$product->product_name;
	   $data['qty'] =$request->qty;
	   $data['price'] =$product->price;
	   $data['weight'] =1;
	   $data['option']['image'] =$product->image_1;
	   
	   
	   Cart::add($data);
	   
	  		return back()->with('Success','Successfully Cart Data Remove');

   }
   
   else{
	   
	    $data['id'] =$product->id;
	   $data['name'] =$product->product_name;
	   $data['qty'] =$request->qty;
	   $data['price'] =$product->discount_price;
	   $data['weight'] =1;
	   $data['options']['image'] =$product->image_1;
	   
	    Cart::add($data);
	 	  		return back()->with('Success','Successfully Cart Data Remove');


	   
	   
	   
   }
		
	
	}
	
	
	 public function shoppage(){
	   
	   $catagory=DB::table('catagories')->get();
	   $cata=product::where('status',1)->paginate(12);
		$sub=DB::table('sub_catagories')->limit(5)->get();
	   return view('Frontend.shoppage',compact('catagory','cata','sub'));
	   
	   
	   
	   
   }
		
	
	
	
	
	
	
	
	
	
}
