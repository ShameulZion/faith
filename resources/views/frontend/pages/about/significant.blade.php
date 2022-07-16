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
        <div class="image-layer lazy-image" data-bg="url({{asset('frontend/images/background/bg-banner-1.jpg')}})"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Stories of The Most Significant Changes</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Stories of The Most Significant Changes</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <ul class="accordion-box clearfix">
                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">‘‘Dream comes True’’</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text" style="text-align: justify;">
                                <p>Shyamnagar Upazila is located in the south-west coastal area in the Satkhira district of Bangladesh. Faith in Action has been working in the area since December 2017 in 4 unions of this Upazila. The area is climate and disaster vulnerable.  Considering the Climate Change consequences situation Faith in Action is working there to build people’s adaptability so that they may survive in their community. The Field Organizer of SAT-ICDP of FIA is working in the Ishwaripur union. The Filed Organizer Ms. Kusum Sarkar was creating awareness on the consequences of Climate Change in their life and how they can build their resilience capacity. People were interested and they have united under the SHG. The field organizer went to Bongsipur Hotathpara village and talked about the vision and mission SAT-ICDP Project and she discussed the purpose of the formation of the self-help group (SHG). She went there several times and established a good relationship with the community. After few months few women become interested to form an SHG. Then the FO formed an SHG named Prottasha Sabolombi Mohila Somity with 25 members on 07/03/2018. </p>
                                <p>Nazma Begum (37), President of Prottasha Sabolombi Mohila Somity is a housewife and her husband Emddadul Haque (50) is a Rikshaw puller in Dhaka. Their family consists of five members, of them three are their daughter. They are living below the poverty level.  Nazma was regular in the group and learned what was discussed in the weekly meetings and training sessions. She deposits 20/- weekly in her savings account. She was very keen to learn new things and practices in her family.</p>
                                <p>Nazma is a challenge taker and she had a dream to do something by herself. She took initiative many times but failed, she always tried different and new things. She wanted to get a loan but the microcredit providers discouraged her as she was not in a position to payback.  She was struggling to fulfill her dream but after a few days, she applied to the SHG for a small loan and it was approved. She invested Tk. 2000/- in the clothes business. She moves house to house and village to village and sells different items of clothes i.e. Maxi, Lungi, Three Piece, Gamcha, Thankapor, and women’s undergarments.  She sells in less profit than the market and her sales were growing day by day and she invested her profit in business. Also refunded the loan in time and took 2nd loan of Tk. 4000/- and later on 3rd loan of Tk. 9000/- has invested in the same IGA.  She makes good profits and finds new hope for her family. Now, she is contributing to her family and meeting financial needs. She is also helping to meet the cost of children's education. She is encouraging other group members to start any IGA they like. Other members are encouraged to see her success. </p>
                                <p>Being a mother and wife, business is extremely difficult to run but her husband and children helped and encouraged her a lot. They also appreciated her hard works. She already established a good linkage with different local markets for expanding her business. She is expecting to start a cloth shop in her community to create a job for others. Nazma is thankful to FIA. </p>
                            </div>
                        </div>
                    </div>
                </li> 

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">“NO” to child marriage - Hosneara an Example</div>
                    <div class="acc-content">
                        <div class="row">
                            <div class="content col-lg-9" style="text-align: justify;">
                                <div class="text">Hosneara Parvin was born in an economically deprived coastal family from the Moukhali village under the Burigoalini Union which is known as one of the most vulnerable areas in Shyamnagar Upazila on the aspect of the disaster. She is 12 years old and a student of class VII at Nekjania High school. Hosneara became a member of the student club in February 2018 and like other girls, she is dreaming to be a doctor. Her father Khan Jahan is a fisherman and her mother Muktiara Begum is a housewife. Though Khanjahan’s income was not sufficient for the five-membered families but somehow, he could manage to provide support for his family. But COVID-19 and the cyclone, Amphan destroyed his livelihood completely. He became helpless and arranged a marriage for Hosneara to reduce the economic burden from his shoulder. Hosneara was shocked to hear the news and asked for help from the PB&J committee. She said, I don’t want to get married right now, I want to complete my studies, please help me. Mr. Shibashis Mondal, a school teacher of Nekjania High school and the President of the PB&J committee along with two other members from the committee and the respective FO, Joel Das went to her house to motivate her father not to arrange the marriage of her daughter. They tried to motivate him in every possible way but he said, “I understand everything but what should I do? I don’t have any option to support her studies”. Then PB&J President Mr. Shibasis Mondol assured him that he will manage her study support from the school. He requested Khanjahan, please don’t put her life in danger organized early marriage. She will die psychologically and you will put her life in threat. But if she could complete her study, she could contribute to your family and will have a better future with dignity and respect.  Realized his ignorance, Khan Jahan changed her decision and promised to not arrange her marriage before 18. Now Hosenara is very happy and said I will continue my studies and I will stand against child marriage in our community.</div>
                            </div>
                            <div class="image-column col-lg-3 col-md-12 col-sm-12">
                                <div class="inner">
                                    <div class=" clearfix">
                                        <div class="image" style="padding-right: 15px;" data-wow-delay="0ms"><img class="" src="{{asset('frontend/images/hosneara.jpg')}}" data-src="{{asset('frontend/images/hosneara.jpg')}}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">“PSF brings big changes in our life”……Shoti Barman</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="image-box" style="text-align: center;">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('frontend/images/resource/event-image-10.jpg')}}" alt=""></figure>
                            </div>
                            <div class="text" style="text-align: justify;">
                                <p>Due to the geographical location, Manikkhali becomes one of the most vulnerable villages in the Ramjannagar Union of Shyamnagar Upazila. In this area, Salinity in the water, scarcity of drinking water, lack of sanitation, lack of nutrition, lack of livelihood are the most common problems like any other coastal area in Bangladesh. Four thousand people are living in this village and most of them are farmers and day labor. The project has started working in this area since March 2018. As there was no source of drinking water nearby people especially the women’s have to go far from their house to get water and most importantly they have to buy drinking water from the supplier which costs at least 600 takas per month for each of the family. Children are often suffering from water-borne diseases as some times they drink dirty water from pond or cannel when they don't have enough money to buy water. Under these circumstances, the project decided to install one Pond Sand Filter to reduce the drinking water crisis from the community.</p>
                                <p>Rajani Kanta Barman, one of the SHG member’s father in law offered to use his land and pond to install PSF for the benefit of the community. After installation, a five-membered committee has been selected by the community to maintain the PSF. The committee members are responsible for cleaning the surroundings of the pond and PSF regularly. </p>
                                <p>Now the villagers are very happy as the PSF makes their life easy and reduces their burden of buying drinking water for their family. Moyna Begum one of the SHG members said, “Now we don’t need to go far or wait for a long queue to buy drinking water, now we can get water whenever we want and it’s free”! Another group member Shoti Barman said, “Now we can save money from buying drinking water and from the doctors as well because now our children do not become sick often, PSF brings big changes in our life”.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">A small device change Muslima’s world</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="image-box" style="text-align: center;">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('frontend/images/resource/event-image-9.jpg')}}" alt=""></figure>
                            </div>
                            <div class="text" style="text-align: justify;">
                                <p>A 13 years old girl named Mosammat Muslimahasan was born with a hearing impairment. Her left ear was fully damaged and the right ear was 95% damaged. As she didn’t hear any sound she could not speak at all because her world was unspoken.</p>
                                <p>Muslima’s parents separated when she was 7 years old. Muslima’s lives became uncertain from that day when her father refused to take any responsibility for her admeasured. Her mother was an uneducated housewife and had no working experience so they had to take shelter at her uncle’s house at Jangalia village under Mohammadpur Union. Her uncle Md. Kabul Miah offered a helping hand to Muslima and took initiative to admit her at school. But he was refused from the schools due to there was no specialized school in his area and the mainstream schools didn’t have the facility for the person with a disability. Her uncle suffered a lot but finally, he managed to admit Muslima a mainstream school named RSKH Institution at Mohammadpur. After getting admission Muslima started to face new challenges at the school. She lost her interest to go to school because everyone laughed at her and no one wants to become her friend.</p>
                                <p>One day Muslima’s uncle contact Faith in Action’s staff because he heard that this organization is working for the person with a disability and provided assistive devices for them. FIA’s staff enlisted Muslima’s name and gave assurance to help her.</p>
                                <p>On 11 & 12 August 2015 Faith in Action arranged a two-day long Bus Camp at Mohammadpur Upozila, Magura with the support of the SCANED project from the Centre for Disability in Development (CDD) were some specialized doctors (Physiotherapy, Occupational therapy, An audiogram, and Visual) who came and provided medical assistance. From this bus camp, Muslima was examined and prescribed to get a hearing aid to solve her problem. But her problem was unsolved because the hearing aid was quite expensive for her uncle and he failed to manage the device. Then He requested a free Hearing Aid to the Executive Director of Faith in Action through the FIA’s staff. As FIA had no option to provide a Hearing Aid at that time, the Executive Director of FIA requested the SCANED project through CDD to consider a Hearing Aid for Muslima. As per the request, a specialized person from the SCANED project was sent with a Hearing Aid to fix the device. After fixing the device Muslima was flinched to hear the sound because that was the first time in her life that she heard something. She took the time to get used to it and after that, she was so happy and tried to express her happiness with her language (sign language). After a re-examined specialized person from CDD said that as Muslima can hear the sound now she will learn to speak very soon. By using her language, Muslima said I’ll continue my study and became a Government officer. We also hope that one day Muslima can speak and became a Government officer and serve the country.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">Aisha is untied from the rope</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text" style="text-align: justify;">
                                <p>Aisha Akhter Sayma is the elder daughter of Mr. Abdul Ahad and Mrs. Rabeya Begum. They live in Dangapara village under Polash baria union, Mohammadpur, Magura. Aisha has a 6 years old brother who is attending Pre-primary school runes by Faith in Action. Her father is a farmer and her mother is a housewife. 10 years old Aisha was born with Cerebral Palsy. But her parents had no idea about cerebral palsy. They thought that it was the work of an evil spirit. So they took her to the shaman and other traditional healers. But when they didn’t saw any improvement of their daughter, they through all their hopes into the garbage and started to give more attention to their boy. One day Faith in Action’s staff was passing by their house and heard someone is screaming very loudly, he entered the house and found that Aisha was a tie-up with the rope-like an animal and bitten by her mother. FIA’s staff stops her mother and asked why you are doing this to your daughter? I’m fading up with this girl and I want her to die, she replied with tears. FIA’s staff realized the pain of a mother. He knows how difficult to manage a person living with cerebral palsy. He reassured that he will help her. He told Aisha’s parents that the injury and damage to the brain are permanent it does not “heal” but the impairment caused by Cerebral Palsy is manageable. Regular therapy and assistive technology will reduce her barriers and improving the quality of life. FIA’s staff started to give regular motivation to her parents in different issues like the rights and needs of a person with a disability and taught them how to give therapy. After getting regular therapy and proper care Aisha’s parents found a big difference in her life which was made them surprised. They found that before Aisha could not respond to anything at all but now she can respond. Her parents are very happy about these changes. They said that this change is possible with the help of FIA. Her father said now I spend more time with my daughter and every evening after my work I took her outside to visit our relatives or neighbors' residence for her entertainment. He said now we are more aware of our daughter and we will create awareness for those who have childlike my daughter.</p>
                            </div>
                        </div>
                        <div class="image-box text-center">
                            <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('frontend/images/aysha-2.jpg')}}" alt=""></figure>
                        </div>
                        <div class="content">
                            <div class="text">
                                <p>In the meantime, Aisha’s mother becomes a member of an SHG named Joba Mohila Somity and with the help of FIA staff she applied at the Social Welfare office for a Disability card and now she gets disability allowance regularly for her daughter. FIA also provides a wheelchair for Aisha and now she can stand up with the support of the wheelchair.</p>
                                <p>We also hope that the day is not far away when children like Aisha will not tie-up with the rope and every child will be able to live their life with love, rights, and dignity. </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">Beginning of new Hope</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('frontend/images/new-hope-1.jpg')}}" alt=""></figure>
                            </div>
                            <div class="text text-justify">
                                <p>Latifa Begum is a housewife and a mother of two boys and one daughter. She lives with her family in Modinabad, Koyra. Her husband Khalilur Rahman is a rickshaw puller and lived in Khulna city for a better income. He was the only earning member of the family. Though the income was not sufficient for the family somehow they can manage their basic needs. Her elder son is dropped out of the school as they are not able to pay the school fees but the other children continuing their study. Latifa Begum became a member of Chander Alo SHG at Modinabad since it was formed on November 29,2019. Suddenly the source of income was stopped for her family and her husband has to return to Koyra with his Rikshaw as the Government declared a countrywide lockdown for the outbreak of Coronavirus. The whole family becomes helpless as they don’t have enough savings to start other businesses or find alternative work to live their life. Under these circumstances, one of our CF communicates with her over the phone as all the weekly meetings or social gathering is restricted by the government right at this moment. Latifa shared her situation with the CF and said with heavy-hearted that we have only four hundred takas left to live our lives and I don’t know what is going to happened with my family after finish this amount. After hearing her sad story our CF inspired her with logic to start making Iftar for selling in the village as it is the month of Ramadan and most of the villagers are Muslim. Most importantly all the Iftar shops in the markets are closed now. So it could be a profitable business for this time. She understands the logic and from that day she started making Iftar with her husband and invest all their savings on it. Surprisingly they made a profit of two hundred takas on the first day which was beyond their imagination. This profit made them confident and inspired them to continue the business. Nowadays they are making a profit three to four hundred takas every day by selling Iftar. Our CF regularly communicate with her and a few days back asked her what you are going to do after Ramadan? Do you have any plans? She answered with confidence, “first we give a new shape of our rikshaw and turned it to a van by changing its body, then we will start selling Chotpoti in our area so my husband doesn’t need to pull the rickshaw again. I will send my elder son to the school again and all are my children's become educated”.</p> 
                            </div>
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('frontend/images/new-hope-2.jpg')}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                </ul>
                                <div class="text-content text-justify">
                                    <p>We are also inspired to see the changes in Latifas life and hope that she will become an inspiration for the other SHG members.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">Disability is not a barrier- Bithika</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/disability-not-barrier-1.jpg')}}" data-src="{{asset('frontend/images/disability-not-barrier-1.jpg')}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                </ul>
                                <div class="text-content text-justify">
                                    <p>
                                        27 years old Bithika belongs to an economically deprived family from a minority community. She lives in Volanathpur under Mohammadpur Upozila with her Parents and four sisters and one brother. When she was 2 years old she was invaded by Polio. Her parents took her to the local Kobiraj and Fakir for treatment. As a result, she becomes physically impaired. She had never attended school because her parents felt that it was not necessary for a girl and also one with a disability to go to school.
                                        Bithika was keen on joining the local NGO in her area but she was denied as they felt she could not participate in the meeting and contribute to the savings and credit program. Even her parents also thought that she was a burden for the family. She lost every hope for her life.
                                        A few years back Bithika heard that one NGO named Faith in Action started their work in her village. She was surprised that one day a person from that NGO came to her residence and inspired her to join with Self Help Group run by them. She also learned that this NGO facilitating women’s empowerment and Inclusion of Person with Disability programs in her area.
                                    </p>
                                </div>
                            </div>
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/disability-not-barrier-2.jpg')}}" data-src="{{asset('frontend/images/disability-not-barrier-2.jpg')}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                </ul>
                                <div class="text-content text-justify">
                                    <p>
                                        On 19/11/2014 Bithika becomes a member of a Self Help Group named Joba Mohila Somity and started to attend weekly meetings regularly. From the weekly meeting, she learned about the Rights of Person with Disability, Women’s empowerment, Disaster Risk reduction, Faith Gardening, How to prevent common diesis and many other important things that relevant to her daily life. Then she joined with 3 months of long sewing training run by Faith in Action. After the training, she took a loan from the Self Help Group to buy a sewing machine and started her small sewing shop at her residence. By making ladies and children’s wear Bithika earned a profit of about taka 1500-2000 per month and from that profit, she repaid her loan. Now she could contribute to her family. She becomes a valued member of her family. She is no more a burden for her family members. Now she got the decision making power in her family and the Self Help Group. She said, “I don’t have to depend on others, now I am Independent”.  She dreams that one day her small shop becomes big where the women with disabilities could get the opportunity to work and change their fate. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">Journey to Dignity</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/journey-to-dignity-1.jpg')}}" data-src="{{asset('frontend/images/journey-to-dignity-1.jpg')}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                </ul>
                                <div class="text-content text-justify">
                                    <p>
                                        Sebadashi Biswas is a 70 years old widow living in Bonogram village under Sotrujitpur Union. Her husband passed away when she was young. She became helpless with her three children and started begging to live her life. She got used to begging and taking it as a profession. Though she has a young son her son was jobless. Naturally, her family members became dependent on her income. After few years Sebadashi found that gradually she became visually impaired due to both of her eyes were affected by cataracts. But she didn’t have any other choice. She has to continue begging for her family.
                                    </p>
                                </div>
                            </div>
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/journey-to-dignity-2.jpg')}}" data-src="{{asset('frontend/images/journey-to-dignity-2.jpg')}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                </ul>
                                <div class="text-content text-justify">
                                    <p>
                                        In the GO-NGO co-ordination meeting, the Honourable DC shared the 10 points priority agenda of our Honourable Prime Minister for immediate action and one of the top priority agenda is to rehabilitate beggars to bring them back in normal life to establish their dignity in society. From that meeting, Honourable DC requested FIA to take responsibility to rehabilitate beggars of the Sotrujitpur Union. It was a challenging job for us because we don’t have any previous experience working with beggars. After getting the responsibility we surveyed to assess the capacity and skill of them and found that Shebadashi’s son (Parimal) knows how to make a basket, winnowing-fan by bamboo but due to lacking capital he could not able to start a small business. After assessing the market we found that the product he can make has a huge demand in the local market. We decided to give some capital to buy bamboo in one condition that he has to take responsibility for his mother and do not allow her to beg. He agreed with the condition and made his commitment to do so.
                                        In the meantime, we took Shebadashi to Ad-Din Hospital (where marginalized people get free eye treatment), and from that hospital, her cataract was removed and now she can see.
                                         Shebadashi is not going for begging anymore now she is working together with her son and daughter-in-law and earns 7500 BDT per month. Now Shebadashi becomes a role model for the others. She said, “Now I’m self-depended, I don’t have to wait for other's grace, now I’m living a lightning life”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">Konika’s dream</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/konika-1.jpg')}}" data-src="{{asset('frontend/images/konika-1.jpg')}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                </ul>
                                <div class="text-content text-justify">
                                    <p>
                                        I am Konika Rani and I’m a 35 years old housewife. We live in Pathar Khali village under  Uttar Betkashi Union, Koyra. We have four members of our family. Me, my 46 years old husband Nittyanonda Dhali, my mother, and my 19 years old daughter Hira Dhali. My daughter is a 2nd-year student of class 11. My husband is day labor and he is the only earning member for our family. His monthly income is 6 to 7 thousand takas per month. As we don’t have land for farming so we have to depend only on my husband's income. It was quite difficult to manage the expenditure with a little income.
                                        In September 2019 I heard that one NGO named Faith in Action MCR-ICDP started its work in our area and they united the most marginalized women in the community and tried to start a group with them. Finally, on 15 December 2019, they started the group named Ashar Alo self-help group. Just out of curiosity I joined with the group. On 21st January they arranged one agricultural training and from that training, I learned about saline tolerant crops and various new technic to produce more vegetables like Bed, Mada, Pocket, Tob, Tower, etc. They also teach us how to make compost. They also provide us some seeds to cultivate.
                                    </p>
                                </div>
                            </div>
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/konika-2.jpg')}}" data-src="{{asset('frontend/images/konika-2.jpg')}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                </ul>
                                <div class="text-content text-justify">
                                    <p>
                                        After getting this training I use my learnings in my small courtyard which is only 10 Katha area including my house and by using those technologies I get a huge production of vegetables. After meeting my family's needs I sold it to the market and to date I have earned 3300 takas. Now besides my husband, I can contribute to my family especially during this crisis period of coronavirus. Now I am planning to take lease some lands beside my house and expand my garden as I know how to use the technology to grow more vegetables. Now I have a dream that one day I will get rid of poverty by producing more vegetables.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">Monoara find Justice</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="image-box text-center">
                                <figure class="image"><img class="lazy-image" src="{{asset('frontend/images/monowara.jpg')}}" data-src="{{asset('frontend/images/monowara.jpg')}}" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                </ul>
                                <div class="text-content text-justify">
                                    <p>
                                        Monoara Begum is the youngest daughter of Md. Lal Miah Sheik from Gopal Nagar village under Mohammadpur Union, Magura. Like other ordinary Bangladeshi girls, Monoara also had a dream to become a housewife and live a peaceful and adorn life with her husband and children. On March 26, 2015, her father arranged her marriage with a man named Md. Abdul Kader from Mondolgati village under Kotoali Union, Jessore District. That day Monoara was very happy and thought that her dream becomes true. After her marriage, she went to her husband’s house and suddenly discovered that her dreams become a nightmare. She finds that her husband wedded twice before marrying her. Though her husband got separation from those wives he has two children from his previous family which Monoara has to take care. Monoara was thundered. But she tried to adjust with the situation as she was a typical Bangladeshi woman. After few days Monoara started to face new problems. Her husband pressurized her for money to start a new business. Monoara took some money from her father and gave it to her husband but after a few days her husband asked for money again. This time Monoara’s father borrowed money from the money lender and gave it to his son in law. But Monoara’s husband didn’t stop. He keeps pressurized to Monoara for more and more money. Monoara refused to give money as her father was a poor farmer. Then she was repeatedly tortured both physically and mentally by her husband. One day she could not tolerate the torture and escaped from her husband’s house. She came back to her father’s house and contact with an NGO seeking for justice. From that NGO she was suggested to go to the court and file a case against her husband. As per the suggestion, she went to the court and find that filing a case is a very lengthy and expensive process. She came back home with her broken heart. One day one of her neighbor (who was a Self Help Group member of Faith in Action) informed her that Faith in Action set a complain box in front of the FIA school for women and child protection. Where anyone can make complain both written and over the phone against the violence occurred with the women’s and children’s at the community. Monoara took the opportunity and made a call to the number given in the complaint box (September 27, 2016). After received a call from Monoara FIA staff informed to the Executive Director and with his advice, the next day FIA staff went to meet with Monoara and took her to the Upozila Women’s Affairs Officer and help her apply to the Upazila Nirbahi Officer (UNO) to get justice. After getting the application UNO called the women’s affairs officer and gave official authority to solve the case. Then women’s affairs officer issued first notice to Monoara’s husband to come and meet with her at her office. But she didn’t get any replay from him. After one-month women’s officer issued second notice but still, there was no reply. In the meantime, FIA decided to recruit Monoara as an Adult Functional Literacy Teacher so she could help her father to repay his loan. FIA staffs also gave her courage to not become disheartened. FIA also worked as a coordinator between Monoara and Govt. office. On December 5, 2016, Monoara’s husband came to women’s affairs office and said, “I am very sorry for everything happened with Monoara now I want to take my wife with me and I am giving you the assurance that this will not happen again”. But from the women’s officer replayed, if you want to take your wife with you, you have to come here with your parents and you have to give a bond sign in front of Govt. officials in a stamp paper. He agreed with this condition and finally came with his parents on January 23, 2017, and gave a bond sign in a stamp paper in front of UNO, Social good fare officer, and women’s affairs officer. In the stamp paper, he mentioned that he will never ask for dowry and he will never torture his wife mentally or physically and he will take care of his wife and give her respect and he will ensure his wife’s security. He also mentioned that if I break any of this condition my wife or Govt. could take any legal action against me. After all, this Monoara came to FIA staff’s and gave thanks from her heart. She said I’ll be always grateful to FIA because FIA gives me courage, hope, Job and I found FIA beside me when I needed. FIA is doing a noble job in our area. I’ll always remember what FIA did to me.
                                        We also hope that Monoara’s life becomes full of love and happiness and her all the dreams will come true
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection