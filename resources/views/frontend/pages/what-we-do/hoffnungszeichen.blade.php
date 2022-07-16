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
          <h1>Hoffnungszeichen | Sign of Hope e.V.</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Our Partners</li>
            <li class="active">Hoffnungszeichen | Sign of Hope e.V.</li>
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
                  <img src="{{ asset('frontend/images/partners/00_07.jpg')}}" alt="Hoffnungszeichen | Sign of Hope e.V.">
                </div>
                <p><b>Hoffnungszeichen | Sign of Hope e.V.</b> works to protect the rights of people in distress and to meet their needs for assistance. The organization is headquartered in Konstanz, Germany. Our work is informed by spiritual beliefs, yet not affiliated with any denomination. FIA established partnership with Sign of Hope Germany with the aim to work in the area of sustainable livelihood, Child rights and protection, food security and WASH, and Climate Change Adaptation for the marginalized people in Bangladesh and humanitarian support to the disaster victims. Currently Sign of Hope is supporting FIA to implement Emergency Relief and Child Protection Project among the the Rohingya and Host Community in Cox’s Bazar and Bhasan Char.</p>
              </div>
            </div><!-- /.col-md-12 -->
          </div>          
        </div>
      </section>

@endsection