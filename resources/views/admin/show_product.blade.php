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
        <span class="breadcrumb-item active">Product List</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	  <div class="row">
	  <div class="col-md-9">
	   <h5>Product List</h5>
	   </div>
	   <div class="col-md-3">
	    <form class="form-inline" action="" method="get"  >

  <div class="form-group mx-sm-4 mb-2">
    <input type="text" name="search" class="form-control" placeholder="Search Product Name" required>
  </div>
 
</form>
	   </div>
	   </div>
	   </div>
          
		  
		
      
	    <div class="card pd-20 pd-sm-40">
	    <div class="table-wrapper">
            <table id="datatable1" class="table table-striped">
              <thead>
                <tr>
                   <th >Product Code</th>
                 <th>Product Name</th>
                 <th>Image</th>
                 <th>Catagory</th>
                 <th>Quantity</th>
                 <th>Status</th>
                 <th>Action</th>
                </tr>
              </thead>
			 @foreach($product as $data)
			  <tbody>
			   
			  <tr>
			  <td>{{$data->product_code}}</td>
			  <td>{{$data->product_name}}</td>
			  <td><img src="{{$data->image_1}}" width="50px" height="50px" ></td>
			   <td>{{$data->Cat_name}}</td>
			   <td>{{$data->product_qty}}</td>
			   <td>
			   @if($data->status == 1)
				   <span class="badge badge-success">Active</span>
			   
			   
			   @else
				  <span class="badge badge-danger">unactive</span>

			   
			   @endif
			   
			   
			   </td>
                <td>
		<a href="edit/product/{{$data->id}}"><i class="fa fa-edit" style="font-size:25px; "></i></a>
		<a href="view/product/{{$data->id}}"><i class="fa fa-eye" style="font-size:25px; "></i></a>
	
         @if($data->status==1)
	<a href="inactive/product/{{$data->id}}"><i class="fa fa-arrow-down" style="font-size:25px; "></i></a>
 
		 @else
		<a href="active/product/{{$data->id}}"><i class="fa fa-arrow-up" style="font-size:25px; "></i></a>

		 @endif

        
		<a href="product/delete/{{$data->id}}"><i class="fa fa-trash" style="font-size:25px; color:red;"></i></a>

				
				</td>
			  
			  
			  </tr>
			  @endforeach
			  
			  
			  
			  </tbody>
			  </table>
			   {{$product->links()}}

			  
	  
	   
	   </div>
	   </div>
	  
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	     @include('admin.page.footer')
