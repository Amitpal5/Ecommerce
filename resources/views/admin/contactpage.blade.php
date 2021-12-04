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
        <span class="breadcrumb-item active">Contact</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	  <div class="row">
	  <div class="col-md-9">
	   <h5>Contact Message List</h5>
	   </div>
	
	   </div>
	   </div>
          
		  
		
      
	    <div class="card pd-20 pd-sm-40">
	    <div class="table-wrapper">
            <table id="datatable1" class="table table-striped">
              <thead>
                <tr>
                   <th class="col-md-2">Sl No.</th>
                 <th class="col-md-2">Name</th>
                 <th class="col-md-2">Email</th>
                 <th class="col-md-2">Subject</th>
                 <th class="col-md-4">Message</th>
                </tr>
              </thead>
			  @foreach($contact as $value)
			   <tbody>
			   <td class="col-md-2">{{$contact->firstItem()+$loop->index}}</td>

			    <td class="col-md-2">{{$value->name}}</td>
			    <td class="col-md-2">{{$value->email}}</td>
			    <td class="col-md-2">{{$value->subject}}</td>
			    <td style="width:40px;">{{$value->message}}</td>
			  

			  
			  
			  </td>
              </tbody>
			  	 @endforeach

			  </table>
 {{$contact->links()}}
	  
	   
	   </div>
	   </div>
	  
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	     @include('admin.page.footer')
