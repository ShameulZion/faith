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
          <h1>Tearfund Australia</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Our Partners</li>
            <li class="active">Tearfund Australia</li>
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
                  <img src="{{ asset('frontend/images/partners/00_01.jpg') }}" alt="Tearfund Australia">
                </div>
                <p><b>Tearfund Australia:</b> Faith in Action becomes a partner with Tearfund Australia Since July 2013 through Integrated Community Development Project. The project is implementing in Mohammadpur and Sadar Upazila of Magura district and Boalmari Upazila of Faridpur district.</p>
              </div>
            </div><!-- /.col-md-12 -->
          </div>          
        </div>
      </section>

@endsection