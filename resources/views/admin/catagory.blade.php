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
        <span class="breadcrumb-item active">Catagory</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	  <div class="row">
	  <div class="col-md-9">
	   <h5>Catagory List</h5>
	   </div>
	   <div class="col-md-3">
	    <a  class="btn btn-primary" data-toggle="modal" data-target="#cata">Add New</a>
		 <div id="cata" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add a Catagory</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
			  <form action="{{route('add.catagory')}}" method="post" enctype='multipart/form-data'>
              <div class="modal-body pd-10">
			  @csrf
			  
			  
			  <div class="form-group col-md-12">
    <label for="exampleInputEmail1">Catagory Name</label>
    <input type="text" name="Cat_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Catagory name">
 @error('Cat_name')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror


 </div>
 <div class="from-group col-md-12 ">
		 <label for="">Catagory Logo:</label>
			 <input type="file" name="cata_logo" class="form-control" />

				
				@error('catagory_logo')
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
                 <th class="col-md-4">Catagory logo</th>
                 <th class="col-md-2">Action</th>
                </tr>
              </thead>
			   <tbody>
			   @php($i=1)
			   @foreach($cata as $data)
                <tr>
                  <td>{{$cata->firstItem()+$loop->index}}</td>
                 <td>{{$data->Cat_name}}</td>
			   <td><img src="{{$data->Cata_logo}}" style="height:70px; width:70px;"></td>
				 <td>
		<a  data-toggle="modal" data-target="#edit{{$data->id}}"><i class="fa fa-edit" style="font-size:25px;"></i></a>
		<div id="edit{{$data->id}}" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Update Catagory</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
			  <form action="{{route('update.catagory')}}" method="post">
              <div class="modal-body pd-10">
			  @csrf
			  <input type="hidden" name="id" value="{{$data->id}}" />
			  
			  <div class="form-group col-md-12">
    <label for="exampleInputEmail1">Catagory Name</label>
    <input type="text" name="a" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Cat_name}}">
 @error('Cat_name')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror


 </div>
  <div class="form-group col-md-12">
    <label for="exampleInputEmail1">Old Image</label>
    <img src="{{asset('Image/',$data->image)}}" width="150;" height="50">
 @error('Cat_name')
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
 
	<a href="delete/{{$data->id}}"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
				 
				 </td>
                </tr>
                
               @endforeach
              </tbody>
			  </table>
	   {{$cata->links()}}

	  
	   
	   </div>
	   </div>
	  
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	     @include('admin.page.footer')
