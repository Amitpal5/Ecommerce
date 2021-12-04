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
        <span class="breadcrumb-item active">Upadte Product</span>
      </nav>
	   
	  
	   <div class="sl-pagebody">
	   <div class="sl-page-title">
	 
	    <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Product</h6>
            <form action="{{url('update/product/withoutphote/'.$product->id)}}" method="post" enctype='multipart/form-data'>
         @csrf
		 <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name" value="{{$products->product_name}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_code"  value="{{$products->product_code}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Quantity<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_qty" value="{{$products->product_qty}}">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Previews Catagory<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text"  value="{{$products->Cat_name}}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Catagory<span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="catgory_id">
                  <option>Choose Catagory</option>
                   @foreach($cata as $data1)
			<option value="{{$data1->id}}">{{$data1->Cat_name}}</option>

					@endforeach
					
                  </select>
                </div>
              </div><!-- col-4 -->
			   <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Previews Sub Catagory<span class="tx-danger"></span></label>
                   @if($products->subcatagory_id ==NULL)
                    <input class="form-control" type="text"  value="No Sub Catagory">
     			  
                 @else
				 @foreach($product_sub as $data2)
				 <input class="form-control" type="text"   value="{{$data2->SubCatagory_name}}">
				 @endforeach
				 @endif
					
				</div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Catagory<span class="tx-danger"></span></label>
                   <select class="form-control select2" data-placeholder="Choose country" name="subcatagory_id">
                  <option>Choose Sub Catagory</option>
                   @foreach($sub as $data2)
			<option value="{{$data2->id}}">{{$data2->SubCatagory_name}}</option>

					@endforeach
					
                  </select>
                </div>
              </div><!-- col-4 -->
			    <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Previews Brand<span class="tx-danger">*</span></label>
                  @if($products->brand_id == NULL)
                <input class="form-control" type="text"  value="No Brand">
                 @else
				 @foreach($productview as $data3)
				 <input class="form-control" type="text"   value="{{$data3->Brand_name}}">
				 @endforeach
				 @endif
               


                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand<span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                       <option>Choose Brand</option>

				 @foreach($brand as $data4)
							 
			<option value="{{$data4->id}}">{{$data4->Brand_name}}</option>
 
					@endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_size"  value="{{$products->product_size}}">
                </div>
              </div><!-- col-6 -->
			   <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Selling Price<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="price" value="{{$products->price}}"  >
                </div>
              </div><!-- col-6 -->
			    <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Discount Price<span class="tx-danger"></span></label>
                  <input class="form-control" type="text" name="discount_price" value="{{$products->discount_price}}"  >
                </div>
              </div><!-- col-6 -->
			   
			  <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                <textarea name="product_details" id="summernote" placeholder="Enter Product Details" >{{$products->product_details}}</textarea>
                </div>
              </div><!-- col-12 -->
			  
			  
			   
			
			   </div><!-- row -->
			   <hr />
			   <br />
			   <br />
			   <div class="row">
			   <div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="main_slider" value="1" <?php  if($products->main_slider == 1) 
			{echo "checked";}	?>>
          <span>Main Slider</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="hot_deal" value="1" <?php  if($products->hot_deal == 1) 
			{echo "checked";}	?>>
          <span>Hot Deal Product</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="best_rated" value="1" <?php  if($products->best_rated == 1) 
			{echo "checked";}	?>>
          <span>Best Rated Product</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="mid_slider" value="1" <?php  if($products->mid_slider == 1) 
			{echo "checked";}	?>>
          <span>Mid Slider</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="hot_new" value="1" <?php  if($products->hot_new == 1) 
			{echo "checked";}	?>>
          <span>Hot New Product</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="trend" value="1" <?php  if($products->trend == 1) 
			{echo "checked";}	?>>
          <span>Trend Product</span>
         </label>
            </div>
            </div>
            <br />
            <br />
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Update Product</button>
             
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
	  </form>
	  
	</div>
	  </div>
	  
	  	   <div class="sl-pagebody">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update Product</h6>
            <form action="" method="post" enctype='multipart/form-data'>
         @csrf
	  <div class="row">
	  
	   <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Image One (Main Thumbnail)<span class="tx-danger">*</span></label>
               
             <label class="custom-file">
           <input type="file" id="file" class="custom-file-input" name="image_1" onchange="readURL(this);">
         <span class="custom-file-control"></span>
		 
   

			   </div>
              </div>
			   <div class="col-lg-6">
                <div class="form-group">
		 <img src="{{asset($products->image_1)}}" style="width:80px; height:80px;">
            </label>
   

			   </div>
              </div><!-- col-6-->
	   <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Image Two<span class="tx-danger"></span></label>
               
             <label class="custom-file">
           <input type="file" id="file" class="custom-file-input" name="image_2" onchange="readURL2(this);">
         <span class="custom-file-control"></span>
		 		 <img src="#" id="two">

            </label>



			   </div>
              </div><!-- col-4 -->
	    <div class="col-lg-6">
                <div class="form-group">
		 <img src="{{asset('$products->image_2')}}" style="width:80px; height:80px;">
            </label>
   

			   </div>
              </div><!-- col-6-->
			    <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Image Three<span class="tx-danger"></span></label>
               
             <label class="custom-file">
           <input type="file" id="file" class="custom-file-input" name="image_3" onchange="readURL3(this);">
         <span class="custom-file-control"></span>
		 		 		 <img src="#" id="three">

            </label>



			   </div>
              </div><!-- col-4 -->
			   <div class="col-lg-6">
                <div class="form-group">
		 <img src="{{$products->image_3}}" style="width:80px; height:80px;">
            </label>
   

			   </div>
              </div><!-- col-6-->
			  
	  
	  
	  
	  
	  </div>
	  
	  <input type="submit" class="btn btn-primary" value="submit" />
	  
	  </form>
	  </div>
	  </div>
	  </div>
	 
 
 
 
 
	     @include('admin.page.footer')
 