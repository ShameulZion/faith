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
        
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Commitment of FIA</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Commitment of FIA</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section style-two alternate">
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner commit-points">
                        <div class="sec-title centered">
                            <h2>Commitment of FIA</h2>
                        </div>
                        <dir>
                            <ul class="pt30">                                
                                <li>To free community from poverty, injustice and conflict</li>
                                <li>Empowering and transforming the community uniting them under Community Based Institutions</li>
                                <li>Building trust and confidence of people that “we are able”</li>
                                <li>Inclusion and Respect</li>
                                <li>Learning and innovative – trying new things and learning from others</li>
                                <li>Serving communities and Creating stronger people to people links</li>
                                <li>Ensuring transparency, accountability and good governance</li>
                            </ul>
                        </dir>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection