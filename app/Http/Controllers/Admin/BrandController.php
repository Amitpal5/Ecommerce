<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\product;
use App\Models\Catagory;

use Illuminate\Http\Request;

class BrandController extends Controller
{
  public function brand(){
	  
	  $brand=Brand::paginate(10);
	  
	  return view('admin.Brand',compact('brand'));
	  
	  
	  
	  
	  
  }
  
  
  public function add_brand(Request $request){
	  
	 $validate=$request->validate([
	 
	 
	 'Brand_name' => 'required|unique:brands',
	 'Brand_logo' => 'required',
	 
	 
	 
	 
	 ]); 
	  
	  
	  
	  $brand=new Brand();
	  $brand->Brand_name=$request->Brand_name;
	  if($request->hasfile('Brand_logo')){
			  $imgName=$request->file('Brand_logo');
		$extension=$imgName->getClientOriginalExtension();
		$imageName = time().'.'.$extension;  
		$imgName->move('Image/',$imageName);
			  $brand->Brand_logo=$imageName;
		  }
	  
	  
	  $brand->save();
	  
	  
	     return redirect()->route('admin.brand')->with('message','Brand added Successfully');

	  
	  
	  
	  
  }
  
  
  
  public function brand_delete($brand_id){
	  
	  $branddelete=Brand::find($brand_id);
	  
	  $branddelete->delete();
	  
	  	     return redirect()->route('admin.brand')->with('error','Brand Delete Successfully');

	  
	  
	  
	  
  }
  
  public function showbrand(){
	  
	  
	  $brand_show=Brand::get();
	  return view('Frontend.show_brand',compact('brand_show'));
	  
	  
	  
	  
	  
  }
  
  public function brand_wise($id){
	  
	  
	  $brandproduct=product::where('brand_id',$id)->join('brands','products.brand_id','brands.id' )
		           
					
				  ->select('products.*','brands.Brand_name',)
				  ->paginate(10);
				  
				 $catagory =Catagory::get();
				 $name=Brand::where('id',$id)->first();
				  $brandproducts=product::where('brand_id',$id)->join('brands','products.brand_id','brands.id' )
		           
					
				  ->select('products.*','brands.Brand_name',)
				  ->first();
				  return view('Frontend.Brandwise',compact('brandproduct','catagory','name','brandproducts'));
		
	  
	  
  }
  
}
