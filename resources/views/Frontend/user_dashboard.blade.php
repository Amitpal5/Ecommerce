@include('Frontend.page.anheader')

 <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                      </li>
                        <li class="active">my account </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- my account wrapper start -->
        <div class="my-account-wrapper pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                            Dashboard</a>
                                        <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                        <a href="#returnorders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Return Orders</a>
                                       
                                         
                                      
                                        <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Password change</a>
										<form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                   <i class="fa fa-sign-out"></i> Logout</a>
                            </form>
										
                                       
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->
                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">

                                                <h3>Dashboard</h3>
                                                <div class="welcome">
											
                                                    <p>Hello,{{ Auth::user()->name }} <strong></strong></p>
                                                </div>

                                                <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                            </div>
											
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order ID</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
														@foreach($order as $data)
                                                            <tr>
                                                                <td>{{$data->order_id}}</td>
                                                                <td>{{$data->date}}-{{$data->month}}-{{$data->year}}</td>
                                                                <td>@if($data->Status == 0)
			<span class="badge badge-warning">Pendding</span>
			@elseif($data->Status	== 1)
			<span class="badge badge-info">Accept Order</span>
			@elseif($data->Status	== 2)
			<span class="badge badge-info">Hand Over to Delivery boy</span>
			@elseif($data->Status	== 3)
			<span class="badge badge-success">Delivered</span>

			
			
			
			@else
				<span class="badge badge-danger">Cancel</span>
			@endif</td>
                                                                <td>{{(int)$data->sub_total + (int)$data->shipping_charge}} TK</td>
                                                                <td><a href="{{url('/order_details',$data->order_id)}}" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                           @endforeach 
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
										 <div class="tab-pane fade" id="returnorders" role="tabpane2">
                                            <div class="myaccount-content">
                                                <h3>Return Orders</h3>
												 @if(session('error'))
		              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('error')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                    @endif
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order ID</th>
                                                                <th>Date</th>
																<th>Return</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
														@foreach($order as $data)
                                                            <tr>
                                                                <td>{{$data->order_id}}</td>
                                                                <td>{{$data->date}}-{{$data->month}}-{{$data->year}}</td>
																<td>
																
																@if($data->return_order == NULL)
															<span class="badge badge-warning">No Return</span>
                                                            	@elseif($data->return_order	== 0)
			                                       <span class="badge badge-waring">No Return</span>
												       @elseif($data->return_order	== 1)
			                                       <span class="badge badge-waring">Pending</span>
																@else
																  <span class="badge badge-success">Success</span>
																@endif
									</td>
	         <td>@if($data->Status == 0)
			
               <span class="badge badge-warning">Pendding</span>
			@elseif($data->Status	== 1)
			<span class="badge badge-info">Accept Order</span>
			@elseif($data->Status	== 2)
			<span class="badge badge-info">Hand Over to Delivery boy</span>
			@elseif($data->Status	== 3)
			<span class="badge badge-success">Delivered</span>
			
			
			
			@else
				<span class="badge badge-danger">Cancel</span>
			@endif</td>
                                                                <td>{{(int)$data->sub_total + (int)$data->shipping_charge}} TK</td>
																
                                                                <td>
																@if($data->Status == 3)
																@if($data->return_order == NULL)
																
										<a href="{{url('/return_product',$data->id)}}" class="check-btn sqr-btn ">Return Product</a></td>

                                                            	@elseif($data->return_order	== 0)
			                             <a href="{{url('/return_product',$data->id)}}" class="check-btn sqr-btn ">Return Product</a></td>

														@else
                                                        <h4>Request are Done</h4>  
                                                         @endif
                                                     											 
															@else
                                                            <h4>Request not possible</h4>	
                                                              @endif														
																
																
                                                          
                                                         


														  </tr>
                                                           @endforeach 
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content Start -->
                                      
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                    
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Password change</h3>
                                                <div class="account-details-form">
                                                    <form action="{{route('user.updatepassword')}}" method="post" >
                                                       
                                                       @csrf
                                                       @if(session('error'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('error')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
 @csrf
                                                       @if(session('Error'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Error')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                                                       
                                                          
                                                            <div class="single-input-item">
                                                                <label for="current-pwd" class="required">Current Password</label>
                                                                <input type="password" id="current-pwd" name="old" required>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="new-pwd" class="required">New Password</label>
                                                                        <input type="password" id="new-pwd" name="new_password" required >
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                        <input type="password" id="confirm-pwd" name="confirm" required>
																		
																		
																		
																		
																		
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        <div class="single-input-item">
                                                            <button type="submit" class="check-btn sqr-btn ">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>































             @include('Frontend.page.footer')