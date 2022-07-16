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
            <h1>Leagal Status</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Leagal Status</li>
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
                            <h2>Leagal Status</h2>
                        </div>
                        <dir class="text pt30">
                            Faith in Action is registered with the Social Services Department of the People’s Republic of Bangladesh Government. Registration no is Mag. 584/2010, dated. January 06, 2010, and NGOAB registration is 2780, dated April 09, 2013, and has renewed for the next 10 years on the 22nd June 2018.
                        </dir>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection