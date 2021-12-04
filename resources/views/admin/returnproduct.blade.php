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
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
        <span class="breadcrumb-item active">Return Order</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	  <div class="row">
	  <div class="col-md-9">
	   <h5>Return Order List</h5>
	   </div>
	  
	   </div>
	   </div>
          
		  
		
      
	    <div class="card pd-20 pd-sm-40">
	    <div class="table-wrapper">
            <table id="datatable1" class="table table-striped">
              <thead>
                <tr>
                   <th class="col-md-2">Payment Method</th>
                 <th class="col-md-1">Sub Total</th>
                 <th class="col-md-1">Shipping</th>
                 <th class="col-md-2">Total</th>
                 <th class="col-md-2">Date</th>
                 <th class="col-md-2">Status</th>
                 <th class="col-md-2">Action</th>
                </tr>
              </thead>
			  @foreach($return as $value)
			   <tbody>
			  

			  <td>{{$value->Payment_method}}</td>
			  <td>{{$value->sub_total}}</td>
			  <td>{{$value->shipping_charge	}}</td>
			  <td>{{(int)$value->sub_total + (int) $value->shipping_charge}} TK</td>
			  <td>{{$value->date}}-{{$value->month}}-{{$value->year}}</td>
			  <td>@if($value->Status	== 0)
			<span class="badge badge-warning">Pendding</span>
			@elseif($value->Status	== 1)
			<span class="badge badge-info">Accept Order</span>
			@elseif($value->Status	== 2)
			<span class="badge badge-info">Hand Over to Delivery boy</span>
			@elseif($value->Status	== 3)
			<span class="badge badge-success">Delivered</span>

			
			
			
			@else
				<span class="badge badge-danger">Cancel</span>
			@endif</td>
			  
              <td>
			  
        <a href="{{url('/lolol',$value->id)}}" class="btn btn-danger">Approve</a>
			  
			  
			  </td>
              </tbody>
			  	 @endforeach

			  </table>
 {{$return->links()}}
	  
	   
	   </div>
	   </div>
	  
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	     @include('admin.page.footer')
