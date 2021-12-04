@include('Frontend.page.anheader')

 <div class="breadcrumb-area bg-gray" style="background-image:url('{{ asset('Image/back.jpg')}}')";>
            <div class="container">
                <div class="breadcrumb-content text-center" >
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="active">Order Details</li>
                    </ul>
                </div>
            </div>
        </div>
		<div class="container" style="padding:20px;">
		
		<div class="row">
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Qty</th>
      <th scope="col">Price</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
  @php($i=1)
  @foreach($orderdet as $data)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$data->product_Name}}</td>
      <td>{{$data->Qty}}</td>
      <td>{{$data->Single_Price}}</td>
      <td>{{$data->Totla_price}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
		
		
		
		
		
		
		
		
	
		
		
		
		
		
		</div>
		
		
		
		
		
		
		
		
		
		</div>
        <!-- my account wrapper start -->
      



























             @include('Frontend.page.footer')