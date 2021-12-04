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
        <span class="breadcrumb-item active">Search Report</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   
	  <div class="row row-sm mg-t-20">
           <div class="col-xl-4 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
              <form action="{{route('date.report')}}" method="post">
			  @csrf
			  
			
              <div class="row row-xs">
                <label class="">Serach By Date</label>
                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                  <input type="date" class="form-control" name="date" >
                </div>
              </div><!-- row -->
             
              <div class="row row-xs mg-t-30">
                <div class="col-sm-12 mg-l-auto">
                  <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Submit</button>
                  
                  </div><!-- form-layout-footer -->
				  </form>
                </div><!-- col-8 -->
              </div>
            </div><!-- card -->
          </div><!-- col-6 -->
		    <div class="col-xl-4 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
             <form action="{{route('month.report')}}" method="post">
			 @csrf
              <div class="row row-xs">
                <label class="">Serach By Month</label>
                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                 <select name="month" id="" class="form-control">
				 
				 <option value="01">January</option>
				 <option value="02">February</option>
				 <option value="03">March</option>
				 <option value="04">April</option>
				 <option value="05">May</option>
				 <option value="06">June</option>
				 <option value="07">July</option>
				 <option value="08">August</option>
				 <option value="09">September</option>
				 <option value="10">October</option>
				 <option value="11">November</option>
				 <option value="12">December</option>
				 
				 
				 
				 
				 
				 
				 
				 </select>
                </div>
              </div><!-- row -->
		
             
              <div class="row row-xs mg-t-30">
                <div class="col-sm-12 mg-l-auto">
                  <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Submit</button>
                  
                  </div><!-- form-layout-footer -->
				  	  </form>
                </div><!-- col-8 -->
              </div>
            </div><!-- card -->
          </div><!-- col-6 -->
		     <div class="col-xl-4 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
             <form action="{{route('year.report')}}" method="post">
			 @csrf
              <div class="row row-xs">
                <label class="">Serach By Year</label>
                <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                  <select name="year" id="" class="form-control">
				 
				 <option value="2021">2021</option>
				 <option value="2022">2022</option>
				 <option value="2023">2023</option>
				 <option value="2024">2024</option>
				
				 
				 
				 
				 
				 
				 
				 </select>
                </div>
              </div><!-- row -->
             
              <div class="row row-xs mg-t-30">
                <div class="col-sm-12 mg-l-auto">
                  <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Submit</button>
                  
                  </div><!-- form-layout-footer -->
				  </form>
                </div><!-- col-8 -->
              </div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	     @include('admin.page.footer')
