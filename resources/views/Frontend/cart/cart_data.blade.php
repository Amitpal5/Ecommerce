<div class="sidebar-cart-all">
    <a class="cart-close" href="#"><i class="icon_close"></i></a>
    <div class="cart-content">
        <h3>Shopping Cart</h3>
		@foreach($cart as $data)
        <ul>
		
            <li class="single-product-cart">
               
				
                <div class="cart-title">
                    <h4><a href="#"></a>{{$data->name}}</h4>
                    <span>{{$data->price}} TK</span>
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
            <a class="no-mrg btn-hover cart-btn-style" href="{{route('user.checkout')}}">checkout</a>
        </div>
    </div>
</div>