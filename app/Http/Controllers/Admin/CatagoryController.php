<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Image;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
  public function catagory(){
	  
	  $cata=Catagory::paginate(5);
	  
	  return view('admin.catagory',compact('cata'));
	  
	  
  }
  
  public function add_catagory(Request $request){
	  
	 $validate= $request->validate([
	  
	  
	  'Cat_name' => 'required|unique:catagories',
	  
	  
	  
	  
	  ]);
	  
	  $catagory=new Catagory();
	  $catagory->Cat_name =$request->Cat_name;
	  $image=$request->cata_logo;
	  if($image){
		 
		   $image_name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
		     $path = 'Image/' . $image_name;
		   Image::make($image)->resize(300,300)->save($path);
		   $imagelast=$path;
		
		$catagory->Cata_logo=$imagelast;
		 
		 
		   }
	  $catagory->Save();
   return redirect()->route('admin.catagory')->with('message','Catagory added Successfully');

	  
	  
	  
  }
  
  
  
  public function update_catagory(Request $request){
	  
	  $cata=Catagory::find($request->id);
	  
	  $cata->Cat_name=$request->a;
	  $cata->save();
	     return redirect()->route('admin.catagory')->with('message','Catagory Updated Successfully');

	  
  }
  
  public function delete($cat_id){
	  
	  $catagory_delete=Catagory::find($cat_id);
	  
	  $catagory_delete->delete();
	  return redirect()->route('admin.catagory')->with('error','Catagory Delete Successfully');

	  
	  
  }
  
  
  
  
  
  
  
  
  
  
  
  
}
