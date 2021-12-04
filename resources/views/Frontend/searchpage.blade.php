@include('Frontend.page.anheader')
<div class="breadcrumb-area bg-gray" style="background-image:url('{{ asset('Image/back.jpg')}}');">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="active">Search</li>
                    </ul>
                </div>
            </div>
        </div>
		
		
		 <div class="shop-area pt-120 pb-120">
		
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
									@foreach($datas as $data2)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										
                                            <div class="single-product-wrap mb-35">
											
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{url('/single_product',$data2->id)}}">
                                                        <img src="{{asset($data2->image_1)}}" alt="">
                                                    </a>
                                                
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
                                                        <span></span>
                                                    </div>
                                                    <h3><a href="product-details.html">{{$data2->product_name}}</a></h3>
                                                    <div class="product-price-2">
                                                        <span>{{$data2->price}} TK</span>
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
                                                    </div>
                                                    <h3><a href="{{url('/single_product',$data2->id)}}">{{$data2->product_name}}</a></h3>
                                                    <div class="product-price-2">
                                                        <span>{{$data2->price}} TK</span>
                                                    </div>
                                                    <div class="pro-add-to-cart">
                               <button class="addcart" data-id="{{$data2->id}}">Add To Cart</button>                                                    </div>
                                                </div>
												
											
                                        </div>
                                    
                                       
                                     
                                       
                                      
                                    
                                       
                                    </div>
									@endforeach
                                            </div>
                                </div>
                             
                            </div>
                            {{$datas->links()}}
						
                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                            
                            <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                                <h4 class="sidebar-widget-title">Categories </h4>
                                <div class="shop-catigory">
								@foreach($catagory as $data)
                                    <ul>
                                        <li><a href="{{url('/catagory_product',$data->id)}}">{{$data->Cat_name}}</a></li>
                                        
                                    </ul>
									@endforeach
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                <h4 class="sidebar-widget-title">Price Filter </h4>
                                <div class="price-filter">
                                    <span>Range:  $100.00 - 1.300.00 </span>
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button>
                                    </div>
                                </div>
                            </div>
                           
                         
                         
                          
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