@extends('layouts.frontend.master')

@section('title')
    {{ setting('meta_title') ?? old('meta_title') }}
@endsection
@section('description')
    {{ setting('meta_description') ?? old('meta_description') }}
@endsection
@section('keywords')
    {{ setting('meta_keyword') ?? old('meta_keyword') }}
@endsection

@section('content')

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url({{ asset('frontend/images/background/bg-banner-1.jpg')}})"></div>
       
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Join Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Join Us Now</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    
    
    <!--Contact Section-->
    <section class="contact-section">
        <div class="outer-container clearfix">
            
        	<div class="form-column clearfix">
                <div class="inner clearfix">
                
                    <div class="sec-title centered">
                        <div class="sub-title">Join us Now</div>
                        <h2>Leave a Message</h2>
                    </div>
                    
                    <!-- Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="{{ route('join-us') }}" id="contact-form" >
                            @csrf
                            <div class="row clearfix">                                    
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Your name" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Your Subject" required>
                                </div>
        
                                <div class="col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write your message" required></textarea>
                                </div>
        
                                <div class="col-md-12 col-sm-12 form-group text-center">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
        	</div>
            
            <!-- <div class="map-column clearfix">
            	<div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div> -->
            
        </div>
    </section>

@endsection