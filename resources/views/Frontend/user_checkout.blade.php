@include('Frontend.page.anheader')

 <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="active">Checkout </li>
                    </ul>
                </div>
            </div>
        </div>
		@php
		
		$cart=Cart::content();
		
		
		
		@endphp
		  @if($cart->count()> 0)
        <div class="checkout-main-area pt-120 pb-120">
            <div class="container">
                @if(Session::has('coupon'))
                
				@else
					<div class="customer-zone mb-20">
                    <p class="cart-page-title">Have a coupon? <a class="checkout-click3" href="#">Click here to enter your code</a></p>
                    <div class="checkout-login-info3">
                        <form action="{{route('apply.coupon')}}" method="post">
						@csrf
                            <input type="text" name="coupon_code" placeholder="Coupon Code">
                            <input type="submit" value="Apply Coupon">
                        </form>
                    </div>
                </div>
				@endif
                <div class="checkout-wrap pt-30">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap mr-50">
                                <h3>Billing Details</h3>
								<form action="{{route('user.details')}}" method="post">
								@csrf
                                <div class="row">
								
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <label>First Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="fname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <label>Last Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="lname" required>
                                        </div>
                                    </div>
                                 
                                   
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                            <input class="billing-address" placeholder="Enter Your Address" type="text" name="address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="town" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>District <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="district" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="zip" required>
                                        </div>
                                    </div>
									 <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Country / Region * <abbr class="required" title="required">*</abbr></label>
                                           <b>Bangladesh</b>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Phone <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="phone"  pattern="[01]{2}[0-9]{9}" title="Phone number with 01 and remaing 9 digit with 0-9" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="additional-info-wrap">
                                    <label>ADDITIONAL INFORMATIONS</label>
                                    <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message" name="addtional"></textarea>
                                </div>
								<input type="hidden" name="shipping_charge" value="60 TK" />
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="your-order-area">
                                <h3>Your order</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-info">
                                            <ul>
                                                <li>Product <span>Total</span></li>
                                            </ul>
                                        </div>
											@foreach($cart as $data)
                                        <div class="your-order-middle">
									
                                            <ul>
											
                                                <li>{{$data->name}} X {{$data->qty}} <span>{{$data->price}}TK </span></li>
                                               
                                            </ul>
											@endforeach
                                        </div>
										     @if(Session::has('coupon'))

                                        <div class="your-order-info order-subtotal">
                                            <ul>
                                                <li>Subtotal <span>{{Cart::subtotal()}} TK</span></li>
            <li>Discount: {{Session()->get('coupon')['Discount']}}% <span>{{$dis=Cart::subtotal()
			* Session()->get('coupon')['Discount'] /100 }}TK</span></li>
                                           
										   </ul>
											
                                        </div>
										
                                       
                                        <div class="your-order-info order-total">
                                            <ul>
                                                <li>Total <span>{{$total=Cart::subtotal()-$dis}} TK</span></li>
												<input type="hidden" name="total" value="{{$total}}" />
                                            </ul>
                                        </div>
										@else
											 <div class="your-order-info order-subtotal">
                                            <ul>
                                                <li>Subtotal <span>{{Cart::subtotal()}} TK</span></li>
                                            </ul>
											
                                        </div>
										 <div class="your-order-info order-total">
                                            <ul>
                                                <li>Total <span>{{Cart::subtotal()}} TK</span></li>
                                            </ul>
                                        </div>
										
										@endif
										
                                    </div>
                                    <div class="payment-method">
                                        
                                      
                                        <div class="pay-top sin-payment">
                                            <input id="payment-method-3" class="input-radio" type="radio"  name="cash_one" value="Cash On Delivery" required>
                                            <label for="payment-method-3">Cash on delivery </label>
                                          
                                        </div>
										 
                                        
                                    </div>
                                </div>
                                <div class="Place-order">
                      <input type="Submit" class="btn btn-danger" value="Place Order" />
                                </div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		@else
			<div class="card">
  <div class="card-body text-center">
    <h2>Your Cart is empty</h2>
	<a href="{{url('/')}}" class="btn btn-primary">Continue Shopping</a>
</div>
		
		
		
		@endif
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



@include('Frontend.page.footer')
