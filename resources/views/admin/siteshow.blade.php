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
        <span class="breadcrumb-item active">Site Settings</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	 
	    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Site Settings</h6>
            <form action="{{route('admin.update.site')}}" method="post">
         @csrf
		 <div class="form-layout">
            <div class="row mg-b-25">
			<input type="hidden" name="id" value="{{$data->id}}" />
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Site Title</label>
                  <input class="form-control" type="text" name="title" value="{{$data->site_title}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Hotline</label>
                  <input class="form-control" type="text" name="hotline" value="{{$data->hotline}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Address</label>
                  <input class="form-control" type="text" name="address" value="{{$data->address}}">
                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email</label>
                  <input class="form-control" type="text" name="email" value="{{$data->email}}">
                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Facebook ID</label>
                  <input class="form-control" type="text" name="facebook" value="{{$data->facebook_id}}">
                </div>
              </div><!-- col-4 -->
			  	  <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Gmail ID</label>
                  <input class="form-control" type="text" name="gmail" value="{{$data->gmail_id}}">
                </div>
              </div><!-- col-4 -->
              
            
			 
			 
			 
           
			
			
			
			   </div><!-- row -->
			  <input type="submit" class="btn btn-primary" value="Submit" />
	  
	 </form>
	  
	  
	  
	  
	  
	  
	  
	  </div>
	  </div>
	  </div>
	 
 
 
 
	     @include('admin.page.footer')
 