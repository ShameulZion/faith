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
          <h1>SCAN Bangladesh</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Networking</li>
            <li class="active">SCAN Bangladesh</li>
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
            <div class="col-md-8 mb-5">
              <div class="our_partners">
                <div class="mb-4">
                  <img src="{{ asset('frontend/images/networking/00_01.jpg')}}" alt="SCAN Bangladesh">
                </div>
                <p>A Platform for individual activists who are working/advocating for the betterment and rights of the Street Children of Bangladesh. Faith in Action is a potential member of the Network.</p>
              </div>
            </div><!-- /.col-md-12 -->
          </div>          
        </div>
      </section>

@endsection