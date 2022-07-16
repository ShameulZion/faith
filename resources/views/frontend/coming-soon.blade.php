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

<div class="page-wrapper">
<!--     <header class="main-header"  id="header">
    </header> -->
    <section class="about-section style-two alternate" style="height: 100vh;">
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner commit-points coming-soon-section text-center">
                        <div class="sec-title centered">
                            <h2>COMING SOON</h2>
                        </div>
                        <div class="text pt30">
                        	<h3>This page is in under construction and will be available very soon. Till then please stay connected.</h3>
                        	<div class="link-box"><a href="index.html" class="theme-btn btn-style-one"><span class="btn-title">Go to Home</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection