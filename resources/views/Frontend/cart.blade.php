@include('Frontend.page.anheader')
<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="active">Cart Page </li>
                    </ul>
                </div>
            </div>
        </div>
		@php
		
		$cart=Cart::content();
		
		
		
		@endphp
		  @if($cart->count()> 0)

		@if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('update'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('update')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
        <div class="cart-main-area pt-115 pb-120">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                       
                            <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Until Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cart as $data)
    <tr>
      <th scope="row">{{$data->name}}</th>
      <td>{{$data->price}} TK</td>
	   
          <td>
			<form action="{{route('update.cart')}}" method="post">
				{{ csrf_field()}}
				<input type="hidden" name="product_id" value="{{$data->rowId}}" />
				<input type="number" name="qty" value="{{$data->qty}}" style="width:60px;">
				<button type="submit" class="btn btn-success btn-sm"><i class="icon-check"></i></button>
			   
			</form>
          </td>
       
      <td>{{$data->subtotal()}} TK</td>
      <td>
	  
	  <a href="{{url('remove/cart/'.$data->rowId)}}"><i class="icon-close" style="font-size:20px;"></i></a>
	  
	  
	  
	  </td>
    </tr>
    @endforeach
  </tbody>
</table>
                      
    </div>
	
	 <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
								
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>Total products <span>{{Cart::subtotal()}}TK</span></h5>
                                   
                                  <h4 class="grand-totall-title">Grand Total <span>{{Cart::subtotal()}}TK</span></h4>
                                   
                                   <a href="{{route('user.checkout')}}">Proceed to Checkout</a><br />
                                   <a href="{{url('/')}}">Continue Shopping</a>
                                </div>
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




 













@include('Frontend.page.footer')

