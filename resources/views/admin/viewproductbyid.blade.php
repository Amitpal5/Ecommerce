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
        <span class="breadcrumb-item active">Product</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	 
	    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">View Product</h6>
		 <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
			  @foreach($products as $data)
                <div class="form-group">
                  <label class="form-control-label">Product Name<span class="tx-danger">*</span></label>
                <br><strong>{{$data->product_name}}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code<span class="tx-danger">*</span></label>
                       <br>
					   <strong>{{$data->product_code}}</strong>

			   </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Quantity<span class="tx-danger">*</span></label>
                <br><strong>{{$data->product_qty}}</strong>
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Catagory<span class="tx-danger">*</span></label>
              
               
			  <br><strong>{{$data->Cat_name}}</strong>
                
                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Catagory<span class="tx-danger"></span></label>
                   @if($data->subcatagory_id ==NULL)
				  <br /> <strong>No Sub Catagory</strong>
				  
                 @else
					 <br>
				 @foreach($product_sub as $data2)
				 <strong>{{$data2->SubCatagory_name}}</strong>
				 @endforeach
				 @endif
					
				</div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand<span class="tx-danger">*</span></label>
                   @foreach($productview as $data1)
			  <br><strong>{{$data1->Brand_name}}</strong>
                 @endforeach


                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size<span class="tx-danger">*</span></label>
                      <br><strong>{{$data->product_size}}</strong>
                </div>
              </div><!-- col-6 -->
			   <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Selling Price<span class="tx-danger">*</span></label>
                      <br><strong>{{$data->price}}</strong>
                </div>
              </div><!-- col-6 -->
			    <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Discount Price<span class="tx-danger"></span></label>
                      <br><strong>{{$data->discount_price}}</strong>
                </div>
              </div><!-- col-6 -->
			   
			  <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                <textarea name="product_details" id="summernote" >{{$data->product_details}}</textarea>
                </div>
              </div><!-- col-12 -->
			  
			 
			   
			  
		
			  
			   </div><!-- row -->
			   <hr />
			   <br />
			   <br />
			   <div class="row">
			   <div class="col-lg-4">
               <label class="">
			   @if($data->main_slider == 1)
				    <span class="badge badge-success">Active</span>
			   
			   
			   @else
				  <span class="badge badge-danger">unactive</span>
				   
			   @endif
           <span>Main Slider</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="">
             @if($data->hot_deal == 1)
				    <span class="badge badge-success">Active</span>
			   
			   
			   @else
				  <span class="badge badge-danger">unactive</span>
				   
			   @endif
          <span>Hot Deal Product</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="">
             @if($data->best_rated == 1)
				    <span class="badge badge-success">Active</span>
			   
			   
			   @else
				  <span class="badge badge-danger">unactive</span>
				   
			   @endif
          <span>Best Rated Product</span>
         </label>
            </div>
			<div class="col-lg-4">
                <label class="">
             @if($data->mid_slider == 1)
				    <span class="badge badge-success">Active</span>
			   
			   
			   @else
				  <span class="badge badge-danger">unactive</span>
				   
			   @endif
          <span>Mid Slider</span>
         </label>
            </div>
			<div class="col-lg-4">
                   <label class="">
             @if($data->hot_new == 1)
				    <span class="badge badge-success">Active</span>
			   
			   
			   @else
				  <span class="badge badge-danger">unactive</span>
				   
			   @endif
          <span>Hot New Product</span>
         </label>
            </div>
			<div class="col-lg-4">
               @if($data->trend	== 1)
				    <span class="badge badge-success">Active</span>
			   
			   
			   @else
				  <span class="badge badge-danger">unactive</span>
				   
			   @endif
          <span>Trend Product</span>
         </label>
            </div>
            </div>
            <br />
            <br />
            
          </div><!-- form-layout -->
        </div><!-- card -->
	  
	@endforeach
	  
	  
	  
	  
	  
	  
	  
	  </div>
	  </div>
	  </div>
	 </body>

 
 
 
 
	     @include('admin.page.footer')
 