 <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Pal Creative Ltd</a></div>
    <div class="sl-sideleft">
      

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{route('admin.dashboard')}}" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="fa fa-home"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-list-alt"></i>
            <span class="menu-item-label">Catagories</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.catagory')}}" class="nav-link">Catagory</a></li>
          <li class="nav-item"><a href="{{route('admin.subcatagory')}}" class="nav-link">Sub-Catagory</a></li>
          <li class="nav-item"><a href="{{route('admin.brand')}}" class="nav-link">Brand</a></li>
         
        </ul>
		 <a href="{{route('admin.coupon')}}" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bullhorn"></i>
            <span class="menu-item-label">Coupon</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-product-hunt"></i>
            <span class="menu-item-label">Product</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('all.product')}}" class="nav-link">Add a Product</a></li>
          <li class="nav-item"><a href="{{route('show.all.product')}}" class="nav-link">All Product</a></li>
         
        </ul>
		   <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-shopping-cart"></i>
            <span class="menu-item-label">Order</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.order')}}" class="nav-link">Pending Order</a></li>
          <li class="nav-item"><a href="{{route('admin.accept.order')}}" class="nav-link">Accept Order</a></li>
          <li class="nav-item"><a href="{{route('admin.delivery.order')}}" class="nav-link">Hand Over to Delivery boy</a></li>
          <li class="nav-item"><a href="{{route('admin.success.order')}}" class="nav-link">Delivered Order</a></li>
          <li class="nav-item"><a href="{{route('admin.cancel.order')}}" class="nav-link">Cancle Order</a></li>
         
        </ul>
		  <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-product-hunt"></i>
            <span class="menu-item-label">Report</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.today.order')}}" class="nav-link">Today Report</a></li>
          <li class="nav-item"><a href="{{route('admin.today.deliveryorder')}}" class="nav-link">Today Delivery</a></li>
           <li class="nav-item"><a href="{{route('admin.today.thismonthorder')}}" class="nav-link">This Month</a></li>
          <li class="nav-item"><a href="{{route('admin.search_report')}}" class="nav-link">Search Report</a></li>

        </ul>
		 <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-product-hunt"></i>
            <span class="menu-item-label">Return Order</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{route('admin.return.product')}}" class="nav-link">Return Request</a></li>
          <li class="nav-item"><a href="{{route('admin.return.allproduct')}}" class="nav-link">All Request</a></li>
      

        </ul>
		 <a href="{{route('admin.setup.site')}}" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bullhorn"></i>
            <span class="menu-item-label">Site Settings</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
		 <a href="{{route('admin.show_contact')}}" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-bullhorn"></i>
            <span class="menu-item-label">Contact</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
       <a class="sl-menu-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
          <div class="sl-menu-item">
            <i class="fa fa-sign-out"></i>
            <span class="menu-item-label">Log Out</span>
			 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        
        
       
       
        
       
        
       
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->