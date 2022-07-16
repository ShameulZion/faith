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
        <div class="image-layer lazy-image" data-bg="url({{asset('frontend/images/background/bg-banner-1.jpg')}})"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Policy & Guidelines</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Policy & Guidelines</li>
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
                            <h2>Where we Work</h2>
                        </div>
                        <div class="text pt30">
                            FIA has developed a framework for its next five years strategic plan and set up the “Theory of Change” in 2017. This strategic plan focuses the areas like; WASH, DRR & CCA, Inclusion, Resilient Livelihood & Food Security, health and nutrition, inclusive education and linkage, networking and advocacy. At the first stage FIA launched the programmes in southern Parts of Bangladesh especially in Magura, Faridpur and Barguna Districts. It has also brought the Khagrachar District under its service. Consecutively, strategic plan suggested to mobilize resource for expanding the programmes other climate change vulnerable and disaster-prone areasas well as other parts of the country.
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <img src="images/map.jpg" alt="">
                </div><!-- /.col-md-12 -->
            </div>
        </div>
    </section>
    
@endsection