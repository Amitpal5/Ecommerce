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
          <h6 class="card-body-title">Add a New Product</h6>
            <form action="{{route('product.store')}}" method="post" enctype='multipart/form-data'>
         @csrf
		 <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name"  placeholder="Enter Product Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_code"  placeholder="Enter Product Code">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Quantity<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_qty"  placeholder="Enter Product Quantity">
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Catagory<span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="catgory_id">
                    <option label="Choose Catagory"></option>
                    @foreach($cata as $data)
						 <option value="{{$data->id}}">{{$data->Cat_name}}</option>
					@endforeach
					
                  </select>
                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Catagory<span class="tx-danger"></span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id">
                    
                  </select>
                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand<span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="brand_id">
                    <option label="Choose Brand"></option>
                    @foreach($brand as $data1)
						 <option value="{{$data1->id}}">{{$data1->Brand_name}}</option>
					@endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
			  <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_size"  placeholder="Enter Product Size">
                </div>
              </div><!-- col-6 -->
			   <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Selling Price<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="price"  placeholder="Enter Product Selling Price">
                </div>
              </div><!-- col-6 -->
			    <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Discount Price<span class="tx-danger"></span></label>
                  <input class="form-control" type="text" name="discount_price"  placeholder="Enter Product Discount Price">
                </div>
              </div><!-- col-6 -->
			   
			  <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details<span class="tx-danger">*</span></label>
                <textarea name="product_details" id="summernote" placeholder="Enter Product Details" ></textarea>
                </div>
              </div><!-- col-12 -->
			  
			  <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image One (Main Thumbnail)<span class="tx-danger">*</span></label>
               
             <label class="custom-file">
           <input type="file" id="file" class="custom-file-input" name="image_1" onchange="readURL(this);">
         <span class="custom-file-control"></span>
		 <img src="#" id="one">
            </label>
   

			   </div>
              </div><!-- col-4 -->
			   
			  <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two<span class="tx-danger"></span></label>
               
             <label class="custom-file">
           <input type="file" id="file" class="custom-file-input" name="image_2" onchange="readURL2(this);">
         <span class="custom-file-control"></span>
		 		 <img src="#" id="two">

            </label>



			   </div>
              </div><!-- col-4 -->
			   
			  <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three<span class="tx-danger"></span></label>
               
             <label class="custom-file">
           <input type="file" id="file" class="custom-file-input" name="image_3" onchange="readURL3(this);">
         <span class="custom-file-control"></span>
		 		 		 <img src="#" id="three">

            </label>



			   </div>
              </div><!-- col-4 -->
			  
			   </div><!-- row -->
			   <hr />
			   <br />
			   <br />
			   <div class="row">
			   <div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="main_slider" value="1">
          <span>Main Slider</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="hot_deal" value="1">
          <span>Hot Deal Product</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="best_rated" value="1">
          <span>Best Rated Product</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="mid_slider" value="1">
          <span>Mid Slider</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="hot_new" value="1">
          <span>Hot New Product</span>
         </label>
            </div>
			<div class="col-lg-4">
               <label class="ckbox">
            <input type="checkbox" name="trend" value="1">
          <span>Trend Product</span>
         </label>
            </div>
            </div>
            <br />
            <br />
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add Product</button>
             
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
	  
	  </form>
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
	  </div>
	  </div>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  <script type="text/javascript">
      $(document).ready(function(){
     $('select[name="catgory_id"]').on('change',function(){
          var catgory_id = $(this).val();
          if (catgory_id) {
            
            $.ajax({
              url: "{{ url('/get/subcategory/') }}/"+catgory_id,
              type:"GET",
              dataType:"json",
              success:function(data) { 
              $('select[name="subcategory_id"]').empty();
              $.each(data, function(key, value){
              
              $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.SubCatagory_name + '</option>');

              });
              },
            });

          }else{
            alert('danger');
          }

            });
      });

 </script>
 <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script type="text/javascript">
  function readURL2(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#two')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script type="text/javascript">
  function readURL3(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#three')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
 
 
 
 
	     @include('admin.page.footer')
 