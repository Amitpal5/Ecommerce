@include('admin.page.header')

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
   @include('admin.page.sidebar')


    <!-- ########## START: HEAD PANEL ########## -->
   @include('admin.page.navbar')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">
           
		   @php
		   
		   $today=date('d');
		   
		   $today_order=DB::table('orders')->where('date',$today)->sum('sub_total');
		   $today_delivery=DB::table('orders')->where('date',$today)->sum('shipping_charge');
		   $total=$today_order+$today_delivery;
		   
		   @endphp
		   
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Orders</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{$total}} TK</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
               
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
		   @php
		   
		   $today=date('d');
		   
		   $today_sales=DB::table('orders')->where('date',$today)->where('Status',3)->sum('sub_total');
		   $today_delivery=DB::table('orders')->where('date',$today)->where('Status',3)->sum('shipping_charge');
		   $total_today=$today_sales+$today_delivery;
		   
		   @endphp
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{$total_today}} TK</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
               
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
		  
		  @php
		  
		  
		 $month=date('m');

		  
		  $Profitinsevendays = DB::table('orders')->where('month', '>=', $month)->where('Status',3)->sum('sub_total');

		 $Profitindelevery= DB::table('orders')->where('month', '>=', $month)->where('Status',3)->sum('shipping_charge');

		  $week=$Profitinsevendays +$Profitindelevery;
		  
		  
		  
		  
		  @endphp
		  
		  
		  
		  
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Monthly's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{$week}} TK</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                
				
				

              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
		  
		    @php
		  
		  
		 $year=date('Y');

		  
		  $Profitinsevendays = DB::table('orders')->where('year', '>=', $year)->where('Status',3)->sum('sub_total');

		 $Profitindelevery= DB::table('orders')->where('year', '>=', $year)->where('Status',3)->sum('shipping_charge');

		  $year=$Profitinsevendays +$Profitindelevery;
		  
		  
		  
		  
		  @endphp
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{$year}} TK</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
		  
		  
		   @php
		  
		  
		 

		  
		  $total_return = DB::table('orders')->where('return_order',2)->sum('sub_total');

		 $total_delivery= DB::table('orders')->where('return_order',2)->sum('shipping_charge');

		  $return=$total_return +$total_delivery;
		  
		  
		  
		  
		  @endphp
		  
		  
		  
		  
		  
		  
		   <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0 mt-2">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Return</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{$return}} TK</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
		  
		  @php
		  
		  $product=DB::table('products')->where('status',1)->get();
		  
		  
		  
		  @endphp
		  
		  
		  
		  
		  
		  
		  
		    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0 mt-2">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Product</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{count($product)}}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
		   @php
		  
		  $brand=DB::table('brands')->get();
		  
		  
		  
		  @endphp
		    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0 mt-2">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Brand</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{count($brand)}}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
         
      
    </div><!-- sl-mainpanel -->
    </div><!-- sl-mainpanel -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@include('admin.page.footer')
