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
          <h1>Bangladesh Govt</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Our Partners</li>
            <li class="active">Bangladesh Govt</li>
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
                  <img src="images/partners/00_09.jpg" alt="Bangladesh Govt">
                </div>
                <p>FIA is implementing VGD program with the Women Affairs Department under the Women and Children Ministry since 2014 in diffrent upazilas of Khagrachari districts.</p>
              </div>
            </div><!-- /.col-md-12 -->
          </div>          
        </div>
      </section>

@endsection