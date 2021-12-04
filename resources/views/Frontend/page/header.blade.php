<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from live.hasthemes.com/html/2/norda-preview/norda/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Sep 2021 15:24:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
        @php
			$data5=DB::table('sites')->first();

		@endphp


    <title>{{$data5->site_title}}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.min.css')}}">
	<link rel="stylesheet" href="sweetalert2.min.css">
	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>

<body>

    <div class="main-wrapper">
        <header class="header-area">
            <div class="header-large-device">
                 <div class="header-top header-top-ptb-1 border-bottom-1">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="header-offer-wrap">
                                    <p><i class="icon-paper-plane"></i> FREE SHIPPING Bangladesh wide for all orders over <span>3000 TK</span></p>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7">
                                <div class="header-top-right">
								
								
								@if (Route::has('login'))
                                   @auth
							   
								
								
								
                                    <div class="same-style-wrap" style="margin-right:100px;">
                                        
                                        <div class="same-style same-style-border language-wrap">
										 <a href="{{url('/order')}}" class="mr-3">Order Tracking</i></a> 

                                            <a class="language-dropdown-active" href="#">My Account <i class="icon-arrow-down"></i></a>
                                            <div class="language-dropdown">
                                                <ul>
                                                    <li><a href="{{url('/user_dashboard')}}">Profile</a></li>

                                                     
                                                </ul>
                                            </div>
                                        </div>
                                      
                                    </div>
                                     @else
										<div class="col-xl-5 col-lg-5" style="margin-right:100px;">
                                <div class="header-top-right">
                                    <div class="same-style-wrap">
                                        <a href="{{url('/order')}}" class="mr-3">Order Tracking</i></a> 
                                       <a href="{{url('/login')}}"><i class="icon-user">Login</i></a> 
                                       <a href="{{url('/register')}}" class="ml-2"><i class="icon-user">Register</i></a> 
                                       
                                    </div>
                                </div>
                            </div>
							   @endif
								@endauth 
									 
									 
									 
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="header-middle header-middle-padding-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{asset('Image/amit.png')}}" alt="logo"></a>
                                </div>
                            </div>
							@php
					
					$cata=DB::table('catagories')->get();
					
					
					@endphp
                            <div class="col-xl-7 col-lg-7">
                                <div class="categori-search-wrap">
                                    <div class="categori-style-1">
                                        <select class="nice-select nice-select-style-1">
                                            <option>All Categories </option>
											  @foreach($cata as $data)
                                            <option>{{$data->Cat_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="search-wrap-3">
                                        <form action="{{route('serachproductajax')}}" method="post" id="serach_from">
										@csrf
                                            <input placeholder="Search Products..." name="search"  type="text">
                                            <button type="submit" name="submit"><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="header-action header-action-flex">
                                   
                                   
                                    <div class="same-style-2 same-style-2-font-inc header-cart">
                                        <a class="cart-active" href="#">
                                           <i class="icon-basket-loaded"></i>
                                           <span class="pro-count green" id="total_cart_item">{{Cart::count()}}</span>

                                            <span class="cart-amount id="cart_amount">{{Cart::subtotal()}}TK</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="main-categori-wrap">
								@php
					
					$cata=DB::table('catagories')->get();
					
					
					@endphp
                                    <a class="categori-show" href="#"><i class="lnr lnr-menu"></i> All Department <i class="icon-arrow-down icon-right"></i></a>
                                    <div class="category-menu categori-hide">
                                        <nav>
                                            <ul>
                                               
                                                       
                                                         @foreach($cata as $data)
														 
                                                <li class="cr-dropdown"><a href="{{url('/catagory_product',$data->id)}}"> {{$data->Cat_name}}<span class="icon-arrow-right"></span></a>
                                                    @php

                                                          $sub=DB::table('sub_catagories')->where('Catagory_id',$data->id)->get();

                                                           @endphp	
                                                    
													
													@foreach($sub as $fa)	
												@if($fa->SubCatagory_name==NULL)
													
												@else		

													<div class="category-menu-dropdown ct-menu-res-height-2">
                                                        <div class="single-category-menu">
                                                        @foreach($sub as $res)
                                                     									
                                                            <ul>
															
                                                                <li><a href="{{url('/subcatagory_product',$res->id)}}">{{$res->SubCatagory_name}}</a></li>
                                                               
                                                           	@endforeach
														   </ul>
														  
															
                                                        </div>
														
 
                                                    </div>
													  @endif
                                                   	@endforeach

													
														
													
													
                                                </li>
												@endforeach
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-menu main-menu-padding-1 main-menu-font-size-14 main-menu-lh-2">
                                    <nav>
                                        <ul>
                                            
                                            
                                            
                                            <li><a href="{{url('/')}}">Home </a></li>
                                            <li><a href="{{url('/shop_page')}}">Shop </a></li>
                                            <li><a href="{{url('/frontend_brand')}}">Brand </a></li>
                                            <li><a href="{{url('/contact')}}">Contact </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="hotline">
                                    <p><i class="icon-call-end"></i> <span>Hotline</span>{{$data5->hotline}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="{{url('/')}}">
                                    <img alt="" src="{{asset('Image/amit.png')}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
							
							@if (Route::has('login'))
                                   @auth
							 
							 
							
							
							@else
							 <a href="{{url('/login')}}"><i class="icon-user">Login</i></a> 
                                       <a href="{{url('/register')}}" class="ml-2"><i class="icon-user">Register</i></a> 
							
							@endif
							@endauth
							
                                
                              
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count green" id="total_cart_item">{{Cart::count()}}</span>
							        <span class="cart-amount id="cart_amount">{{Cart::subtotal()}}TK</span>

                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mini cart start -->
		
		
		
		
		
		
		
		
		
		
		
        <div class="sidebar-cart-active" id="cart">
            
        </div>
        <!-- mobile header start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                   
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                
                               
                                <li><a href="{{asset(url('/'))}}">Home</a></li>
								<li><a href="{{url('/shop_page')}}">Shop </a></li>
                                <li><a href="{{url('/frontend_brand')}}">Brand</a></li>
                                <li><a href="{{url('/contact')}}">Contact us</a></li>
							    <li><a href="{{url('/order')}}" class="mr-3">Order Tracking</i></a></li> 

								@if (Route::has('login'))
                                   @auth
							   
						 <li><a href="{{url('/user_dashboard')}}">My Account</a></li>
						 @else
							 @endauth
						 @endif

                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
					
					 
					
					
					
					
                    <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
					@php
					
					$cata=DB::table('catagories')->get();
					
					
					@endphp
                        <a class="categori-show" href="#">
                            <i class="lnr lnr-menu"></i> All Department <i class="icon-arrow-down icon-right"></i>
                        </a>
                        <div class="categori-hide-2">
                            <nav>
                                <ul class="mobile-menu">
                                 @foreach($cata as $data)                              
			  <li class="menu-item-has-children"><a href="{{url('/catagory_product',$data->id)}}">{{$data->Cat_name}}</a>
			                            @php

                                                          $sub=DB::table('sub_catagories')->where('Catagory_id',$data->id)->get();

                                                           @endphp	
                                                    @foreach($sub as $res)
                                                <ul class="dropdown">
                                                    <li><a href="{{url('/subcatagory_product',$res->id)}}">{{$res->SubCatagory_name}}</a></li>
                                                    
                                                </ul>
											@endforeach

                                            </li>
											@endforeach
                                        </ul>
                                    </li>
                                </ul>
								
                            </nav>
                        </div>
                    </div>
					
					 
                  
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> {{$data5->hotline}}</li>
                            <li><i class="icon-envelope-open "></i> {{$data5->email}}</li>
                            <li><i class="icon-home"></i> {{$data5->address}}</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>