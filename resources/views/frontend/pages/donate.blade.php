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
        <div class="image-layer lazy-image" data-bg="url('{{asset('frontend/images/background/bg-banner-1.jpg')}}')"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Make Donation</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Make Donation</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    
    <!--Donate Section-->
    <section class="donate-section">
        <div class="auto-container">
        	<div class="tabs-box">
                <div class="row clearfix">
                    
                    <!--Title Column-->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner">
                        	<h2>Please Make Your Donation</h2>
                            <figure class="image-box">
                                <img class="lazy-image" src="{{ asset('frontend/images/resource/image-spacer-for-validation.png') }}" data-src="{{ asset('frontend/images/resource/donate-image-1.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner">
                        	<div class="donate-form">
                                <form>
                                    <h3>Your Donation</h3>

                                    <div class="text-left">
                                        
                                        <div class="mb-3 mt-3">
                                            <img loading="lazy" src="{{ asset('frontend/images/b-kash-logo.jpg') }}" alt="">
                                        </div>

                                        <h5>Send your donation to the number below.</h5>

                                        <h4 class="mt-3">
                                            <strong>+880 1975 45 09 06 (Personal)</strong>
                                        </h4>
                                    </div>
                                </form>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>    
            </div>
        </div>
    </section>

@endsection