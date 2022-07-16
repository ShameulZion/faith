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
        <div class="image-layer lazy-image" data-bg="url({{ asset('frontend/images/background/bg-banner-1.jpg') }})"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
          <h1>EC Members</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">EC Members</li>
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
            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html">
                        <img class="lazy-image loaded" src="{{ asset('frontend/images/ecmembers/09.jpg') }}" alt="Ananta Kumar Tripura" data-was-processed="true"/>
                    </a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Rev. Sushil Chandra Bose</h3>
                  <h5>Chairman</h5>           
                </div>
              </div>
            </div>

            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html">
                      <img class="lazy-image loaded" src="{{ asset('frontend/images/ecmembers/02.jpg') }}" alt="Ananta Kumar Tripura" data-was-processed="true" />
                    </a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Bithika Barua</h3>        

                  <h5>Vice Chairman</h5>           
                </div>
              </div>
            </div>

            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html" >
                        <img class="lazy-image loaded" src="{{ asset('frontend/images/ecmembers/07.jpg') }}" alt="Ananta Kumar Tripura"data-was-processed="true"/>
                    </a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Nripen Baidya</h3>        

                  <h5>Founder &amp; Executive Director</h5>           
                </div>
              </div>
            </div>

            

            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html">
                        <img class="lazy-image loaded" src="{{ asset('frontend/images/ecmembers/05.jpg') }}" alt="Ananta Kumar Tripura" data-was-processed="true" />
                    </a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Nishi Kanti Dey, FCA</h3>        

                  <h5>Treasurer</h5>           
                </div>
              </div>
            </div>

            <!--Block-1-->
            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div
                class="inner-box wow fadeInUp animated"
                data-wow-delay="0ms"
                style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp"
              >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html"
                      ><img
                        class="lazy-image loaded"
                        src="{{ asset('frontend/images/ecmembers/01.jpg') }}"
                        alt="Ananta Kumar Tripura"
                        data-was-processed="true"
                    /></a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Ananta Kumar Tripura</h3>        

                  <h5>EC Member</h5>           
                </div>
              </div>
            </div>
            <!--// Block-1-->           

            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div
                class="inner-box wow fadeInUp animated"
                data-wow-delay="0ms"
                style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp"
              >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html"
                      ><img
                        class="lazy-image loaded"
                        src="{{ asset('frontend/images/ecmembers/03.jpg') }}"
                        alt="Ananta Kumar Tripura"
                        data-was-processed="true"
                    /></a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Dr. Afroja Khanom Biplobi</h3>        

                  <h5>EC Member</h5>           
                </div>
              </div>
            </div>

            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div
                class="inner-box wow fadeInUp animated"
                data-wow-delay="0ms"
                style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp"
              >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html"
                      ><img
                        class="lazy-image loaded"
                        src="{{ asset('frontend/images/ecmembers/04.jpg') }}"
                        alt="Ananta Kumar Tripura"
                        data-was-processed="true"
                    /></a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Khokon Mitra</h3>        

                  <h5>EC Member</h5>           
                </div>
              </div>
            </div>           

            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div
                class="inner-box wow fadeInUp animated"
                data-wow-delay="0ms"
                style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp"
              >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html"
                      ><img
                        class="lazy-image loaded"
                        src="{{ asset('frontend/images/ecmembers/06.jpg') }}"
                        alt="Ananta Kumar Tripura"
                        data-was-processed="true"
                    /></a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Md. Jahangir Alam</h3>        

                  <h5>EC Member</h5>           
                </div>
              </div>
            </div>            

            <div class="event-block-three ec_members col-lg-3 col-md-6 col-sm-12">
              <div
                class="inner-box wow fadeInUp animated"
                data-wow-delay="0ms"
                style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp"
              >
                <div class="image-box">
                  <figure class="image">
                    <a href="icdp.html"
                      ><img class="lazy-image loaded" src="{{ asset('frontend/images/ecmembers/08.jpg') }}" alt="Ananta Kumar Tripura" data-was-processed="true"
                    /></a>
                  </figure>
                  <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                </div>
                <div class="lower-content">
                  <h3>Rev. Judith Milita Das</h3>        

                  <h5>EC Member</h5>           
                </div>
              </div>
            </div>  
          </div>  
        </div>
      </section>

@endsection