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
            <h1>Child and Adolescent wellbeing, Rights & Protection</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Child and Adolescent wellbeing, Rights & Protection</li>
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
                    <div class="inner commit-points child-rights-section">
                        <div class="sec-title centered">
                            <h2>Child and Adolescent wellbeing, Rights & Protection</h2>
                        </div>
                        <div class="text pt30">
                            <p>Goal: Work with communities to identify children’s needs to facilitate opportunities to protect their rights through holistic program interventions.</p>
                            <ul>
                                <li>Adolescent and Child club formation</li>
                                <li>School-Based Reproductive health education for Adolescent girls: Adolescent girls learned about physical and mental changes, personal hygiene, reproductive organs, and how to protect them from any form of abuse and violence, consequences of early marriage, etc.</li>
                                <li>Provide training on different issues through weekly meetings the module includes; Early Marriage, Dowry, health, hygiene, nutrition, environment, Child rights, care for elderly people, children with disability, social cohesion, social taboos, etc. </li>
                                <li>National and International day observation.</li>
                                <li>Organize cultural events and various competitions for their physical and mental development.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row clearfix">
                    <div class="text-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h4>“NO” to child marriage - Hosneara an Example</h4>
                                <div class="text">Hosneara Parvin was born in an economically deprived coastal family from the Moukhali village under the Burigoalini Union which is known as one of the most vulnerable areas in Shyamnagar Upazila on the aspect of the disaster. She is 12 years old and a student of class VII at Nekjania High school. Hosneara became a member of the student club in February 2018 and like other girls, she is dreaming to be a doctor. Her father Khan Jahan is a fisherman and her mother Muktiara Begum is a housewife. Though Khanjahan’s income was not sufficient for the five-membered families but somehow, he could manage to provide support for his family. But COVID-19 and the cyclone, Amphan destroyed his livelihood completely. He became helpless and arranged a marriage for Hosneara to reduce the economic burden from his shoulder. Hosneara was shocked to hear the news and asked for help from the PB&J committee. She said, I don’t want to get married right now, I want to complete my studies, please help me. Mr. Shibashis Mondal, a school teacher of Nekjania High school and the President of the PB&J committee along with two other members from the committee and the respective FO, Joel Das went to her house to motivate her father not to arrange the marriage of her daughter. They tried to motivate him in every possible way but he said, “I understand everything but what should I do? I don’t have any option to support her studies”. Then PB&J President Mr. Shibasis Mondol assured him that he will manage her study support from the school. He requested Khanjahan, please don’t put her life in danger organized early marriage. She will die psychologically and you will put her life in threat. But if she could complete her study, she could contribute to your family and will have a better future with dignity and respect.  Realized his ignorance, Khan Jahan changed her decision and promised to not arrange her marriage before 18. Now Hosenara is very happy and said I will continue my studies and I will stand against child marriage in our community. </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-lg-3 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="row clearfix">
                                <div class="image wow fadeInDown" data-wow-delay="0ms"><img class="lazy-image" src="images/hosneara.jpg" data-src="images/hosneara.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

@endsection