<div class="header-top">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="top-left">
                            <ul class="social-links clearfix">
                                <li class="social-title">Follow Us:</li>
                                @if(!empty(setting('facebook')))
                                <li><a href="{{ setting('facebook') ?? old('facebook') }}" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                @endif
                                @if(!empty(setting('twiiter')))
                                <li>
                                    <a href="{{ setting('twiiter') ?? old('twiiter') }}" target="_blank"><span class="fab fa-twitter"></span></a>
                                </li>
                                @endif
                                @if(!empty(setting('linkedin')))
                                <li>
                                    <a href="{{ setting('linkedin') ?? old('linkedin') }}" target="_blank"><span class="fab fa-linkedin"></span></a>
                                </li>
                                @endif
                                @if(!empty(setting('instagram')))
                                <li>
                                    <a href="{{ setting('instagram') ?? old('instagram') }}" target="_blank"><span class="fab fa-instagram"></span></a>
                                </li>
                                @endif
                                @if(!empty(setting('youtube')))
                                <li>
                                    <a href="{{ setting('youtube') ?? old('youtube') }}" target="_blank"><span class="fab fa-youtube"></span></a>
                                </li>
                                @endif
                                @if(!empty(setting('pinterest')))
                                <li>
                                    <a href="{{ setting('pinterest') ?? old('pinterest') }}" target="_blank"><span class="fab fa-pinterest"></span></a>
                                </li>
                                @endif
                                <!-- <li><a href="#"><span class="fab fa-twitter"></span></a></li> -->
                                <!-- <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li> -->
                            </ul>
                        </div>

                        <div class="top-right">
                            <ul class="info clearfix">
                                <li><a href="tel:{{ setting('telephone') ?? old('telephone') }}"><span class="icon fa fa-phone-alt"></span>{{ setting('telephone') ?? old('telephone') }}</a></li>
                                <li><a href="mailto:{{ setting('email') ?? old('email') }}"><span class="icon fa fa-envelope"></span>{{ setting('email') ?? old('email') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo">
                              <a href="{{ url('/') }}" title="">
                                <img src="{{ setting('site_logo') != null ?  Storage::disk('media')->url(setting('site_logo')) : '' }}" alt="{{ setting('site_title') ?? old('site_title') }}" title="{{ setting('site_title') ?? old('site_title') }}">
                              </a>
                            </div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('about') }}">About</a>
                                            <ul>
                                                <li><a href="{{ route('about') }}">Emerge of Faith in Action</a></li>
                                                <li><a href="{{ route('leadership') }}">Leadership</a></li>
                                                <li><a href="{{ route('about') }}">Mission & Vision</a></li>
                                                <li><a href="{{ route('about') }}">Core Values</a></li>
                                                <li><a href="{{ route('guidelines') }}">Polices and Guidelines</a></li>
                                                <li><a href="{{ route('work') }}">Where We Work</a></li> 
                                                <li><a href="{{ route('comming')}}">Accreditation</a></li>                                                
                                                <li><a href="{{ route('significant') }}">Stories of the most significant changes</a></li>
                                                <li><a href="{{ route('reports') }}">Annual Reports</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">What We Do</a>
                                            <ul>
                                                <li><a href="{{ route('drr-and-cca') }}">DRR & CCA</a></li>
                                                <li><a href="{{ route('comming')}}">Food Security</a></li>
                                                <li><a href="{{ route('empowerment') }}">Economic Empowerment</a></li>
                                                <li><a href="{{ route('health-nutrition-wash') }}">Health Nutrition & WASH</a></li>
                                                <li><a href="{{ route('child-rights') }}">Child and Adolescent wellbeing, Rights & Protection taking care of street children and work stop at the root</a></li>
                                                <li><a href="{{ route('humanitarian-response') }}">Humanitarian Response (Emergency Relief and Rehabilitation) </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Our Partners</a>
                                            <ul>
                                                <li><a href="{{ route('tearfund') }}">Tearfund Australia </a></li>
                                                <li><a href="{{ route('world-renew') }}">World Renew</a></li>
                                                <li><a href="{{ route('knh-germany') }}">Kindernothife (KNH Germany)</a></li>
                                                <li><a href="{{ route('canadian') }}">Canadian Food Grain Bank</a></li>
                                                <!-- <li><a href="coming-soon.html">Baptist Global Response (BGR)</a></li> -->
                                                <li><a href="{{ route('australia') }}">Entrust Foundation Australia</a></li>
                                                <li><a href="{{ route('singapore') }}">ACTS Church Singapore</a></li>
                                                <li><a href="{{ route('hoffnungszeichen') }}">Sign Of Hope Germany</a></li>
                                                <li><a href="{{ route('bangladeshGovt') }}">Bangladesh Govt</a></li>
                                                <li><a href="{{ route('usaid') }}">USAID</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Networking</a>
                                            <ul>
                                                <li><a href="{{ route('comming')}}">C-MAN</a></li>
                                                <li><a href="{{ route('scan-bangladesh') }}">SCAN Bangladesh</a></li>
                                                <li><a href="{{ route('comming')}}">UNDP</a></li>
                                                <li><a href="{{ route('comming')}}">CSO Alliance</a></li>
                                                <li><a href="{{ route('micah-global') }}">Micah Global</a></li>
                                                <li><a href="{{ route('comming')}}">Learning Circle</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Current Event</a>
                                            <ul>
                                              <li><a href="{{ route('events') }}">Our Events</a></li>
                                              <li><a href="{{ route('meetings') }}">Our Meetings</a></li>
                                              <li><a href="{{ route('projects') }}">Our Projects</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{ url('/') }}" title="{{ setting('site_title') ?? old('site_title') }}">
                        <img src="{{ setting('site_logo') != null ?  Storage::disk('media')->url(setting('site_logo')) : '' }}" alt="{{ setting('site_title') ?? old('site_title') }}" title="{{ setting('site_title') ?? old('site_title') }}">
                    </a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('frontend/images/sticky-logo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                   <ul class="clearfix">
                      <!-- <li><a href="#"><span class="fab fa-twitter"></span></a></li> -->
                      <li><a href="https://www.facebook.com/Faith-in-Action-150631245038186" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                      <!-- <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li> -->
                      <!-- <li><a href="#"><span class="fab fa-instagram"></span></a></li> -->
                      <!-- <li><a href="#"><span class="fab fa-youtube"></span></a></li> -->
                  </ul>
              </div>
          </nav>
      </div><!-- End Mobile Menu -->