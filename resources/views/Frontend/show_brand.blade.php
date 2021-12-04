@include('Frontend.page.anheader')
<div class="breadcrumb-area bg-gray" style="background-image:url('{{ asset('Image/back.jpg')}}');">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="active">Shop By Brand </li>
                    </ul>
                </div>
            </div>
        </div>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <div class="shop-area pt-120 pb-120">
		
           <div class="container">
		   <div class="row">
		   @foreach($brand_show as $data2)
		   <div class="col-lg-2 col-md-4 col-sm-4">
		   <a href="{{url('/brand_page',$data2->id)}}"><img src="{{('Image/').$data2->Brand_logo}}" alt="" /></a>
		   </div>
		   
		   
		   
		   @endforeach
		   </div>
		   
		   
		   
		   
		   
		   
		   </div>
            </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script type="text/javascript">


$(document).ready(function(){
$('.addcart').on('click',function(){

var id=$(this).data('id');
if(id){

$.ajax({
url:"{{url('add/to/product')}}/"+id,
type:"GET",
dataType:"json",
 success:function(data) {
	
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

if($.isEmptyObject(data.error)){
	
Toast.fire({
  icon: 'success',
  title: 'Succefully Added To Cart',
})	
	
	
}

else{
	Toast.fire({
  icon: 'error',
  title: 'data.error',
})	
	
	
}

},

});

}


});
});

</script>

























@include('Frontend.page.footer')