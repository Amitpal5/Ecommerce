<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\SubCatagory;

use Illuminate\Support\Facades\DB;




use Illuminate\Http\Request;

class SubcatagoryController extends Controller
{
	
	public function subcatagory(){
	  
	  
	  $cata=Catagory::get();
	  $sub=DB::table('sub_catagories')->join('catagories','sub_catagories.Catagory_id', '=' , 'catagories.id')
	  ->select('sub_catagories.*','catagories.Cat_name')->paginate(10);
	  
	  return view('admin.subcatagory',compact('sub','cata'));
	  
	  
  }

	
	public function addsubcatagory(Request $request){
		
		$validate=$request->validate([
		
		
		'cata_name' => 'required',
		'SubCatagory_name' => 'required|unique:sub_catagories',
		
		
		
		
		]);
		
		
		
		$subcatagory=new SubCatagory();
		$subcatagory->Catagory_id =$request->cata_name;
		$subcatagory->SubCatagory_name =$request->SubCatagory_name;
		$subcatagory->save();
		return redirect()->route('admin.subcatagory')->with('message','Sub Catagory added Successfully');

		
	
		
	}
	
	
	public function sub_delete($subcat_id){
		$sub_cata=SubCatagory::find($subcat_id);
		
		$sub_cata->delete();
		return redirect()->route('admin.subcatagory')->with('error','Sub Catagory Delete Successfully');

		
	}
	
	
	public function update_subcatagory(Request $request){
		
		
		$sub_update=SubCatagory::find($request->id);
		$sub_update->Catagory_id =$request->cata_name;
		$sub_update->SubCatagory_name =$request->SubCatagory_name;
		$sub_update->save();
		return redirect()->route('admin.subcatagory')->with('message','Sub Catagory added Successfully');
		
		
		
	}
	
	
	
	
	
	
	
	
	
}
