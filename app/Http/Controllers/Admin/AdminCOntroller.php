<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminCOntroller extends Controller
{
    public function index(){
		
		
		
		return view('admin.master');
		
		
		
		
		
	}
	
	public function redirect(){
		
		$user=Auth::user()->utype;
		if($user=='1'){
			return view('admin.master');
		}
		else{
						return view('Frontend.master');

			
		}
		
	}
	
	
	
	public function site(){
		
		
	$data=site::first();
	return view('admin.siteshow',compact('data'));
	
		
		
	}
	 public function update_sitedata(Request $request){
		 
		 
		 $site_update=site::find($request->id);
		 $site_update->site_title=$request->title;
		 $site_update->hotline=$request->hotline;
		 $site_update->address=$request->address;
		 $site_update->email=$request->email;
		 $site_update->facebook_id=$request->facebook;
		 $site_update->gmail_id=$request->gmail;
		 $site_update->save();
		return redirect()->route('admin.setup.site')->with('message','Site Data Update');

          		 
		 
		 
		 
		 
		 
	 }
	
	
	
	
	
	
	
	
	
	
	
}
