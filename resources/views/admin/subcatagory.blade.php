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
        <span class="breadcrumb-item active">Sub Catagory</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	  <div class="row">
	  <div class="col-md-9">
	   <h5>Sub Catagory List</h5>
	   </div>
	   <div class="col-md-3">
	    <a  class="btn btn-primary" data-toggle="modal" data-target="#cata">Add New</a>
		 <div id="cata" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add a Sub Catagory</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
			  <form action="{{route('add.subcatagory')}}" method="post">
              <div class="modal-body pd-10">
			  @csrf
			  
			  
			 <div class="from-group ">
		 <label for="">Catagory Name:</label>
		 <select name="cata_name" class="form-control @error('cat_name') is-invalid @enderror">
			<option value="">Select Catagory Name</option>
			@foreach($cata as $data)
			<option value="{{$data->id}}">{{$data->Cat_name}}</option>
				 @endforeach
				</select>
				@error('cata_name')
            <strong class="text-danger">{{$message}}</strong>
                   @enderror
					  </div>
										 
			  <div class="form-group mt-2">
			  
			  <label for="">Sub Catagory Name</label>
			  <input type="text" name="SubCatagory_name" class="form-control" />
			  @error('SubCatagory_name')
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
                 <th class="col-md-4">Catagory Name</th>
                 <th class="col-md-4">Sub Catagory Name</th>
                 <th class="col-md-2">Action</th>
                </tr>
              </thead>
			   <tbody>
			   @php($i=1)
			   @foreach($sub as $value)
                <tr>
                  <td>{{$sub->firstItem()+$loop->index}}</td>
                 <td>{{$value->Cat_name}}</td>
                 <td>{{$value->SubCatagory_name}}</td>
				 <td>
		<a  data-toggle="modal" data-target="#subedit{{$value->id}}"><i class="fa fa-edit" style="font-size:25px;"></i></a>
		<div id="subedit{{$value->id}}" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update Sub Catagory</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
			  <form action="{{route('update.subcatagory')}}" method="post">
              <div class="modal-body pd-10">
			  @csrf
			  <input type="hidden" name="id" value="{{$value->id}}" />
			  
			  <div class="form-group">
    <label for="exampleInputEmail1">Previews Catagory Name</label>
    <input type="text" name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Cat_name}}">
 @error('Cat_name')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror


 </div>
   <div class="from-group mt-2">
	 <label for="">Catagory Name:</label>
		 <select name="cata_name" class="form-control">
		 <option value="">Select Catagory Name</option>
			@foreach($cata as $data)
			 <option value="{{$data->id}}">{{$data->Cat_name}}</option>
			 @endforeach
				 </select>
										 
				 </div>
 
   <div class="form-group">
    <label for="exampleInputEmail1">Sub Catagory Name</label>
    <input type="text" name="SubCatagory_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$value->SubCatagory_name}}">
 @error('SubCatagory_name')
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
 
	<a href="subdelete/{{$value->id}}"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
				 
				 </td>
                </tr>
                
               @endforeach
              </tbody>
			  </table>
	   {{$sub->links()}}

	  
	   
	   </div>
	   </div>
	  
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	     @include('admin.page.footer')
