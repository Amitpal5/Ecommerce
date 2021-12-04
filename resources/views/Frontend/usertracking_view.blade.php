@include('Frontend.page.anheader')
<style type="text/css">




.container {
    margin-top: 50px;
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.10rem
}

.card-header:first-child {
    border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px
}

.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative
}

.track .step.active:before {
    background: #FF5722
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px
}

.track .step.active .icon {
    background: #ee5435;
    color: #fff
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd
}

.track .step.active .text {
    font-weight: 400;
    color: #000
}

.track .text {
    display: block;
    margin-top: 7px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.itemside .aside {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.img-sm {
    width: 80px;
    height: 80px;
    padding: 7px
}

ul.row,
ul.row-sm {
    list-style: none;
    padding: 0
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.itemside .title {
    display: block;
    margin-bottom: 5px;
    color: #212529
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.btn-warning {
    color: #ffffff;
    background-color: #ee5435;
    border-color: #ee5435;
    border-radius: 1px
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #ff2b00;
    border-color: #ff2b00;
    border-radius: 1px
}












</style>


 <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="active">order tracking Result</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- order tracking start -->
       <div class="container">
    <article class="card">
        <header class="card-header"> My Orders Tracking </header>
        <div class="card-body">
		
            <h6>Order ID: {{$order->order_id}}</h6>
            <article class="card">
                <div class="card-body row">
				@if($order->Status == 0)
                  <div class="col"> <strong>Status:</strong> <br> Pending</div>
			     @elseif($order->Status == 1)
			     <div class="col"> <strong>Status:</strong> <br> Order Confirmed</div>
				  @elseif($order->Status == 2)
			     <div class="col"> <strong>Status:</strong> <br> Hand Over Delivery Man</div>
				  @elseif($order->Status == 3)
			     <div class="col"> <strong>Status:</strong> <br> Delivered</div>

			  
			    @else
		 <div class="col"> <strong>Status:</strong> <br> Cancle</div>
	 @endif

                  <div class="col"> <strong>Tracking #:</strong> <br> {{$order->order_id}} </div>
                </div>
				<br />
				<div class="progress">
				
				@if($order->Status == 0)
	 <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
      @elseif($order->Status == 1)
	 <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
     <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
     @elseif($order->Status == 2)
	 <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
     <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
	  <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
   @elseif($order->Status == 3)
   <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
     <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
	  <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
     <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

   
   
	   @else
		   
				
				
@endif

</div>
<br />
<div class="container">
@if($order->Status == 0)
<h4>Note:Your Order are review</h4>
@elseif($order->Status == 1)
<h4>Note:Your Order are Accept</h4>
@elseif($order->Status == 2)
<h4>Note:Your Order are Handover Delivery Man</h4>
@elseif($order->Status == 3)
<h4>Note:Your Order are Succesfully Deliverd</h4>
@else
	<h4>Note:Your Order are Cancel</h4>

@endif
</div>
            
          
            <hr> <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to Shop Page</a>
        </div>
    </article>
</div>

<div class="container">


<h3>Order Details</h3>
<table class="table table-striped">
<tr>
<th>Payment Method</th>
<td>{{$order->Payment_method}}</td>

</tr>
<tr>
<th>Sub Total</th>
<td>{{$order->sub_total}} TK</td>

</tr>
<tr>
<th>Shipping Charge</th>
<td>{{$order->shipping_charge}}</td>

</tr>
<tr>
<th>Total</th>
<td>{{(int)$order->sub_total  + (int)$order->shipping_charge }} TK</td>

</tr>
<tr>
<th>Order Date</th>
<td>{{$order->date}}-{{$order->month}}-{{$order->year}}</td>

</tr>







</table>
</div>





















             @include('Frontend.page.footer')