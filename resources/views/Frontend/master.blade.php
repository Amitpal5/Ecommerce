@include('Frontend.page.header')
   

                 <div class="slider-area bg-gray-2">
            <div class="hero-slider-active-2 nav-style-1 nav-style-1-green">
                <div class="single-hero-slider single-hero-slider-hm3 single-animation-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-12 ml-auto">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="hero-slider-content-3 slider-animated-1">
                                            <h4 class="animated">New Arrivals</h4>
                                            <h1 class="animated">Basic thick knit <br>T-shirt</h1>
                                          
                                            <div class="btn-style-3">
                                                <a class="animated btn-1-padding-1" href="{{url('/shop_page')}}">Shop now <i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <div class="tab-content slider-tab-big-img-wrap jump animated">
                                            <div id="tshirt-4" class="tab-pane active">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-1">
                                                    <img src="{{asset('frontend/images/slider/hm-3-slider-1.png')}}" alt="">
                                                </div>
                                            </div>
                                           
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-hero-slider-hm3 single-animation-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-12 ml-auto">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="hero-slider-content-3">
                                            <h4 class="animated">New Arrivals</h4>
                                            <h1 class="animated">Basic thick knit <br>T-shirt</h1>
                                            
                                            
                                            <div class="btn-style-3">
                                                <a class="animated btn-1-padding-1" href="{{url('/shop_page')}}">Shop now <i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <div class="tab-content slider-tab-big-img-wrap jump animated">
                                            <div id="tshirt-7" class="tab-pane">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-1">
                                                    <img src="{{asset('frontend/images/slider/hm-3-slider-1.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div id="tshirt-8" class="tab-pane active">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-2">
                                                    <img src="{{asset('frontend/images/slider/hm-3-slider-2.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div id="tshirt-9" class="tab-pane">
                                                <div class="slider-tab-big-img slider-tab-big-img-mrg-3">
                                                    <img src="{{asset('frontend/images/slider/hm-3-slider-3.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area pt-50 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-cursor"></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Free Shipping</h3>
                                <p>Oders over 2000 Tk</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-refresh "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>90 Days Return</h3>
                                <p>For any problems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-credit-card "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>Secure Payment</h3>
                                <p>100% Guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap-2 mb-30">
                            <div class="service-icon-2">
                                <i class="icon-earphones "></i>
                            </div>
                            <div class="service-content-2">
                                <h3>24h Support</h3>
                                <p>Dedicated support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container mt-2">
		@php
		
		
		
		$cat=DB::table('catagories')->get();
		
		
		
		
		
		
		@endphp
       <div class="product-categories-area pb-55">
                        <div class="section-title-7 border-bottom-3 mb-25 pb-20">
                            <h2>popular categories</h2>
                        </div>
						
                        <div class="product-categories-slider-2 nav-style-5">
						@foreach($cat as $data1)
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-border border-green-2 mb-20">
                                        <a href="{{url('/catagory_product',$data1->id)}}">
                                            <img src="{{$data1->Cata_logo}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content-categories-2 product-content-green-2 text-center">
                                        <h5><a href="{{url('/catagory_product',$data1->id)}}">{{$data1->Cat_name}}</a></h5>
                                    </div>
                                </div>
                            </div>
							@endforeach
                            
                     </div>
                    </div>
                    </div>
        <div class="product-area pb-110">
            <div class="container">
                <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-15">
                    <div class="section-title-3">
                        <h2>Best Selling Product </h2>
                    </div>
                    <div class="tab-style-3 nav">
                        <a class="active" href="#product-1" data-toggle="tab">Trend</a>
                        <a href="#product-2" data-toggle="tab"> Hot Deal</a>
                        <a href="#product-3" data-toggle="tab">Best Rated</a>
                      
                    </div>
                </div>
				
				
				
				@php
					
					
					$trend=DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(8)->
					join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')->get();
					
					
					
					
					@endphp
				
				
				<div class="tab-content jump">
                    <div id="product-1" class="tab-pane active">
                        <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                          @foreach($trend as $data5)
						  <div class="product-plr-2">
                                <div class="single-product-wrap-2 mb-25">
                                    <div class="product-img-2">
                                        <a href="{{url('/single_product',$data5->id)}}"><img src="{{$data5->image_1}}" alt=""></a>
                                   @if($data5->discount_price == NULL)										
                                              <span class="pro-badge right bg-red">New</span>
                                           @else
											   @php
											   $amount=$data5->price - $data5->discount_price;
										       $discount= $amount/$data5->price*100;
											   @endphp
											     <span class="pro-badge right bg-red">-{{intval($discount)}}%</span>
										   @endif
										



								  </div>
                                    <div class="product-content-3">
                                        <span>{{$data5->Cat_name}}</span>
                                        <h4><a href="{{url('/single_product',$data5->id)}}">{{$data5->product_name}}</a></h4>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-2">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="pro-price-action-wrap">
                                            <div class="product-price-3">
                                               	@if($data5->discount_price == NULL)
											<span class="new-price">{{$data5->price}}</span> TK
										@else
											 <span class="new-price">{{$data5->discount_price}}</span>TK
                                                <span class="old-price">{{$data5->price}}</span>TK
                                            @endif    
                                            </div>
                                            <div class="product-action-3">
                                                <button class="addcart" data-id="{{$data5->id}}"><i class="icon-basket-loaded"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        
                        </div>
                    </div>
					@php
					
					
					$hot=DB::table('products')->where('status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(8)->
					join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')->get();
					
					
					
					
					@endphp
                    <div id="product-2" class="tab-pane">
                        <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                            
							@foreach($hot as $data4)
							<div class="product-plr-2">
                                <div class="single-product-wrap-2 mb-25">
                                    <div class="product-img-2">
                                        <a href="{{url('/single_product',$data4->id)}}"><img src="{{$data4->image_1}}" alt=""></a>
                                        
                                           @if($data4->discount_price == NULL)										
                                              <span class="pro-badge right bg-red">New</span>
                                           @else
											   @php
											   $amount=$data4->price - $data4->discount_price;
										       $discount= $amount/$data4->price*100;
											   @endphp
											     <span class="pro-badge right bg-red">-{{intval($discount)}}%</span>
										   @endif
										
                                               
								   </div>
                                    <div class="product-content-3">
                                        <span>{{$data4->Cat_name}}</span>
                                        <h4><a href="{{url('/single_product',$data4->id)}}">{{$data4->product_name}}</a></h4>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-2">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="pro-price-action-wrap">
                                            <div class="product-price-3">
											
											@if($data4->discount_price == NULL)
											<span class="new-price">{{$data4->price}}</span> TK
										@else
											 <span class="new-price">{{$data4->discount_price}}</span>TK
                                                <span class="old-price">{{$data4->price}}</span>TK
                                            @endif    
                                            </div>
                                            <div class="product-action-3">
                                 <button class="addcart" data-id="{{$data4->id}}"><i class="icon-basket-loaded"></i></button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							@endforeach
                         
                           
                           
                          
                            
                           
                        </div>
                    </div>
					
					
					@php
					
					
					$best=DB::table('products')->where('status',1)->where('hot_new',1)->orderBy('id','desc')->limit(8)->
					join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')->get();
					
					
					
					
					@endphp
					
				
                    <div id="product-3" class="tab-pane">
                        <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                           @foreach($best as $data3)

						   <div class="product-plr-2">
                                <div class="single-product-wrap-2 mb-25">
                                    <div class="product-img-2">
                                        <a href="{{url('/single_product',$data3->id)}}"><img src="{{$data3->image_1}}" alt=""></a>
										@if($data3->discount_price == NULL)										
                                              <span class="pro-badge right bg-red">New</span>
                                           @else
											   @php
											   $amount=$data3->price - $data3->discount_price;
										       $discount= $amount/$data3->price*100;
											   @endphp
											     <span class="pro-badge right bg-red">-{{intval($discount)}}%</span>
										   @endif
										
                                    </div>
                                    <div class="product-content-3">
                                        <span>{{$data3->Cat_name}}</span>
									<h4><a href="{{url('/single_product',$data3->id)}}">{{$data3->product_name}}</a></h4>

                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-2">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="pro-price-action-wrap">
                                            <div class="product-price-3">
                                               @if($data3->discount_price == NULL)
											<span class="new-price">{{$data3->price}}</span> TK
										@else
											 <span class="new-price">{{$data3->discount_price}}</span>TK
                                                <span class="old-price">{{$data3->price}}</span>TK
                                            @endif    
                                            </div>
                                            <div class="product-action-3">
                               <button class="addcart" data-id="{{$data3->id}}"><i class="icon-basket-loaded"></i></button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                           
                           
                           
                           
                           
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
       @php
	   
	   
	   $baby=DB::table('products')->where('status',1)->where('catgory_id','=','1')->orderBy('id','desc')->limit(8)->
					join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')->get();
					
	   		$name1=DB::table('catagories')->where('id','=','1')->first();

	   
	   
	   @endphp
      
        <div class="product-area pb-115">
            <div class="container">
                <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
                    <div class="section-title-3">
                        <h2>Baby Care</h2>
                    </div>
                    <div class="tab-style-4 nav">
                        
                    <a href="{{url('/catagory_product',$name1->id)}}">View all </a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-11" class="tab-pane active">
                        <div class="product-slider-active-3 nav-style-3">
						@foreach($baby as $data6)
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{url('/single_product',$data6->id)}}">
                                            <img src="{{$data6->image_1}}" alt="">
                                        </a>
                                       
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data6->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data6->id)}}">{{$data6->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data6->price}}</span>TK
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data6->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data6->id)}}">{{$data6->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data6->price}}</span>TK
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button class="addcart" data-id="{{$data6->id}}">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                  
                                </div>
                            </div>
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		  @php
	   
	   
	   $veg=DB::table('products')->where('status',1)->where('catgory_id','=','4')->orderBy('id','desc')->limit(8)->
					join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')->get();
					
	   
	   $name2=DB::table('catagories')->where('id','=','4')->first();
	   
	   
	   @endphp
      
        <div class="product-area pb-115">
            <div class="container">
                <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
                    <div class="section-title-3">
                        <h2>Vegetables & Fruits</h2>
                    </div>
                    <div class="tab-style-4 nav">
                        
                    <a href="{{url('/catagory_product',$name2->id)}}" >View all </a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-11" class="tab-pane active">
                        <div class="product-slider-active-3 nav-style-3">
						@foreach($veg as $data7)
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{url('/single_product',$data7->id)}}">
                                            <img src="{{$data7->image_1}}" alt="">
                                        </a>
                                       
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data7->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data7->id)}}">{{$data7->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data7->price}}</span>TK
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data7->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data7->id)}}">{{$data7->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data7->price}}</span>TK
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button class="addcart" data-id="{{$data7->id}}">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                  
                                </div>
                            </div>
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 @php
	   
	   
	   $cook=DB::table('products')->where('status',1)->where('catgory_id','=','5')->orderBy('id','desc')->limit(12)->
					join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')->get();
					
	   	   $name3=DB::table('catagories')->where('id','=','5')->first();

	   
	   
	   
	   @endphp
      
        <div class="product-area pb-115">
            <div class="container">
                <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
                    <div class="section-title-3">
                        <h2>Cooking Essentials</h2>
                    </div>
                    <div class="tab-style-4 nav">
                        
                    <a href="{{url('/catagory_product',$name3->id)}}">View all </a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-11" class="tab-pane active">
                        <div class="product-slider-active-3 nav-style-3">
						@foreach($cook as $data8)
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{url('/single_product',$data8->id)}}">
                                            <img src="{{$data8->image_1}}" alt="">
                                        </a>
                                       
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data8->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data8->id)}}">{{$data8->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data8->price}}</span>TK
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data8->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data8->id)}}">{{$data8->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data8->price}}</span>TK
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button class="addcart" data-id="{{$data8->id}}">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                  
                                </div>
                            </div>
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		@php
	   
	   
	   $nood=DB::table('products')->where('status',1)->where('catgory_id','=','6')->orderBy('id','desc')->limit(12)->
					join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')->get();
					
	   
	   	   	   $name4=DB::table('catagories')->where('id','=','6')->first();

	   
	   
	   @endphp
      
        <div class="product-area pb-115">
            <div class="container">
                <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
                    <div class="section-title-3">
                        <h2>Noodles & Instant Food</h2>
                    </div>
                    <div class="tab-style-4 nav">
                        
                    <a href="{{url('/catagory_product',$name4->id)}}">View all </a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-11" class="tab-pane active">
                        <div class="product-slider-active-3 nav-style-3">
						@foreach($nood as $data9)
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{url('/single_product',$data9->id)}}">
                                            <img src="{{$data9->image_1}}" alt="">
                                        </a>
                                       
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data9->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data9->id)}}">{{$data9->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data9->price}}</span>TK
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data9->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data9->id)}}">{{$data9->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data9->price}}</span>TK
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button class="addcart" data-id="{{$data9->id}}">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                  
                                </div>
                            </div>
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		@php
	   
	   
	   $diary=DB::table('products')->where('status',1)->where('catgory_id','=','9')->orderBy('id','desc')->limit(12)->
					join('catagories','products.catgory_id','catagories.id' )
				  ->select('products.*','catagories.Cat_name')->get();
					
	   
	   	   	   	   $name5=DB::table('catagories')->where('id','=','9')->first();

	   
	   
	   @endphp
      
        <div class="product-area pb-115">
            <div class="container">
                <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
                    <div class="section-title-3">
                        <h2>Dairy</h2>
                    </div>
                    <div class="tab-style-4 nav">
                        
                    <a href="{{url('/catagory_product',$name5->id)}}">View all </a>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-11" class="tab-pane active">
                        <div class="product-slider-active-3 nav-style-3">
						@foreach($diary as $data10)
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-15">
                                        <a href="{{url('/single_product',$data10->id)}}">
                                            <img src="{{$data10->image_1}}" alt="">
                                        </a>
                                       
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data10->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data10->id)}}">{{$data10->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data10->price}}</span>TK
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2">
                                        <div class="product-content-categories">
                                            <a href="#">{{$data10->Cat_name}}</a>
                                        </div>
                                        <h3><a href="{{url('/single_product',$data10->id)}}">{{$data10->product_name}}</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                        </div>
                                        <div class="product-price-4">
                                            <span>{{$data10->price}}</span>TK
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button class="addcart" data-id="{{$data10->id}}">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                  
                                </div>
                            </div>
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="about-us-area bg-gray-3 pt-50 pb-50">
            <div class="container">
                <div class="about-us-content-4">
                    <div class="about-us-content-4-title">
                        <h4 style="text-align:center; font-size:30px;">Online Grocery Shop in Bangladesh</h4>
                    </div>
					<p>Pal Creative Ltd is a leading e-commerce online grocery shop in Dhaka, Bangladesh. Pal creative changes the innovative retail concepts, customers will purchase each and every product at wholesale price. It was launched at a time when Bangladesh’s busy workforce in cities was finding it difficult to allocate time to buy groceries and home essentials. Pal Creative gave them the flexibility to place their order anytime and get the things delivered at their preferred time in Dhaka. Pal Creative offers all kind of cooking item online groceries in various categories such as chaldal, edible oil, eggs, meat, fish, masalas, instant food, canned food, dairy, butter, ghee, flour (atta-maida-suji) sugar, salt, seasoning, sauce, vinegar, frozen items, herbs, spices, sweets, savory and many more. Pal Creative also sells world-class bakery items, beverages, branded foods, personal care, baby care products, health & nutrition, household & cleaning supplies etc.</p>
                     <p>Pal Creative comes with assure of lowest rates and quick delivery services. We have to maintain cash in delivery and online payment through Bkash & Rocket. We never compromise with quality. We have an easy return and replacement system. All items we sell online are fresh and ensured 100% quality products. Our motto is on providing quality products and satisfying our consumers. We have confidence in time is very important to our fellow Dhaka residents and that they should not have to waste valuable time in traffic, bad weather and wait in line just buy small products.</p>                   
                </div>
            </div>
        </div>
      <div class="product-area pb-115 bg-gray-3">
            <div class="container">
                <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
                    <div class="" style="text-align: center;">
                        <h2 style="padding:15px;">Popular Brand</h2>
                    </div>
                   
                </div>
				
				
				@php
				
				
				$brand=DB::table('brands')->get();
				
				
				@endphp
				
				
				
				
				
                <div class="tab-content jump">
                    <div id="product-11" class="tab-pane active">
                        <div class="product-slider-active-3 nav-style-3">
						@foreach($brand as $br)
												

						<div class="single-brand-logo-2 mb-30">
                        <img src="{{('Image/').$br->Brand_logo}}" alt="brand-logo">
						</a>
                    </div>
					@endforeach
                    
                                  
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