@include('Frontend.page.anheader')

 <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="active">product details </li>
                    </ul>
                </div>
            </div>
        </div>
		@if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
        <div class="product-details-area pt-120 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-tab">
						
                            <div class="pro-dec-big-img-slider">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="#">
                                            <img src="{{asset($product->image_1)}}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup" href="{{asset($product->image_1)}}"><i class="icon-size-fullscreen"></i></a>
                                </div>
                               
                               
                                
                              
                            </div>
                            <div class="product-dec-slider-small product-dec-small-style1">
                                <div class="product-dec-small active">
                                    <img src="{{asset($product->image_1)}}" alt="">
                                </div>
                                
                            </div>
                        </div>
                    </div>
					  <form action="{{url('add/to/singleproduct',$productss->id)}}" method="post">
						   @csrf
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content pro-details-content-mrg">
                            <h2>{{$product->product_name}}</h2>
                            <div class="product-ratting-review-wrap">
                                <div class="product-ratting-digit-wrap">
                                    <div class="product-ratting">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <div class="product-digit">
                                        <span>5.0</span>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="pro-details-price">
								@if($product->discount_price == NULL)
                                <span class="new-price">{{$product->price}}TK</span>
							    
								@else
							   <span class="old-price">{{$product->price}}TK</span>
								<span class="new-price">{{$product->discount_price}}TK</span>

							      @endif
							
							
                            </div>
                           
                         
                            <div class="pro-details-quality">
                                <span>Quantity:</span>
                                <div class="">
								<input type="number" name="qty" min="1" max="100" value="1" style="width:60px;">
                                </div>
                            </div>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span>Categories:</span> <a href="#">{{$product->Cat_name}}</a></li>
									                   @if($product->subcatagory_id ==NULL)
				                            <br /><li><span>Sub Categories:</span>None </li>
										@else
											 @foreach($product_sub as $data2)
                                    <li><span>Sub Categories:</span> <a href="#">{{$data2->SubCatagory_name}}</a></li>
									@endforeach
                                    @endif

                                     @if($product->brand_id ==NULL)
									 <li><span>Brand:</span>None </li>
									 
									 @else
                                       @foreach($productview as $data3)  
								 
								   <li><span>Brand:</span> <a href="#">{{$data3->Brand_name}}</a></li>
								   @endforeach
								   @endif
                                <li><span>Size:</span> <a href="#">{{$product->product_size}}</a></li>

									
                                </ul>
                            </div>
                            <div class="pro-details-action-wrap">
                                <div class="pro-details-add-to-cart">
                                    <input type="submit" value="Add to Cart" class="btn btn-success btn-sm" />
                                </div>
                               
                            </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-wrapper pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dec-review-topbar nav mb-45">
                            <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                            <a data-toggle="tab" href="#des-details2">Specification</a>
                           
                            <a data-toggle="tab" href="#des-details4">Reviews and Ratting </a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    <p>{{$product->product_details}}</p>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="title width1">Name</td>
                                                <td>{{$product->product_name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">SKU</td>
                                                <td>{{$product->product_code}}</td>
                                            </tr>
                                           
                                             <tr>
                                                <td class="title width1">Catagory </td>
                                                <td>{{$product->Cat_name}}</td>
                                            </tr>
                                         
                                            <tr>
                                                <td class="title width1">Size </td>
												    <td>{{$product->product_size}}</td>

                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
					
                          
                            <div id="des-details4" class="tab-pane">
                                <div class="review-wrapper">
								<h4>Average user rating</h4>
					@if(App\Models\review::where('product_id',$productss->id)->where('status' ,'=','1')->first())
					@php
				
				       $feedback=App\Models\review::where('product_id','=',$productss->id)->where('status' ,'=','1')->get();
		$feed=App\Models\review::where('product_id','=',$productss->id)->where('status' ,'=','1')->sum('rating');
		
      $row=App\Models\review::where('product_id','=',$productss->id)->where('status' ,'=','1')->count();

       (double) $avg=(int)$feed/(int)$row;
	    @endphp
								<h2 class="bold padding-bottom-7">{{$avg}}<small>/ 5</small></h2>
												@for ($i = 1; $i <=$avg; $i++)
                  
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
	  <i class="yellow icon_star"></i>
					</button>
						
					@endfor
				<br />
					
                                    <h2>{{$row}} review for {{$product->product_name}}</h2>
									@foreach($feedback as $fe)
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/product-details/client-1.png" alt="">
                                        </div>
                                        <div class="review-content">
										
                                            <div class="review-top-wrap">
                                                <div class="review-name">
                                                    <h5><span>{{$fe->name}}</h5>
                                                </div>
                                                <div class="review-rating">
                                                  
                                                   @for ($i = 1; $i <=$fe->rating; $i++)
                  
						  <i class="yellow icon_star"></i>

						
					@endfor
                                                </div>
                                            </div>
                                            <p>{{$fe->review}}</p>
                                        </div>
                                    </div>
									@endforeach
									@else
						<h2>No Review</h2>
					@endif
                                </div>
                                <div class="ratting-form-wrapper">
								@php
								
								
								
								@endphp
								@if(Auth::check())
                                    <span>Add a Review</span>
                                    <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                    <div class="ratting-form">
                                        <form action="{{route('user.review')}}" method="post">
										@csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="rating-form-style mb-20">
													<input type="hidden" name="pro_id" value="{{$productss->id}}">
                                                        <label>Name <span>*</span></label>
                                                        <input type="text" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Email <span>*</span></label>
                                                        <input type="email" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                   <span>Your rating</span>
			<table class="table">
			<thead>
    <tr>
      <th scope="col">1 Star</th>
      <th scope="col">2 Star</th>
      <th scope="col">3 Star</th>
      <th scope="col">4 Star</th>
      <th scope="col">5 Star</th>
      
    </tr>
  </thead>
  <tbody>
  <tr>
			<td><label for="rating-1"></label>
			<input type="radio" name="rating" value="1" /><span></span></td>
			<td><label for="rating-2"></label>
			<input type="radio" name="rating" value="2" /></span></td>
			<td><label for="rating-3"></label>
			<input type="radio" name="rating" value="3" /></span></td>
			<td><label for="rating-4"></label>
			<input type="radio" name="rating" value="4" /></span></td>
			<td><label for="rating-5"></label>
			<input type="radio" name="rating" value="5" /></span></td>
			
			<input type="hidden" name="date" value="{{date('d M-Y')}}" />
			</div>
			</tr>
			</tbody>
			</table>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Your review <span>*</span></label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Feedback..... *" rows="4" required data-error="Please,leave us a message."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-submit">
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
									@else
										
									<h2>You must be logged in to post a review.</h2>
										@endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		  <div class="related-product pb-115">
            <div class="container">
                <div class="section-title mb-45 text-center">
                    <h2>Related Product</h2>
                </div>
                <div class="related-product-active">
				@foreach($related_product as $data5)
                    <div class="product-plr-1">
					
                        <div class="single-product-wrap">
						
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="{{asset($data5->image_1)}}" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                   
                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="{{url('/single_product',$product->id)}}">{{$data5->product_name}}}</a></h3>
                                <div class="product-price-2">
                                    <span>{{$data5->price}}}</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">
                                <div class="product-rating-wrap">
                                    <div class="product-rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <h3><a href="{{url('/single_product',$data5->id)}}">{{$data5->product_name}}</a></h3>
                                <div class="product-price-2">
                                    <span>{{$data5->price}}</span>
                                </div>
                                <div class="pro-add-to-cart">
                                  <button class="addcart" data-id="{{$data5->id}}">Add To Cart</button>
                                </div>
                            </div>
                        </div>
						
                    </div>
                  @endforeach
             
                   
                </div>
            </div>
        </div>
        
                
        <div class="subscribe-area bg-gray pt-115 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title">
                            <h2>keep connected</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script type="text/javascript">


$(document).ready(function(){
$('.addcart').on('click',function(){

var id=$(this).data('id');
if(id){

$.ajax({
url:"{{url('add/to/product')}}/"+id,
type:"GET",
dataType:"json",
 success:function(data) {
	
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

if($.isEmptyObject(data.error)){
	
Toast.fire({
  icon: 'success',
  title: 'Succefully Added To Cart',
})	
	
	
}

else{
	Toast.fire({
  icon: 'error',
  title: 'data.error',
})	
	
	
}

},

});

}


});
});

</script>

























@include('Frontend.page.footer')
