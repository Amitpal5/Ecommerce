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
	

</head>


<body>

    <div class="main-wrapper">
        <header class="header-area">
            <div class="container">
                <div class="header-large-device">
                   <div class="header-top header-top-ptb-1 border-bottom-1">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="header-offer-wrap">
                                    <p><i class="icon-paper-plane"></i> FREE SHIPPING Bangladesh wide for all orders over <span>3000 TK</span></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="header-top-right">
								
								
								@if (Route::has('login'))
                                   @auth
							   
								
								
								
                                    <div class="same-style-wrap" style="margin-right:100px;">
                                        
                                        <div class="same-style same-style-border language-wrap">
                                            <a class="language-dropdown-active" href="#">My Account <i class="icon-arrow-down"></i></a>
                                            <div class="language-dropdown">
                                                <ul>
                                                    <li><a href="{{url('/user_dashboard')}}">Profile</a></li>
                                                     
                                                </ul>
                                            </div>
                                        </div>
                                      
                                    </div>
                                     @else
										<div class="col-xl-4 col-lg-5" style="margin-right:100px;">
                                <div class="header-top-right">
                                    <div class="same-style-wrap">
                                       
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
              <div class="header-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                          
                            <div class="col-lg-6">
                                <div class="main-menu main-menu-padding-1 main-menu-font-size-14 main-menu-lh-2">
                                    <nav>
                                        <ul>
                                            
                                            
                                            
                                            <li><a href="{{url('/')}}">Home </a></li>
											<li><a href="{{url('/shop_page')}}">Shop </a></li>
                                <li><a href="{{url('/frontend_brand')}}">Brand</a></li>
                                            <li><a href="contact.html">CONTACT </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="hotline">
                                    <p><i class="icon-call-end"></i> <span>Hotline</span> {{$data5->hotline}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="header-small-device small-device-ptb-1">
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
							    <div class="single-mobile-header-info">
                            <a class="mobile-currency-active" href="#">My Account <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown curr-dropdown-active">
                               <ul>
                                                    <li><a href="{{url('/user_dashboard')}}">Profile</a></li>
                                                     
                                                </ul>
                            </div>
                        </div>
							
							
							
							@else
							 <a href="{{url('/login')}}"><i class="icon-user">Login</i></a> 
                                       <a href="{{url('/register')}}" class="ml-2"><i class="icon-user">Register</i></a> 
							
							@endif
							@endauth
                                <div class="same-style-2 header-cart">
                                      <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count green">{{Cart::count()}}</span>
							        <span class="cart-amount">{{Cart::subtotal()}}TK</span>

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
        <!-- Mobile menu start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="header-offer-wrap mobile-header-padding-border-4">
                        <p><i class="icon-paper-plane"></i> FREE SHIPPING Bangladesh wide for all orders over <span>3000 TK</span></p>
                    </div>
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
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
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
        <!-- mini cart start -->
		
			@php
		
		$cart=Cart::content();
		
		
		
		
		
		@endphp
		
		
		
		
		
         <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
					@foreach($cart as $data)
                    <ul>
					
                        <li class="single-product-cart">
                           
							
                            <div class="cart-title">
                                <h4><a href="#">{{$data->name}}</a></h4>
                                <span>{{$data->price}}</span>
								 qty:<span>{{$data->qty}}</span>

                            </div>
                            <div class="cart-delete">
                                	  <a href="{{url('remove/cart/'.$data->rowId)}}"><i class="icon-close" style="font-size:20px;"></i></a>
                            </div>
                        </li>
                       
                    </ul>
					@endforeach
                    <div class="cart-total">
                        <h4>Subtotal: <span>{{Cart::subtotal()}}</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="{{route('user.cart')}}">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
            </div>
        </div>