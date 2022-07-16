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
          <h1>Anual Reports</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Anual Reports</li>
          </ul>
        </div>
      </section>
      <!--End Banner Section -->

      <section class="about-section style-two alternate">
        <div class="top-rotten-curve"></div>
        <div class="bottom-rotten-curve"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="left-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner commit-points drr-cca-section">
                        <div class="sec-title centered">
                            <h2>Anual Reports</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                @forelse($reports as $report)
                <div class="event-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ url($report->slug) }}">
                                    @foreach($report->media as $attachment)
                                        @if($attachment->mime_type == "video/mp4")
                                            <video  height="268px" src="{{ $report->getFirstMediaUrl('attach') }}" controls></video>
                                        @elseif($attachment->mime_type == "application/pdf")
                                            <iframe width="100%" height="268px" src="{{ $report->getFirstMediaUrl('attach') }}" frameborder="0"></iframe>
                                        @else
                                            <img width="100%" height="268px" class="lazy-image loaded" src="{{ $report->getFirstMediaUrl('attach') }}" alt="{{ $report->title }}" data-was-processed="true"/>
                                        @endif
                                    @endforeach
                                </a>
                            </figure>
                            <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url($report->slug) }}">{{ $report->title }}</a></h3>
                            @if(!empty($report->content))
                            <div>{!! $report->content !!}</div>
                            @endif
                            <div class="link-box mt-3">
                                <a href="{{ url($report->slug) }}" class="theme-btn btn-style-two"><span class="btn-title">Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="event-block-three col-lg-4 col-md-6 col-sm-12">
                    <h4>No data Found</h4>
                </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection