@include('Frontend.page.anheader')

 <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                      </li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
		@php
		
		$data=DB::table('sites')->first();
		
		
		
		@endphp
        <!-- my account wrapper start -->
        <div class="contact-area pt-115 pb-120">
            <div class="container">
                <div class="contact-info-wrap-3 pb-85">
                    <h3>contact info</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 text-center mb-30">
                                <i class="icon-location-pin "></i>
                                <h4>our address</h4>
                                <p>{{$data->address}}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                                <ul>
                                    <li><i class="icon-screen-smartphone"></i>{{$data->hotline}}</li>
                                    <li><i class="icon-envelope "></i> <a href="#">{{$data->email}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 text-center mb-30">
                                <i class="icon-clock "></i>
                                <h4>openning hour</h4>
                                <p>Monday - Friday. 9:00am - 5:00pm </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="get-in-touch-wrap">
                    <h3>Get In Touch</h3>
                    <div class="contact-from contact-shadow">
                        <form action="{{route('userfrom.contact')}}" method="post">
						@csrf
						@if(session('error'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('error')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input name="name" type="text" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input name="email" type="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input name="subject" type="text" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <textarea name="message" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button class="submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                      
                    </div>
                </div>
                <div class="contact-map pt-120">
                    <div id="map"></div>
                </div>
            </div>
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