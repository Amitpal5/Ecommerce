<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function todayorder(){
		
		
		$today=date('d');
		$order=orders::where('date',$today)->where('Status',0)->paginate(10);
		
		
		return view('admin.report.today_order',compact('order'));
		
	}
	
	
	 public function todaydeliveryorder(){
		
		
		$today=date('d');
		$orders=orders::where('date',$today)->where('Status',3)->paginate(10);
		
		
		return view('admin.report.today_deliveryorder',compact('orders'));
		
	}
	
	
	 public function Thismonth(){
		
		
		$month=date('m');
		$orders=orders::where('month',$month)->where('Status',3)->paginate(10);
		$total=orders::where('month',$month)->where('Status',3)->sum('sub_total');
		$shipp=orders::where('month',$month)->where('Status',3)->sum('shipping_charge');
		$sub_total=$total+$shipp;
		
		return view('admin.report.thismonth_order',compact('orders','sub_total'));
		
	}
	
	public function search(){
		
		
		return view('admin.report.search_report');
		
	}
	
	public function searchbyyear(Request $request){
		
		$year=$request->year;
		
		$orders=orders::where('year',$year)->where('Status',3)->paginate(10);
		$total=orders::where('year',$year)->where('Status',3)->sum('sub_total');
		$shipp=orders::where('year',$year)->where('Status',3)->sum('shipping_charge');
		$sub_total=$total+$shipp;
		
		return view('admin.report.search_report_year',compact('orders','sub_total'));
		
		
		
	}
	public function searchbymonth(Request $request){
		
		$month=$request->month;
		
		$orders=orders::where('month',$month)->where('Status',3)->paginate(10);
		$total=orders::where('month',$month)->where('Status',3)->sum('sub_total');
		$shipp=orders::where('month',$month)->where('Status',3)->sum('shipping_charge');
		$sub_total=$total+$shipp;
		
		return view('admin.report.search_report_month',compact('orders','sub_total'));
		
		
		
	}
	
	
	public function searchbydate(Request $request){
		
		$date=$request->date;
		$newdate=date('d',strtotime($date));
		
		
		$orders=orders::where('date',$newdate)->where('Status',3)->paginate(10);
		$total=orders::where('date',$newdate)->where('Status',3)->sum('sub_total');
		$shipp=orders::where('date',$newdate)->where('Status',3)->sum('shipping_charge');
		$sub_total=$total+$shipp;
		
		return view('admin.report.search_report_date',compact('orders','sub_total'));
		
		
		
	}
	
	
	
	
	
	
	
	
	
}
