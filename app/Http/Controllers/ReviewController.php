<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\review;


use Illuminate\Http\Request;

class ReviewController extends Controller
{
   public function reviewandrating(Request $request){
	   
	   $user_id=Auth::id();
	   $pro_id=$request->pro_id;
	   $name=$request->name;
	   $email=$request->email;
	   $rating=$request->rating;
	   $review=$request->message;
	   
	   $reviews= new review();
	   $reviews->user_id=$user_id;
	   $reviews->product_id=$pro_id;
	   $reviews->email=$email;
	   $reviews->name=$name;
	   $reviews->review=$review;
	   $reviews->rating=$rating;
	   $reviews->status	=0;
	   
	   $reviews->save();
	   return back()->with('Success','Thank You for Giving review');

	   
	   
   }
}
