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
          <h1>KNH Germany</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Our Partners</li>
            <li class="active">KNH Germany</li>
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
                  <img src="{{ asset('frontend/images/partners/00_03.jpg') }}" alt="KNH Germany">
                </div>
                <p><b>Modelling Child Rights through Integrated Community Development Project:</b> Through Modelling Child Rights through Integrated Community Development Project, Faith in Action becomes a partner with KNH Germany. The project is going to complete the pilot phase of two years in June 30, 2021 and will launch the full phase of five years from the 1st July 2021 with the support of <b>KNH Germany</b> in five unions in Koyra Upazila in Khulna district.</p>
              </div>
            </div><!-- /.col-md-12 -->
          </div>          
        </div>
      </section>

@endsection