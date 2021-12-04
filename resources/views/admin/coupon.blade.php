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
        <span class="breadcrumb-item active">Coupon</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	  <div class="row">
	  <div class="col-md-9">
	   <h5>Coupon List</h5>
	   </div>
	   <div class="col-md-3">
	    <a  class="btn btn-primary" data-toggle="modal" data-target="#cata">Add New</a>
		 <div id="cata" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add a Coupon</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
			  <form action="{{route('add.coupon')}}" method="post">
              <div class="modal-body pd-10">
			  @csrf
			  
			  
			 <div class="from-group ">
		 <label for="">Coupon Name:</label>
		<input type="text" name="Coupon_Name" class="form-control" />

				@error('Coupon_Name')
            <strong class="text-danger">{{$message}}</strong>
                   @enderror
					  </div>
										 
			  <div class="form-group mt-2">
			  
			  <label for="">Coupon Discount</label>
			  <input type="text" name="Coupon_Discount" class="form-control" />
			  @error('Coupon_Discount')
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
                 <th class="col-md-4">Coupon Name</th>
                 <th class="col-md-4">Coupon Discount</th>
                 <th class="col-md-2">Action</th>
                </tr>
              </thead>
			  @foreach($coupon as $data)
			   <tbody>
			  <td>{{$coupon->firstItem()+$loop->index}}</td>
			  <td>{{$data->Coupon_Name}}</td>
			  <td>{{$data->Coupon_Discount}}</td>
			  
			  <td>
			  
			  <a  data-toggle="modal" data-target="#subedit{{$data->id}}"><i class="fa fa-edit" style="font-size:25px;"></i></a>
		<div id="subedit{{$data->id}}" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update Coupon</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
			  <form action="{{route('update_coupon')}}" method="post">
              <div class="modal-body pd-10">
			  @csrf
			  <input type="hidden" name="id" value="{{$data->id}}" />
			  
			  <div class="form-group">
    <label for="exampleInputEmail1">Coupon Name</label>
    <input type="text" name="Coupon_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Coupon_Name}}" >
 @error('Coupon_Name')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror


 </div>
  
 
   <div class="form-group">
    <label for="exampleInputEmail1">Coupon Discount</label>
    <input type="text" name="Coupon_Discount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Coupon_Discount}}">
 @error('Coupon_Discount')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror


 </div>
					  
 
			  
			  
			  
			  
			  
			  
			  
              </div><!-- modal-body -->
              <div class="modal-footer">
               <input type="submit" class="btn btn-primary" value="UPDATE" />
				</form>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->
			  
			  
			  
   <a href="Coupon/delete/{{$data->id}}"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
			  
			  
			  </td>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
              </tbody>
			  @endforeach
			  </table>
	           {{$coupon->links()}}
	  
	   
	   </div>
	   </div>
	  
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	     @include('admin.page.footer')
