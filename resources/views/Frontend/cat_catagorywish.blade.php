@include('Frontend.page.anheader')


 <div class="breadcrumb-area bg-gray" style="background-image:url('{{ asset('Image/back.jpg')}}');">
            <div class="container">
			
                <div class="breadcrumb-content text-center">
				
                    <ul>
					
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
						
                        <li class="active">{{$name->Cat_name}}</li>
						
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
										@foreach($cata as $data)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
										
                                            <div class="single-product-wrap mb-35">
										
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{url('/single_product',$data->id)}}">
                                                        <img src="{{asset($data->image_1)}}" alt="">
                                                    </a>
                                                    <div class="product-action-2 tooltip-style-2">
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
                                                    <h3><a href="{{url('/single_product',$data->id)}}">{{$data->product_name}}</a></h3>
                                                    <div class="product-price-2">
                                                        <span>{{$data->price}}</span>
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
                                                    <h3><a href="{{url('/single_product',$data->id)}}">{{$data->product_name}}</a></h3>
                                                    <div class="product-price-2">
                                                        <span>{{$data->price}}</span>
                                                    </div>
                                                    <div class="pro-add-to-cart">
                                            <button class="addcart" data-id="{{$data->id}}">Add To Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                       @endforeach
                                     
                                       
                                      
                                    
                                       
                                    </div>
                                </div>
                             
                            </div>
                           {{$cata->links()}}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                            
                            <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                                <h4 class="sidebar-widget-title">Categories </h4>
								
                                <div class="shop-catigory">
								@foreach($catagory as $data2)
                                    <ul>
                                        <li><a href="{{url('/catagory_product',$data2->id)}}">{{$data2->Cat_name}}</a></li>
                                      
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
                           
                          
                         
                          <div class="sidebar-widget shop-sidebar-border pt-40">
                                <h4 class="sidebar-widget-title">Popular Tags</h4>
								
                                <div class="tag-wrap sidebar-widget-tag">
								@foreach($sub as $data3)
                                    <a href="{{url('/subcatagory_product',$data3->id)}}">{{$data3->SubCatagory_name}}</a>
                                    @endforeach
                                </div>
								
                            </div>
                        </div>
                    </div>
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
     
    if(data.status){
    
    $('span#total_cart_item').text(data.item);
    $('span#cart_amount').text(data.amounts);
        
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



function fetchdata(){
    
    $.ajax({
    url:"{{ route('user.cart')}}",
    type:"GET",
    dataType:"html",
    success:function(res) {
           
        $('div#cart').html(res);
    }
});

}

 $(document).on('click','a.cart-active', function(e){

        e.preventDefault();
        fetchdata();

 });

});

</script>
    
















@include('Frontend.page.footer')