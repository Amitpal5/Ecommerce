<footer class="footer-area bg-gray pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info-wrap">
                            <div class="footer-logo">
                                <a href="#"><img src="{{asset('Image/amit.png')}}" alt="logo"></a>
                            </div>
							
							  @php
			$data5=DB::table('sites')->first();

		@endphp
							
                            <div class="single-contact-info">
                                <span>Our Location</span>
                                <p>{{$data5->address}}</p>
                            </div>
                            <div class="single-contact-info">
                                <span>24/7 hotline:</span>
                                <p>{{$data5->hotline}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-right-wrap">
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                       <li><a href="{{asset(url('/'))}}">Home</a></li>
								<li><a href="{{url('/shop_page')}}">Shop </a></li>
                                <li><a href="{{url('/frontend_brand')}}">Brand</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="social-style-2 social-style-2-mrg">
                              
                                <a href="{{$data5->facebook_id}}"><i class="social_facebook"></i></a>
                                <a href="{{$data5->gmail_id}}"><i class="social_googleplus"></i></a>
                                <a href="www.instagram.com"><i class="social_instagram"></i></a>
                                <a href="www.youtube.com"><i class="social_youtube"></i></a>
                            </div>
                            <div class="copyright">
                                <p>Copyright © 2021 Pal Creative Ltd | Built with <span>Pal Craetive Ltd</span> by Amit Paul</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
       
    </div>

    <!-- All JS is here
============================================ -->
    <!-- 
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>

<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="assets/js/plugins/jquery.instagramfeed.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/sticky-sidebar.js"></script>
<script src="assets/js/plugins/easyzoom.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/ajax-mail.js"></script>  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above  -->
  
  <script src="{{asset('frontend/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/plugins.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 

</body>


</html>