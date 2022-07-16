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
            <h1>Livelihoods Development and Economic Empowerment</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Livelihoods Development and Economic Empowerment</li>
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
                            <h2>Livelihoods Development and Economic Empowerment</h2>
                        </div>
                        <dir class="text pt30">
                            <p>Goal: To achieve sustainable livelihoods of the most vulnerable people, meeting their perceived needs and aspirations through economic, social, spiritual, environmental, and political changes.</p>
                            <p>We are working to establish an economically sustainable community where people save money individually and as a group. People use and share resources to carry out further development. People find jobs in their community and are capable to increase net capital flow. The brain-draining/migration decreased in the community.</p>
                        </dir>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection