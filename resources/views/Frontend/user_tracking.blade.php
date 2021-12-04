@include('Frontend.page.anheader')



 <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">order tracking</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- order tracking start -->
        <div class="order-tracking-area pt-110 pb-120">
            <div class="container">
			
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10 ml-auto mr-auto">
                        <div class="order-tracking-content">
                            <p>To track your order please enter your Order ID in the box below and press the "Track" button.</p>
                            <div class="order-tracking-form">
                                <form action="{{route('user.orderstatus')}}" method="post">
								@csrf
                                    <div class="sin-order-tracking">
                                        <label>Order ID</label>
                                        <input type="text" placeholder="Enter Your Order ID" name="order_id" required>
                                    </div>
                                   @if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                                    <div class="order-track-btn">
                                       <input type="submit" class="btn btn-danger" value="Submit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>























             @include('Frontend.page.footer')