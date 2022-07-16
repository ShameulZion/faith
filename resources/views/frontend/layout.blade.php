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
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel love-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
            <div class="slide-item">
                <div class="image-layer lazy-image" data-bg="url({{ asset('frontend/images/main-slider/1.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Empowering  <br>Community</h2>
                        <div class="text">We want to give voice to the voiceless both through our words and our actions.</div>
                        <div class="btn-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                    </div>  
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer lazy-image" data-bg="url('{{ asset('frontend/images/main-slider/2.jpg') }}')"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>abundant Life  <br>For All</h2>
                        <div class="text">FIA was founded with the commitment and vision “abundant life for all.” Its identity is based on Christian values. </div>
                        <div class="btn-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                    </div>  
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer lazy-image" data-bg="url({{ asset('frontend/images/main-slider/3.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Not to be served <br>but to serve </h2>
                        <div class="text">Witness the love and compassion of Jesus Christ to the needy and suffering people</div>
                        <div class="btn-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
    <!--About Section-->
    <section class="about-section">
        <div class="top-rotten-curve"></div>
        <div class="bottom-rotten-curve"></div>
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="sub-title">What We Do?</div>
                <h2>We are on a mission to transfering community by building capacity and empowering the most vulnerable.</h2>
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="right-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="row clearfix">
                            <div class="about-feature col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp">
                                    <div class="icon-box">
                                        <span>
                                            <svg id="Capa_1" class="mi-vi-icon" enable-background="new 0 0 511.335 511.335" height="512" viewBox="0 0 511.335 511.335" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m264.465 17.598c-39.501 0-78.442 9.517-113.341 27.604l-40.806-40.808c-3.609-3.611-8.809-5.137-13.797-4.051s-9.082 4.635-10.865 9.419l-20.606 55.289-55.288 20.605c-4.784 1.783-8.333 5.877-9.419 10.865-1.085 4.988.44 10.187 4.051 13.797l40.807 40.808c-18.087 34.898-27.604 73.839-27.604 113.34 0 136.124 110.744 246.869 246.868 246.869s246.87-110.745 246.87-246.869-110.746-246.868-246.87-246.868zm0 328.116c44.801 0 81.249-36.447 81.249-81.248s-36.448-81.248-81.249-81.248c-16.992 0-32.775 5.252-45.83 14.205l-37.717-37.717c22.931-18.324 51.98-29.299 83.547-29.299 73.92 0 134.059 60.139 134.059 134.059s-60.139 134.059-134.059 134.059-134.058-60.139-134.058-134.059c0-31.567 10.974-60.616 29.298-83.547l37.717 37.717c-8.953 13.055-14.205 28.838-14.205 45.83 0 44.8 36.448 81.248 81.248 81.248zm10.607-91.855-34.64-34.64c7.173-3.825 15.353-6.002 24.033-6.002 28.259 0 51.249 22.99 51.249 51.248s-22.99 51.248-51.249 51.248c-28.258 0-51.248-22.99-51.248-51.248 0-8.681 2.177-16.859 6.002-24.033l34.64 34.64c2.929 2.929 6.768 4.393 10.606 4.393 3.839 0 7.678-1.465 10.606-4.393 5.859-5.857 5.859-15.355.001-21.213zm-169.458-211.743 50.476 50.477-6.489 35.795-55.468-55.467zm-63.498 63.498 30.805-11.48 55.468 55.467-35.796 6.49zm222.349 375.721c-119.581 0-216.868-97.287-216.868-216.869 0-31.479 6.882-62.547 20.021-90.924l9.315 9.315c2.838 2.839 6.664 4.394 10.606 4.394.889 0 1.784-.079 2.676-.24l33.055-5.992c-14.514 24.465-22.862 52.997-22.862 83.447 0 90.462 73.596 164.059 164.058 164.059s164.059-73.597 164.059-164.059-73.597-164.059-164.059-164.059c-30.45 0-58.982 8.349-83.447 22.863l5.992-33.055c.877-4.84-.675-9.804-4.153-13.282l-9.315-9.315c28.376-13.139 59.444-20.021 90.924-20.021 119.582 0 216.869 97.287 216.869 216.868-.001 119.583-97.289 216.87-216.871 216.87z"/></svg>
                                        </span>
                                    </div>
                                    <h4>Mission & Vision</h4>
                                    <a href="{{ route('about') }}" class="over-link"></a>
                                </div>
                            </div>
                            <!--About Feature-->
                            <div class="about-feature col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                                    <div class="icon-box">
                                        <span>
                                            <svg version="1.1" class="core-values" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M285,302c-24.813,0-45,20.187-45,45s20.187,45,45,45s45-20.187,45-45S309.813,302,285,302z M285,362 c-8.271,0-15-6.729-15-15s6.729-15,15-15s15,6.729,15,15S293.271,362,285,362z"/> </g> </g> <g> <g> <path d="M505.61,200.326c0.091-2.787-0.603-5.52-1.959-7.906c-3.136-11.888-7.14-23.584-12.027-35.038 c-12.186-28.557-29.253-54.445-50.775-77.042c-0.721-2.063-1.888-4.004-3.537-5.652c-1.648-1.649-3.59-2.816-5.652-3.537 c-22.597-21.522-48.484-38.589-77.042-50.775C322.933,6.855,289.416,0,255,0C186.976,0,122.918,26.901,74.627,75.749 C26.503,124.427,0,188.796,0,257c0,68.11,26.522,132.144,74.682,180.306c0.002,0.002,0.004,0.004,0.006,0.007 s0.005,0.004,0.007,0.006C122.856,485.478,186.89,512,255,512c68.204,0,132.573-26.503,181.252-74.627 c34.148-33.76,57.553-75.23,68.558-120.369c0.301-0.881,0.519-1.789,0.653-2.715C509.774,295.704,512,276.517,512,257 C512,237.773,509.856,218.829,505.61,200.326z M30,257C30,131.832,130.935,30,255,30c57.198,0,109.514,21.273,149.476,56.312 l-21.587,21.586C347.379,76.919,302.468,60,255,60c-51.935,0-100.911,20.688-137.908,58.253C80.275,155.633,60,204.908,60,257 c0,46.992,16.577,91.48,46.967,126.821L85.728,405.06C51.05,365.463,30,313.646,30,257z M255,180 c-20.01,0-38.838,7.807-53.016,21.984C188.219,215.751,180,236.317,180,257c0,14.922,4.347,29.184,12.434,41.353l-21.499,21.499 C157.352,301.785,150,279.945,150,257c0-58,48.084-107,105-107c23.428,0,45.703,7.664,63.987,21.801l-21.452,21.452 C285.11,184.648,270.411,180,255,180z M275.726,215.062l-61.335,61.335C211.519,270.413,210,263.821,210,257 c0-12.517,5.181-25.785,13.197-33.802C231.709,214.687,243.003,210,255,210C262.331,210,269.395,211.758,275.726,215.062z M255,120c-35.952,0-69.883,14.455-95.539,40.702C134.014,186.734,120,220.934,120,257c0,30.971,10.408,60.368,29.559,84.229 l-21.302,21.302C103.492,332.914,90,295.974,90,257c0-92.084,74.019-167,165-167c39.451,0,76.819,13.824,106.616,39.172 l-21.277,21.277C316.284,130.726,286.452,120,255,120z M255,482c-13.972,0-27.647-1.291-40.922-3.74 C221.235,462.653,237.019,452,255,452c18.006,0,33.808,10.682,40.95,26.323C282.663,480.733,268.979,482,255,482z M325.344,470.927C314.669,442.125,286.9,422,255,422c-31.833,0-59.55,20.042-70.274,48.748 c-28.959-9.545-55.337-24.816-77.785-44.476l116.254-116.253c0.001-0.001,0.002-0.002,0.003-0.003 c0.001-0.001,0.002-0.002,0.003-0.003l202.488-202.488c18.496,21.095,33.153,45.631,42.871,72.514 c-0.52-0.01-1.037-0.039-1.559-0.039c-20.044,0-38.962,8.242-53.269,23.208C399.718,217.867,392,236.971,392,257 c0,41.355,33.645,75,75,75c0.681,0,1.356-0.033,2.034-0.051C445.582,397.552,392.258,449.257,325.344,470.927z M477.684,300.718 C474.214,301.563,470.643,302,467,302c-24.813,0-45-20.187-45-45c0-25.477,20.607-47,45-47c3.529,0,6.99,0.413,10.357,1.206 C480.4,226.002,482,241.317,482,257C482,271.956,480.506,286.571,477.684,300.718z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                                        </span>
                                    </div>
                                    <h4>Core Values</h4>
                                    <a href="{{ route('emerge') }}" class="over-link"></a>
                                </div>
                            </div>
                            <div class="about-feature col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp">
                                    <div class="icon-box">
                                        <span>
                                            <svg version="1.1" class="commitment" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M404.267,315.41c-10.048-20.949-45.995-50.027-80.725-78.123c-19.371-15.659-37.675-30.464-49.344-42.133 c-2.923-2.944-7.296-3.883-11.157-2.496c-7.189,2.603-11.627,4.608-15.125,6.165c-5.333,2.389-7.125,3.2-14.315,3.925 c-3.179,0.32-6.037,2.027-7.808,4.672c-15.083,22.549-30.699,20.629-41.131,17.131c-3.328-1.109-3.925-2.539-4.245-3.904 c-2.24-9.365,9.003-31.168,23.573-45.739c34.667-34.688,52.544-43.371,90.304-26.496c42.837,19.157,85.76,34.155,86.187,34.304 c5.611,1.941,11.648-1.003,13.589-6.571c1.92-5.568-1.003-11.648-6.571-13.589c-0.427-0.149-42.496-14.848-84.48-33.643 c-48.917-21.867-75.755-7.467-114.091,30.891c-14.592,14.592-34.411,44.117-29.291,65.771c2.197,9.216,8.683,16.043,18.325,19.221 c24.171,7.979,46.229,0.341,62.656-21.461c6.784-1.045,10.475-2.581,16.021-5.077c2.005-0.896,4.352-1.941,7.467-3.2 c12.203,11.456,28.672,24.789,46.016,38.805c31.36,25.365,66.923,54.123,74.923,70.763c3.947,8.213-0.299,13.568-3.179,16.021 c-4.224,3.627-10.005,4.779-13.141,2.581c-3.456-2.368-7.957-2.517-11.52-0.384c-3.584,2.133-5.589,6.165-5.141,10.304 c0.725,6.784-5.483,10.667-8.171,12.011c-6.827,3.456-13.952,2.859-16.619,0.384c-2.987-2.773-7.275-3.584-11.072-2.176 c-3.797,1.429-6.443,4.928-6.827,8.981c-0.64,6.997-5.824,13.717-12.587,16.341c-3.264,1.237-8,1.984-12.245-1.899 c-2.645-2.389-6.315-3.307-9.749-2.475c-3.477,0.853-6.272,3.371-7.488,6.72c-0.405,1.067-1.323,3.627-11.307,3.627 c-7.104,0-19.883-4.8-26.133-8.939c-7.488-4.928-54.443-39.957-94.997-73.92c-5.696-4.8-15.552-15.083-24.256-24.171 c-7.723-8.064-14.784-15.381-18.411-18.453c-4.544-3.84-11.264-3.264-15.04,1.259c-3.797,4.501-3.243,11.243,1.259,15.04 c3.307,2.795,9.707,9.557,16.768,16.917c9.515,9.941,19.349,20.224,25.963,25.771c39.723,33.259,87.467,69.163,96.981,75.413 c7.851,5.163,24.768,12.416,37.867,12.416c10.517,0,18.603-2.411,24.213-7.125c7.509,2.923,16.043,2.944,24.256-0.256 c9.707-3.755,17.685-11.328,22.208-20.501c8.405,1.792,18.027,0.533,26.773-3.861c8.555-4.309,14.741-10.901,17.813-18.603 c8.491,0.448,17.237-2.56,24.469-8.768C407.979,346.407,411.349,330.109,404.267,315.41z"/> </g> </g> <g> <g> <path d="M213.333,138.663h-96c-5.888,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h96 c5.888,0,10.667-4.779,10.667-10.667S219.221,138.663,213.333,138.663z"/> </g> </g> <g> <g> <path d="M435.52,292.711c-3.307-4.885-9.92-6.229-14.805-2.901l-31.189,20.949c-4.885,3.285-6.187,9.92-2.901,14.805 c2.069,3.051,5.44,4.715,8.875,4.715c2.027,0,4.096-0.576,5.931-1.813l31.189-20.949 C437.504,304.231,438.805,297.597,435.52,292.711z"/> </g> </g> <g> <g> <path d="M369.301,343.613c-7.637-6.016-41.792-40.981-62.912-62.997c-4.075-4.267-10.837-4.416-15.083-0.32 c-4.267,4.075-4.395,10.837-0.32,15.083c5.483,5.717,53.845,56.128,65.088,65.003c1.941,1.536,4.288,2.283,6.592,2.283 c3.136,0,6.272-1.408,8.405-4.075C374.72,353.981,373.931,347.261,369.301,343.613z"/> </g> </g> <g> <g> <path d="M326.677,365.01c-12.779-10.219-44.885-44.331-52.139-52.224c-4.011-4.352-10.731-4.608-15.083-0.64 c-4.331,3.989-4.629,10.752-0.64,15.083c0.384,0.405,38.699,41.771,54.528,54.443c1.963,1.557,4.331,2.325,6.656,2.325 c3.115,0,6.229-1.387,8.341-3.989C332.011,375.399,331.264,368.679,326.677,365.01z"/> </g> </g> <g> <g> <path d="M284.224,386.493c-15.211-12.821-46.336-45.952-52.416-52.459c-4.032-4.309-10.795-4.544-15.083-0.512 c-4.309,4.032-4.523,10.773-0.512,15.083c8.747,9.365,38.528,40.939,54.251,54.208c2.005,1.685,4.437,2.517,6.869,2.517 c3.029,0,6.059-1.301,8.171-3.797C289.301,397.01,288.725,390.29,284.224,386.493z"/> </g> </g> <g> <g> <path d="M124.672,120.253C106.389,102.93,33.28,97.319,11.307,96.018c-3.029-0.149-5.824,0.853-7.957,2.88 C1.216,100.903,0,103.719,0,106.663v192c0,5.888,4.779,10.667,10.667,10.667h64c4.608,0,8.704-2.965,10.133-7.36 c1.557-4.779,38.315-117.589,43.157-173.056C128.235,125.671,127.04,122.471,124.672,120.253z M66.88,287.997H21.333V118.098 c34.283,2.709,71.275,8.597,84.715,15.125C100.395,179.943,74.816,262.951,66.88,287.997z"/> </g> </g> <g> <g> <path d="M501.333,117.33c-83.755,0-130.219,21.44-132.16,22.336c-2.773,1.301-4.843,3.712-5.696,6.635s-0.427,6.059,1.173,8.661 c13.184,21.227,54.464,139.115,62.4,167.872c1.28,4.629,5.483,7.829,10.283,7.829h64c5.888,0,10.667-4.779,10.667-10.667v-192 C512,122.087,507.221,117.33,501.333,117.33z M490.667,309.33h-45.355c-10.112-32.939-39.979-118.827-56.64-154.325 c16.277-5.525,51.243-15.019,101.995-16.213V309.33z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                                        </span>
                                    </div>
                                    <h4>Commitment</h4>
                                    <a href="{{ route('commitment') }}" class="over-link"></a>
                                </div>
                            </div>
                            <div class="about-feature col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp">
                                    <div class="icon-box">
                                        <span>
                                            <svg id="Capa_1" class="leadership" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m151 120c0-33.084-26.916-60-60-60s-60 26.916-60 60 26.916 60 60 60 60-26.916 60-60zm-60 30c-16.542 0-30-13.458-30-30s13.458-30 30-30 30 13.458 30 30-13.458 30-30 30z"/><path d="m481 120c0-33.084-26.916-60-60-60s-60 26.916-60 60 26.916 60 60 60 60-26.916 60-60zm-60 30c-16.542 0-30-13.458-30-30s13.458-30 30-30 30 13.458 30 30-13.458 30-30 30z"/><path d="m421 180c-27.713 0-52.536 12.594-69.059 32.355-16.379-36.706-53.219-62.355-95.941-62.355s-79.562 25.649-95.941 62.355c-16.523-19.761-41.346-32.355-69.059-32.355-49.915 0-91 40.422-91 90v75c0 8.284 6.716 15 15 15h16.407l13.666 138.473c.757 7.676 7.213 13.527 14.927 13.527h61c7.714 0 14.17-5.851 14.927-13.527l13.666-138.473h50.09l11.368 138.229c.639 7.782 7.141 13.771 14.949 13.771h60c7.808 0 14.31-5.989 14.949-13.771l11.369-138.229h50.089l13.665 138.473c.758 7.676 7.214 13.527 14.928 13.527h61c7.714 0 14.17-5.851 14.928-13.527l13.665-138.473h16.407c8.284 0 15-6.716 15-15v-75c0-49.519-41.033-90-91-90zm-285 150c-7.714 0-14.17 5.851-14.927 13.527l-13.666 138.473h-33.814l-13.666-138.473c-.757-7.676-7.213-13.527-14.927-13.527h-15v-60c0-33.084 27.364-60 61-60 33.084 0 60 26.916 60 60v60zm162.501 0c-7.808 0-14.31 5.989-14.949 13.771l-11.369 138.229h-32.366l-11.368-138.229c-.64-7.781-7.142-13.771-14.95-13.771h-32.499v-75c0-36.219 25.808-66.522 60-73.491v73.491c0 8.284 6.716 15 15 15s15-6.716 15-15v-73.491c34.192 6.968 60 37.271 60 73.491v75zm183.499 0h-15c-7.714 0-14.17 5.851-14.928 13.527l-13.665 138.473h-33.814l-13.665-138.473c-.758-7.676-7.214-13.527-14.928-13.527h-15v-60c0-33.084 26.916-60 60-60 33.636 0 61 26.916 61 60z"/><path d="m331 75c0-41.355-33.645-75-75-75s-75 33.645-75 75 33.645 75 75 75 75-33.645 75-75zm-75 45c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z"/></g></svg>
                                        </span>
                                    </div>
                                    <h4>Leadership</h4>
                                    <a href="{{ route('leadership') }}" class="over-link"></a>
                                </div>
                            </div>
                            <div class="about-feature col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp">
                                    <div class="icon-box">
                                        <span>
                                            <svg id="Capa_1" class="efia" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m392 402.271v-146.271c0-74.99-61.009-136-136-136s-136 61.01-136 136v146.271c-19.12 6.145-33 24.093-33 45.229v64.5h338v-64.5c0-21.136-13.88-39.084-33-45.229zm-242-35.271h212v33h-212zm106-217c58.449 0 106 47.552 106 106v81h-212v-81c0-58.448 47.551-106 106-106zm139 332h-278v-34.5c0-9.649 7.851-17.5 17.5-17.5h243c9.649 0 17.5 7.851 17.5 17.5z"/><path d="m241 0h30v72.033h-30z"/><path d="m305.354 34.676h72.033v30h-72.033z" transform="matrix(.372 -.928 .928 .372 168.35 348.115)"/><path d="m376.269 81.01h72.033v30h-72.033z" transform="matrix(.674 -.739 .739 .674 63.554 335.976)"/><path d="m155.63 13.66h30v72.033h-30z" transform="matrix(.928 -.372 .372 .928 -6.238 66.996)"/><path d="m84.714 59.994h30v72.033h-30z" transform="matrix(.739 -.674 .674 .739 -38.658 92.251)"/><path d="m241 183h30v81.333h-30z"/><path d="m241 285h30v30h-30z"/></g></svg>
                                        </span>
                                    </div>
                                    <h4>Emergence of Faith in Action</h4>
                                    <a href="{{ route('emerge') }}" class="over-link"></a>
                                </div>
                            </div>
                            <div class="about-feature col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp">
                                    <div class="icon-box">
                                        <span>
                                            <svg class="legal-stat" height="512pt" viewBox="-11 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m166.28125 98.636719h-89.523438c-8.285156 0-15 6.714843-15 15 0 8.285156 6.714844 15 15 15h89.523438c8.28125 0 15-6.714844 15-15 0-8.285157-6.71875-15-15-15zm0 0"/><path d="m166.28125 158.640625h-89.523438c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h89.523438c8.28125 0 15-6.714844 15-15s-6.71875-15-15-15zm0 0"/><path d="m166.28125 218.644531h-89.523438c-8.285156 0-15 6.714844-15 15 0 8.285157 6.714844 15 15 15h89.523438c8.28125 0 15-6.714843 15-15 0-8.285156-6.71875-15-15-15zm0 0"/><path d="m166.28125 278.648438h-89.523438c-8.285156 0-15 6.714843-15 15 0 8.285156 6.714844 15 15 15h89.523438c8.28125 0 15-6.714844 15-15 0-8.285157-6.71875-15-15-15zm0 0"/><path d="m166.28125 339.65625h-89.523438c-8.285156 0-15 6.71875-15 15 0 8.285156 6.714844 15 15 15h89.523438c8.28125 0 15-6.714844 15-15 0-8.28125-6.71875-15-15-15zm0 0"/><path d="m216.65625 128.636719h89.523438c8.285156 0 15-6.714844 15-15 0-8.285157-6.714844-15-15-15h-89.523438c-8.28125 0-15 6.714843-15 15 0 8.285156 6.71875 15 15 15zm0 0"/><path d="m216.65625 188.640625h89.523438c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-89.523438c-8.28125 0-15 6.714844-15 15s6.71875 15 15 15zm0 0"/><path d="m274.773438 233.644531c0-8.285156-6.714844-15-15-15h-43.117188c-8.28125 0-15 6.714844-15 15 0 8.285157 6.71875 15 15 15h43.117188c8.285156 0 15-6.714843 15-15zm0 0"/><path d="m416.871094 345.988281c-6.460938-5.183593-15.898438-4.148437-21.085938 2.3125l-38.632812 48.164063-23.917969-17.328125c-6.707031-4.863281-16.089844-3.363281-20.949219 3.34375-4.859375 6.710937-3.359375 16.089843 3.347656 20.949219l35.480469 25.707031c2.65625 1.921875 5.734375 2.855469 8.792969 2.855469 4.402344 0 8.753906-1.933594 11.707031-5.617188l47.574219-59.300781c5.183594-6.460938 4.148438-15.902344-2.316406-21.085938zm0 0"/><path d="m454.785156 299.941406c-19.539062-19.882812-44.644531-32.414062-71.847656-36.105468v-203.425782c0-33.308594-27.101562-60.410156-60.410156-60.410156h-262.113282c-33.3125 0-60.414062 27.101562-60.414062 60.410156v347.472656c0 33.3125 27.101562 60.414063 60.410156 60.414063h210.816406c23.722657 27.867187 57.832032 43.703125 94.734376 43.703125 68.691406 0 124.574218-55.921875 124.574218-124.660156 0-32.90625-12.695312-63.945313-35.75-87.398438zm-424.785156 107.941406v-347.472656c0-16.765625 13.644531-30.410156 30.414062-30.410156h262.113282c16.769531 0 30.410156 13.644531 30.410156 30.410156v202.949219c-62.59375 6.535156-111.550781 59.640625-111.550781 123.980469 0 17.832031 3.71875 35.074218 10.851562 50.953125h-191.824219c-16.769531 0-30.414062-13.640625-30.414062-30.410157zm335.960938 74.117188c-29.957032 0-57.496094-13.753906-75.5625-37.730469-12.4375-16.511719-19.015626-36.195312-19.015626-56.929687 0-52.195313 42.429688-94.660156 94.578126-94.660156.492187 0 .988281.007812 1.480468.015624l.230469.003907c24.894531.441406 48.234375 10.480469 65.71875 28.269531 17.503906 17.808594 27.144531 41.382812 27.144531 66.371094 0 52.195312-42.425781 94.660156-94.574218 94.660156zm0 0"/></svg>
                                        </span>
                                    </div>
                                    <h4>Legal Status</h4>
                                    <a href="{{ route('legal') }}" class="over-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Mission Vision Section-->
    <section class="mission-vision" id="omv">
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        
        <div class="auto-container">
            <div class="mission">
                <div class="row clearfix">
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <!-- <div class="sub-title">abundant life for all</div> -->
                                <h2>Our Mission</h2>
                                <div class="text">Its mission is ‘witness the love and compassion of Jesus Christ to the needy and suffering people for realization of their human rights by bringing change in social, economic, health, spiritual and environmental situation’. It strives to approach people with openness and respect, regardless of religion, ethnicity, caste, gender, disability or other minority status</div>
                                <div class="link-box"><a href="{{ route('about') }}" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="row clearfix">
                                <div class="image wow fadeInUp" data-wow-delay="0ms">
                                    <img class="lazy-image" src="{{ asset('frontend/images/resource/image-spacer-for-validation.png') }}" data-src="{{ asset('frontend/images/resource/mission-image-1.jpg') }}" alt="">
                                </div>
                                <div class="image wow fadeInDown" data-wow-delay="0ms">
                                    <img class="lazy-image" src="{{ asset('frontend/images/resource/image-spacer-for-validation.png') }}" data-src="{{ asset('frontend/images/resource/mission-image-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vision">    
                <div class="row clearfix">
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <!-- <div class="sub-title">Proident sunt</div> -->
                                <h2>Our Vision</h2>
                                <div class="text">FIA was founded with the commitment and vision “abundant life for all.” Its identity is based on Christian values. </div>
                                <div class="link-box"><a href="{{ route('about') }}" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image wow fadeInLeft" data-wow-delay="0ms">
                                <img class="lazy-image" src="{{ asset('frontend/images/resource/image-spacer-for-validation.png') }}" data-src="{{ asset('frontend/images/resource/vision-image-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!--Call To Action Section-->
    <section class="call-to-action">
        <!--Image Layer-->
        <div class="image-layer lazy-image" data-bg="url({{ asset('frontend/images/background/call-to-action-1.jpg') }})"></div>
        <div class="auto-container">
            <div class="inner">
                <div class="sec-title centered">
                    <h2>How Can You Help?</h2>
                    <div class="text">Your donation will help us save and improve lives with research, education and emergency care.</div>
                    <div class="link-box clearfix">
                        <a href="{{ route('donate') }}" class="theme-btn btn-style-three"><span class="btn-title">Donate Now</span></a>
                        <a href="{{ route('join-us') }}" class="theme-btn btn-style-one"><span class="btn-title">Join Us Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--Current Events -->
    @if(!empty($projects))
    <section class="about-section style-two alternate">
        <div class="top-rotten-curve"></div>
        <div class="bottom-rotten-curve"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="left-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner commit-points drr-cca-section">
                        <div class="sec-title centered">
                            <h2>Our Projects</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                @foreach($projects as $event)
                    <div class="event-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp animated h-100" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp" >
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ url($event->slug) }}">
                                        @foreach($event->media as $attachment)
                                            @if($attachment->mime_type == "video/mp4")
                                                <video  height="268px" src="{{ $event->getFirstMediaUrl('attach') }}" controls></video>
                                            @elseif($attachment->mime_type == "application/pdf")
                                                <iframe width="100%" height="268px" src="{{ $event->getFirstMediaUrl('attach') }}" frameborder="0"></iframe>
                                            @else
                                                <img width="100%" height="268px" class="lazy-image loaded" src="{{ $event->getFirstMediaUrl('attach') }}" alt="{{ $event->title }}" data-was-processed="true"/>
                                            @endif
                                        @endforeach
                                    </a>
                                </figure>
                                <!-- <div class="date">25 <span class="month">Aug</span></div> -->
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ url($event->slug) }}">{{ $event->title }}</a></h3>
                                <div>
                                    {!!  substr(strip_tags($event->content), 0, 150) !!}
                                </div>
                                <div class="link-box mt-3">
                                    <a href="{{ url($event->slug) }}" class="theme-btn btn-style-two"><span class="btn-title">Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

@endsection