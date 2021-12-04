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
        <span class="breadcrumb-item active">Brand</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	  <div class="row">
	  <div class="col-md-9">
	   <h5>Brand List</h5>
	   </div>
	   <div class="col-md-3">
	    <a  class="btn btn-primary" data-toggle="modal" data-target="#cata">Add New</a>
		 <div id="cata" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add a Brand</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
			  <form action="{{route('add.brand')}}" method="post" enctype='multipart/form-data'>
              <div class="modal-body pd-10">
			  @csrf
			  
			  
			 <div class="from-group ">
		 <label for="">Brand Name:</label>
			 <input type="text" name="Brand_name" class="form-control" />

				
				@error('Brand_name')
            <strong class="text-danger">{{$message}}</strong>
                   @enderror
					  </div>
					    
			 <div class="from-group ">
		 <label for="">Brand Logo:</label>
			 <input type="file" name="Brand_logo" class="form-control" />

				
				@error('Brand_logo')
            <strong class="text-danger">{{$message}}</strong>
                   @enderror
					  </div>
					  
										 
			
			  
			  
			  
			  
			  
			  
              </div><!-- modal-body -->
              <div class="modal-footer">
               <input type="submit" class="btn btn-primary" value="ADD" />
				</form>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->
	   </div>
	   </div>
	   </div>
          
		  
		
      
	    <div class="card pd-20 pd-sm-40">
	    <div class="table-wrapper">
            <table id="datatable1" class="table table-striped">
              <thead>
                <tr>
                   <th class="col-md-2">Sl No.</th>
                 <th class="col-md-4">Brand Name</th>
                 <th class="col-md-4">Brand logo</th>
                 <th class="col-md-2">Action</th>
                </tr>
              </thead>
			  @foreach($brand as $value)
			   <tbody>
			   <td>{{$brand->firstItem()+$loop->index}}</td>

			  <td>{{$value->Brand_name}}</td>
			   <td><img src="{{('Image/').$value->Brand_logo}}" style="height:70px; width:70px;"></td>
              <td>
			  
			  	<a href="brand/delete/{{$value->id}}"><i class="fa fa-trash" style="font-size:25px; color:red;"></i></a>

			  
			  
			  </td>
              </tbody>
			  	 @endforeach

			  </table>
 {{$brand->links()}}
	  
	   
	   </div>
	   </div>
	  
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	     @include('admin.page.footer')
