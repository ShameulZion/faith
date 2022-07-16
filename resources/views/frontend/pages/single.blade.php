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
@if(!empty($events))
    @foreach($events as $event)
        <!-- Page Banner Section -->
        <section class="page-banner">
            <div class="image-layer lazy-image" data-bg="url('{{ asset('frontend/images/projects/Banner-2.jpg')}}')"></div>
            <div class="bottom-rotten-curve alternate"></div>
            <div class="auto-container">
                <h1>{{ $event->title }}</h1>
            </div>
        </section>
        <!--End Banner Section -->

        <!--About Section-->
        <section class="about-section style-two alternate">
            <div class="circle-one"></div>
            <div class="circle-two"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Event Block Start-->
                    <div class="event-block-three col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                            <div class="image-box">
                                <figure class="image">
                                    @foreach($event->media as $attachment)
                                        @if($attachment->mime_type == "video/mp4")
                                            <video src="{{ $event->getFirstMediaUrl('attach') }}" controls width="100%"></video>
                                        @elseif($attachment->mime_type == "application/pdf")
                                            <iframe width="100%" height="720px" src="{{ $event->getFirstMediaUrl('attach') }}" frameborder="0"></iframe>
                                        @else
                                            <img class="lazy-image loaded" src="{{ $event->getFirstMediaUrl('attach') }}" alt="{{ $event->title }}" data-was-processed="true" />
                                        @endif
                                    @endforeach
                                </figure>
                                <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                            </div>
                            @if(!empty($event->content))
                            <div class="lower-content">
                                <h3>{{ $event->title }}:</h3>
                                <div>{!! $event->content !!}</div>
                            </div> 
                            @endif
                        </div>
                    </div>
                    <!--//Event Block End-->
                </div>
            </div>
        </section>
    @endforeach
@endif
@if(!empty($reports))
    @foreach($reports as $event)
        <!-- Page Banner Section -->
        <section class="page-banner">
            <div class="image-layer lazy-image" data-bg="url('{{ asset('frontend/images/projects/Banner-2.jpg')}}')"></div>
            <div class="bottom-rotten-curve alternate"></div>
            <div class="auto-container">
                <h1>{{ $event->title }}</h1>
            </div>
        </section>
        <!--End Banner Section -->

        <!--About Section-->
        <section class="about-section style-two alternate">
            <div class="circle-one"></div>
            <div class="circle-two"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Event Block Start-->
                    <div class="event-block-three col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                            <div class="image-box">
                                <figure class="image">
                                    @foreach($event->media as $attachment)
                                        @if($attachment->mime_type == "video/mp4")
                                            <video src="{{ $event->getFirstMediaUrl('attach') }}" controls width="100%"></video>
                                        @elseif($attachment->mime_type == "application/pdf")
                                            <iframe width="100%" height="720px" src="{{ $event->getFirstMediaUrl('attach') }}" frameborder="0"></iframe>
                                        @else
                                            <img class="lazy-image loaded" src="{{ $event->getFirstMediaUrl('attach') }}" alt="{{ $event->title }}" data-was-processed="true" />
                                        @endif
                                    @endforeach
                                </figure>
                                <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                            </div>
                            @if(!empty($event->content))
                            <div class="lower-content">
                                <h3>{{ $event->title }}:</h3>
                                <div>{!! $event->content !!}</div>
                            </div> 
                            @endif
                        </div>
                    </div>
                    <!--//Event Block End-->
                </div>
            </div>
        </section>
    @endforeach
@endif
@if(!empty($meetings))
    @foreach($meetings as $event)
        <!-- Page Banner Section -->
        <section class="page-banner">
            <div class="image-layer lazy-image" data-bg="url('{{ asset('frontend/images/projects/Banner-2.jpg')}}')"></div>
            <div class="bottom-rotten-curve alternate"></div>
            <div class="auto-container">
                <h1>{{ $event->title }}</h1>
            </div>
        </section>
        <!--End Banner Section -->

        <!--About Section-->
        <section class="about-section style-two alternate">
            <div class="circle-one"></div>
            <div class="circle-two"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Event Block Start-->
                    <div class="event-block-three col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                            <div class="image-box">
                                <figure class="image">
                                    @foreach($event->media as $attachment)
                                        @if($attachment->mime_type == "video/mp4")
                                            <video src="{{ $event->getFirstMediaUrl('attach') }}" controls width="100%"></video>
                                        @elseif($attachment->mime_type == "application/pdf")
                                            <iframe width="100%" height="720px" src="{{ $event->getFirstMediaUrl('attach') }}" frameborder="0"></iframe>
                                        @else
                                            <img class="lazy-image loaded" src="{{ $event->getFirstMediaUrl('attach') }}" alt="{{ $event->title }}" data-was-processed="true" />
                                        @endif
                                    @endforeach
                                </figure>
                                <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                            </div>
                            @if(!empty($event->content))
                            <div class="lower-content">
                                <h3>{{ $event->title }}:</h3>
                                <div>{!! $event->content !!}</div>
                            </div> 
                            @endif
                        </div>
                    </div>
                    <!--//Event Block End-->
                </div>
            </div>
        </section>
    @endforeach
@endif
@if(!empty($projects))
    @foreach($projects as $event)
        <!-- Page Banner Section -->
        <section class="page-banner">
            <div class="image-layer lazy-image" data-bg="url('{{ asset('frontend/images/projects/Banner-2.jpg')}}')"></div>
            <div class="bottom-rotten-curve alternate"></div>
            <div class="auto-container">
                <h1>{{ $event->title }}</h1>
            </div>
        </section>
        <!--End Banner Section -->

        <!--About Section-->
        <section class="about-section style-two alternate">
            <div class="circle-one"></div>
            <div class="circle-two"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Event Block Start-->
                    <div class="event-block-three col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                            <div class="image-box">
                                <figure class="image">
                                    @foreach($event->media as $attachment)
                                        @if($attachment->mime_type == "video/mp4")
                                            <video src="{{ $event->getFirstMediaUrl('attach') }}" controls width="100%"></video>
                                        @elseif($attachment->mime_type == "application/pdf")
                                            <iframe width="100%" height="720px" src="{{ $event->getFirstMediaUrl('attach') }}" frameborder="0"></iframe>
                                        @else
                                            <img class="lazy-image loaded" src="{{ $event->getFirstMediaUrl('attach') }}" alt="{{ $event->title }}" data-was-processed="true" />
                                        @endif
                                    @endforeach
                                </figure>
                                <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                            </div>
                            @if(!empty($event->content))
                            <div class="lower-content">
                                <h3>{{ $event->title }}:</h3>
                                <div>{!! $event->content !!}</div>
                            </div> 
                            @endif
                        </div>
                    </div>
                    <!--//Event Block End-->
                </div>
            </div>
        </section>
    @endforeach
@endif



@endsection