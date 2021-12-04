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
        <span class="breadcrumb-item active">View Order</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	  <div class="row">
	  <div class="col-md-9">
	  <h5>View Order Details</h5>
	   </div>
	  
	   </div>
	   </div>
          
		   <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Order Details</h6>
             
			 <table class="table">
			 <tr>
			 
			<th>Name:</th>
			 <th>{{$orders->name}}</th>
			 
		</tr>
		 <tr>
			 
			<th>Email:</th>
			 <th>{{$orders->email}}</th>
			 
		</tr>
		 <tr>
			 
			<th>Paymenr Method:</th>
			 <th>{{$orders->Payment_method}}</th>
			 
		</tr>
		 <tr>
			<th>Total:</th>
			 <th>{{(int)$orders->sub_total + (int) $orders->shipping_charge}}TK</th>
			 
		</tr>
			  <tr>
			 
			<th>Month:</th>
			 <th>{{$orders->month}}</th>
			 
		</tr>
		<tr>
			 
			<th>Date:</th>
			 <th>{{$orders->date}}-{{$orders->month}}-{{$orders->year}}</th>
			 
		</tr>
			 
			 
			 
			 
			 
			 </table>
			 
			 
			 
			 
			 
			 
			 
			 
			 
            </div><!-- card -->
          </div><!-- col-6 -->
		   <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Shipping Details</h6>
             
			 <table class="table">
			 <tr>
			 
			<th>Name:</th>
			 <th>{{$ships->Frist_Name}} {{$ships->Last_Name}} </th>
			 
		</tr>
		 <tr>
			 
			<th>Email:</th>
			 <th>{{$ships->Email}}</th>
			 
		</tr>
		 <tr>
			 
			<th>Phone:</th>
			 <th>{{$ships->Phone}}</th>
			 
		</tr>
		 <tr>
			 
			<th>Address:</th>
			 <th>{{$ships->Address}}</th>
			 
			</tr>
			 <tr>
			 
			<th>Town:</th>
			 <th>{{$ships->Town}}</th>
			 
			</tr>
			 <tr>
			 
			<th>District:</th>
			 <th>{{$ships->District}}</th>
			 
			</tr>
			 <tr>
			 
			<th>Zip:</th>
			 <th>{{$ships->Zip}}</th>
			 
			</tr> 
			 <tr>
			 
			<th>Status:</th>
			<th>
			@if($orders->Status	== 0)
			<span class="badge badge-warning">Pendding</span>
			@elseif($orders->Status	== 1)
			<span class="badge badge-info">Accept Order</span>
			@elseif($orders->Status	== 2)
			<span class="badge badge-info">Hand Over to Delivery boy</span>
			@elseif($orders->Status	== 3)
			<span class="badge badge-success">Delivered</span>

			
			
			
			@else
				<span class="badge badge-danger">Cancel</span>
			@endif
			
			
			</th>
			 
			</tr> 
			<tr>
			 
			<th>Addition:</th>
			 <th>{{$ships->addition}}</th>
			 
			</tr>
			 
			 
			 
			 
			 
			 </table>
			 
			 
			 
			 
			 
			 
			 
			 
			 
            </div><!-- card -->
          </div><!-- col-6 -->
		
      </div>
	   <div class="card pd-20 pd-sm-40 mg-t-20">
          <h6 class="card-body-title">Order Items</h6>
          <table id="datatable1" class="table table-striped">
              <thead>
                <tr>
                
                 <th>Product Name</th>
                 <th>Producr Qty</th>
                 <th>Producr Price</th>
                 <th>Total</th>
                
                
                </tr>
              </thead>
			 @foreach($orderss as $data)
			  <tbody>
			   
			  <tr>
			
			  <td>{{$data->product_Name}}</td>
			<td>{{$data->Qty}}</td>
			   <td>{{$data->Single_Price}}TK</td>
			   <td>{{$data->Totla_price}}TK</td>
			 
               
        

				
				
			  
			  
			  </tr>
			  @endforeach
			  
			  
			  
			  </tbody>
			  </table>
        </div><!-- card -->
		
		<a href="/delivery/accept/{{$orders->id}}" class="btn btn-success btn-block mt-2">Hand Over Delivery Man</a>
		<a href="/cancel/{{$orders->id}}" class="btn btn-danger btn-block">Cancel Order</a>
		
		
		
		
		
	  </div>
	     @include('admin.page.footer')
