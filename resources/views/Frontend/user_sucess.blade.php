@include('Frontend.page.anheader')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order From</title>
    <!-- bootstrp link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <style type="text/css">
   
   .order-confirm{
	   
	   border:2px dotted;
	   
   }
   
   
   
   
   </style>
</head>
<body>
@if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
    <!-- header section -->
    <section class="header title mt-3">
    <div class="container text-center">
        <h2>Your Order will be delivered within <span class="text-danger">'24 to 48 hour'</span></h2>

        <h3 class="order-confirm text-success text-center mt-5 p-4">Thank You,Your order has been recived</h3>
    </div>
    <div class="container order-info mt-5">
        <div class="container">
            <div class="row">
              <div class="col">
                  <p class="fw-bold">Order number</p>
                  <p>{{$order->order_id}}</p>
              </div>
              <div class="col">
                  <p class="fw-bold">Date</p>
                  <p>{{$order->date}}/{{$order->month}}/{{$order->year}}</p>
              </div>
              <div class="col">
                  <p class="fw-bold">Total</p>
                  <p>{{$order->sub_total}}</p>
              </div>
              <div class="col">
                  <p class="fw-bold">payment method</p>
                  <p >{{$order->Payment_method}} <span>(inside dhaka only)</span></p>  
              </div>
              <p class="text-center mt-5">Pay With cash upon delivary</p>
            </div>
    </div>
    </section>

    <!-- end header tiitle section -->

    <!-- start order  histroy section -->
    <section class="order-history"> 
    <h2 class="text-center mt-5">ORDER DETAILS</h2>
    <div class="container pricing-section mt-4">
        <div class="price mt-5">
            <table class="table table-hover">
                <tbody>
				
                    <tr>
                        <td class="fw-bold">Product</td>
                        <td>
                            <span class="fw-bold">$Total</span>
                        </td>
                    </tr>
					@foreach($order_detail as $row)
                    <tr>
                        <td>{{$row->product_Name}} * {{$row->Qty}}</td>
                        <td>
                            <span id="">{{$row->Totla_price}} TK</span>
                        </td>
                    </tr>
                  @endforeach
                    <tr>
                        <td class="fw-bold">Subtotal</td>
                        <td>$
                            <span class="fw-bold">{{$order->sub_total}} TK</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Shipping Cost</td>
                        <td>$
                            <span class="fw-bold">{{$order->shipping_charge}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Payment Method</td>
                        <td>
                            <p>Cash on delivary(inside on dhaka)</p>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <td class="fw-bold">TOTAL</td>
                    <td>
					<input type="hidden" value="{{(int)$total=(int)$order->sub_total + (int)$order->shipping_charge}}" />
                        <span class="fw-bold">{{$total}} TK</span>
                    </td>
                </tfoot>
				
            </table>
        </div>
    </div>
    </section>

</body>
</html>






<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>




















@include('Frontend.page.footer')
