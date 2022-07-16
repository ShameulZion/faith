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
            <h1>Humanitarian Response</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Humanitarian Response</li>
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
                    <div class="inner commit-points drr-cca-section">
                        <div class="sec-title centered">
                            <h2>Humanitarian Response (emergency relief and rehabilitation)</h2>
                        </div>
                        <div class="text pt30">
                            <p>FIA considers the emergency needs of the natural and man made disaster victims. FIA immediately responds to the emergency needs of the people with all possible resources to mitigate the suffering of the victims to bring them back into normal life. FIA implements these types of projects for the short term. If requires, FIA responds with long-term commitment for rehabilitation and reconstruction of the socio-economic life of the people.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection