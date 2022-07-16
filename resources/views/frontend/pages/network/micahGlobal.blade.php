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
          <h1>Micah Global</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Networking</li>
            <li class="active">Micah Global</li>
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
                  <img src="{{ asset('frontend/images/networking/00_02.jpg') }}" alt="Micah Global">
                </div>
                <p>Micah is a global network of Christian ministries and individuals who are united by their shared passion for integral mission. Micah was established in 1999 to answer the question asked in Micah 6:8.</p>
                
                <blockquote>"What does the Lord require of us? To Act justly, to love mercy, to walk humbly with our God." Micah 6:8</blockquote>

                <p>Micah Global is an international network of Christians active in relief, development, care and advocacy. Micah Global members actively seek solidarity, learning and action with other members beyond their own contexts. They become part of country, regional and global communities of members. These communities form the basis for mutual capacity strengthening; communicating about their context and work; and taking collaborative action. It current member is 850 from 99 countries. Faith in Action is also a full member of Micah Global since 2016.</p>
              </div>
            </div><!-- /.col-md-12 -->
          </div>          
        </div>
      </section>

@endsection