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
            <h1>Emerge of FIA</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Emerge of FIA</li>
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
                <!--Left Column-->
                <div class="left-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="sub-title">About Us</div>
                            <h2>Introduction of FIA</h2>
                            <div class="text">Faith in Action (FIA) has been emerged in 2011 with the philosophy of serving the distressed people of Bangladesh. It is still new in the development arena but vibrant. It is a local non-governmental, non-political, voluntary, Christian humanitarian and social development organization. It is devoted to transforming the lives of vulnerable people so that they could live with dignity. It wants to give voice to the voiceless both through our words and our actions.</div>
                            <!-- <div class="link-box clearfix"><a href="causes.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a></div> -->
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="images clearfix">
                            <figure class="image wow fadeInRight" data-wow-delay="300ms"><img class="lazy-image" src="images/resource/image-spacer-for-validation.png" data-src="images/resource/featured-image-19.jpg" alt=""></figure>
                            <figure class="image wow fadeInRight" data-wow-delay="0ms"><img class="lazy-image" src="images/resource/image-spacer-for-validation.png" data-src="images/resource/featured-image-20.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-blocks">
                <div class="row clearfix">
                    <!--Text Block-->
                    <div class="default-text-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner" style="color: white; padding: 15px; background: #138638; border-radius: 10px;"> <h3 class="text-center">Our Mission</h3>
                            <div class="text">Its mission is ‘witness the love and compassion of Jesus Christ to the needy and suffering people for realization of their human rights by bringing change in social, economic, health, spiritual and environmental situation’. It strives to approach people with openness and respect, regardless of religion, ethnicity, caste, gender, disability or other minority status.</div>
                        </div>
                    </div>
                    <!--Text Block-->
                    <div class="default-text-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner" style="color: white; padding: 15px; background: #ee66a8; border-radius: 10px; height: 100%">
                            <h3 class="text-center">Our Vision</h3>
                            <div class="text">FIA was founded with the commitment and vision “abundant life for all.” Its identity is based on Christian values.</div>
                        </div>
                    </div>
                    <!--Text Block-->
                    <div class="default-text-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner" style="color: white; padding: 15px; background: #FB0C0D; border-radius: 10px;height: 100%">
                            <h3 class="text-center">Our Values</h3>
                            <div class="text">
                                <ol>
                                    <li>Love</li>
                                    <li>Justice</li>
                                    <li>Equality</li>
                                    <li>Relationship Building</li>
                                    <li>Stewardship</li>
                                    <li>Participatory policy making</li>
                                    <li>Transparency and accountability</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection