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
            <h1>DRR and CCA</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">DRR and CCA</li>
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
                <div class="left-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner commit-points drr-cca-section">
                        <div class="sec-title centered">
                            <h2>Disaster Risk Reduction and Climate Change Adaptation</h2>
                        </div>
                        <div class="text pt30">
                            Goal: Address the crucial aspects of climate change and work in partnership with the affected community to mitigate the effect of climate change and to adapt to the climate change situation. We are working to create a Disaster and Climate-resilient Community where members are discovering true vocation as stewards of creation and environment.
                            <br>
                            We are working to create a Disaster and Climate-resilient Community where members are discovering true vocation as stewards of creation and environment.
                            <ul>
                                <li>Disaster management, preparedness, and mitigation awareness and motivation: From this training SHG members learned about preparedness and how to reduce loss during a disaster. </li>
                                <li>Training on adaptation and mitigation strategy of climate change</li>
                                <li>Training for church leaders and youth: We organize training for the local Church leaders and youths to sensitize them on DRR and CCA. This training was organized to enhance their capacity so they can form a volunteer group and help the community during the disaster. </li>
                                <li>Works closely with UDMC on DRR and CCA issue: We organize quarterly training for the Union Disaster Management Committee members to make the committee more functional through enhancing their capacity. We also establish a network between the Group members and UDMC so they can work together during Disasters for the betterment of the community. </li>
                                <li>Train Youth and students from the early warning and rescue team: We trained Youth and students through our student and adolescent clubs on early warning and rescue. During the Disaster members of these teams are joint work with the Red Cross volunteer and Upazila team to provide early warning and rescue people. </li>
                                <li>Tree plantation: Every year we provide trees to our group members and encourage them to plant more trees in the community to reduce Disaster risk.</li>
                                <li>Advocacy, lobbying, Networking and Campaign</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection