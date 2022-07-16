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
            <h1>Health, Nutrition and WASH</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Health, Nutrition and WASH</li>
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
                <div class=" col-lg-12 col-md-12 col-sm-12">
                    <div class="inner commit-points hnw-section">
                        <div class="sec-title centered">
                            <h2>Health, Nutrition and WASH</h2>
                        </div>
                        <div class="text pt30">
                            <p>Goal: To ensure that the community is practicing good health behavior by increasing their basic knowledge of Health Nutrition and WASH.</p>
                            <p>We are working to establish a healthy community where members are practicing health & personal hygiene principles, by gaining knowledge, changing behaviour, and taking responsibilities for functioning health services for all in the community.</p>
                            <ol>
                                <li style="list-style-type: decimal;">Training on Primary health Principal for SHG members.</li>
                                <li style="list-style-type: decimal;">Community Health Volunteer: We recruit volunteers from the community and trained them mainly on Mother and Child care and Primary health principles to prevent common diseases in the community.</li>
                                <li style="list-style-type: decimal;">Community-based Pond Sand Water filter & Rainwater harvesting: Salinity in the water and scarcity of drinking water are the most common problems in the coastal areas. To reduce this problem we provide a Community-based Pond Sand Water filter & Water tank for Rainwater harvesting.</li>
                                <li style="list-style-type: decimal;">Organic and vermin compost training and demonstration plot: We encourage our group members to use compost/vermin compost in their field to increase the fertility of the soil. Our group members also established a demonstration plot on Compost/vermin compost in the community so other community members can learn and be encouraged to do the same.</li>
                                <li style="list-style-type: decimal;">Agro demonstration: To meet the nutritional needs and food security around the year our members use kitchen gardening which we called Faith Gardening. Our group members also established a demonstration plot on Faith Gardening in the community so other community members can learn and be encouraged to do the same.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pt60 vermin-composit-section">    
                <div class="row clearfix">
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <!-- <div class="sub-title">Proident sunt</div> -->
                                <h4><u>Vermin compost, a silent revolution attained by Shilpi Biswas in Ruijani village</u></h4>
                                <div class="text">
                                    I am Shilpi Biswas a 30 years old housewife.  I live in Ruizani, Mohammadpur, Magura. After the S.S.C exam, I got married to Tapon Biswas. He is a farmer and basically, we depend on agriculture for our living. Sometimes my husband had to work as a carpenter because we didn’t get enough crops in the past. Though we know that using chemical fertilizer is harmful to health but we used more and more chemical fertilizer to get enough crops for the whole year as we didn’t have any other choice. In 2.5.2013 I was admitted to Beli Sabolombi Mohila Somity run by FIA as a member. Then I got training on Vermin-compost. But that time vermin compost was not very familiar with farmers so my husband was not interested to invest in vermin compost. But I didn’t give up and started vermin compost on my own in a small pot and from that pot I gave some compost to my husband for use in his land. He used it and found that it was very useful. Then my husband helps me to manage two pots and corrugated Iron for making a vermin compost plot. Gradually my plot became bigger and vermin compost became famous among the villagers. One day Government agriculture officer paid a visit to my plot and gave me another two pots and corrugated iron to encourage my enthusiasm. 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image wow fadeInLeft" data-wow-delay="0ms">
                                <img class="lazy-image" src="{{ asset('frontend/images/background/vermin-compo.jpg')}}" data-src="{{ asset('frontend/images/background/vermin-compo.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection