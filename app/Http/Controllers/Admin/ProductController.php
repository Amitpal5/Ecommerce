<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Catagory;
use App\Models\SubCatagory;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Image;


use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
	   
	   
	   $cata=Catagory::get();
	   $brand=Brand::get();
	   
	   
	   return view('admin.product',compact('cata','brand'));
	   
   }
   
   public function getsub($catgory_id){
	   
	   $cata=DB::table('sub_catagories')->where('Catagory_id',$catgory_id)->get();
	   return json_encode($cata);
	   
	   
   }
   
   public function store(Request $request){
	   
	   $product=new Product();
	   $product->product_name=$request->product_name;
	   $product->product_code=$request->product_code;
	   $product->product_qty=$request->product_qty;
	   $product->catgory_id=$request->catgory_id;
	   $product->subcatagory_id=$request->subcategory_id;
	   $product->brand_id=$request->brand_id;
	   $product->product_size=$request->product_size;
	   $product->price=$request->price;
	   $product->discount_price=$request->discount_price;
	   $product->product_details=$request->product_details;
	   $product->main_slider=$request->main_slider;
	   $product->hot_deal=$request->hot_deal;
	   $product->best_rated=$request->best_rated;
	   $product->mid_slider=$request->mid_slider;
	   $product->hot_new=$request->hot_new;
	   $product->trend=$request->trend;
	   $product->status=1;
	   
	   $image_one=$request->image_1;
	   $image_two=$request->image_2;
	   $image_three=$request->image_3;
	   
	   
	   if($image_one){
		 
		   $image_1_name=hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
		     $path = 'Image/' . $image_1_name;
		   Image::make($image_one)->resize(300,300)->save($path);
		   $image_1_last=$path;
		
		$product->image_1=$image_1_last;
		 
		 
		   }
		   if($image_two){
			   
			    $image_2_name=hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
		     $path = 'Image/' . $image_2_name;
		   Image::make($image_two)->resize(300,300)->save($path);
		   $image_2_last=$path;
		
		$product->image_2=$image_2_last;
			   
			   
			   
		   }
		    if($image_three){
			   
			    $image_3_name=hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
		     $path = 'Image/' . $image_3_name;
		   Image::make($image_three)->resize(300,300)->save($path);
		   $image_3_last=$path;
		
		$product->image_3=$image_3_last;
			   
			   
			   
		   }
	    
	   
	   
	   $product->save();
	   	     return redirect()->route('all.product')->with('message','Product added Successfully');

	   
	   
	   
	   
   }
   
   
   
   
   public function show_products(){
	   
	   $product=DB::table('products')->join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')
				  ->paginate(10);
	  
	  return view('admin.show_product',compact('product'));
	   
   }
   
   public function inactive_product($id){
   
   DB::table('products')->where('id',$id)->update(['status' => 0]);
 
   
   	  return redirect()->route('show.all.product')->with('message','Product Successfully Inactive');

   
   
   }
   public function active_product($id){
   
   DB::table('products')->where('id',$id)->update(['status' => 1]);
 
   
   	  return redirect()->route('show.all.product')->with('message','Product Successfully active');

   
   
   }
   
   
   public function product_delete($delete_id){
	   
	   $productdelete=product::find($delete_id);
	   $productdelete->delete();
	  return redirect()->route('show.all.product')->with('error','Product Successfully active');

	   
   }
   
   
   public function viewproduct($view_id){
	   
	    
		$products=product::where('products.id',$view_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->get();
		$product_sub=product::where('products.id',$view_id)->join('sub_catagories','products.subcatagory_id','sub_catagories.id')->get();
		$productview=product::where('products.id',$view_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->join('sub_catagories','products.subcatagory_id','sub_catagories.id')
					->join('brands','products.brand_id','brands.id')
				  ->select('products.*','catagories.Cat_name','brands.Brand_name','sub_catagories.SubCatagory_name')
				  ->get();
				  
				  
				  return view('admin.viewproductbyid',compact('products','productview','product_sub'));
   }
   
   
   
   
   
  
   public function editproduct($edit_id){
	   $product=product::where('products.id',$edit_id)->first();
	   $products=product::where('products.id',$edit_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->first();
		$product_sub=product::where('products.id',$edit_id)->join('sub_catagories','products.subcatagory_id','sub_catagories.id')->get();
		$productview=product::where('products.id',$edit_id)->join('catagories','products.catgory_id','catagories.id' )
		            ->join('sub_catagories','products.subcatagory_id','sub_catagories.id')
					->join('brands','products.brand_id','brands.id')
				  ->select('products.*','catagories.Cat_name','brands.Brand_name','sub_catagories.SubCatagory_name')
				  ->get();
	   $cata=Catagory::get();
      $brand=Brand::get();
        $sub=SubCatagory::get();
	   return view('admin.editproductby',compact('product','cata','brand','sub','products','product_sub','productview'));
	   
	   
	   
   }
   
   
   public function Updateproductwithoutphote(Request $request,$pro_id){
	   
	   $product_update=product::find($pro_id);
	   
	   
	    $product_update->product_name=$request->product_name;
	   $product_update->product_code=$request->product_code;
	   $product_update->product_qty=$request->product_qty;
	   $product_update->catgory_id=$request->catgory_id;
	   $product_update->subcatagory_id=$request->subcatagory_id;
	   $product_update->brand_id=$request->brand_id;
	   $product_update->product_size=$request->product_size;
	   $product_update->price=$request->price;
	   $product_update->discount_price=$request->discount_price;
	   $product_update->product_details=$request->product_details;
	   $product_update->main_slider=$request->main_slider;
	   $product_update->hot_deal=$request->hot_deal;
	   $product_update->best_rated=$request->best_rated;
	   $product_update->mid_slider=$request->mid_slider;
	   $product_update->hot_new=$request->hot_new;
	   $product_update->trend=$request->trend;
	   $product_update->status=1;
	   $product_update->save();
	   	 return redirect()->route('show.all.product')->with('message','Product Update Successfully');

	   
   }
   
   
   
   
   
   
}
