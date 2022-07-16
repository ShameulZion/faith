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
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Policy & Guidelines</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Policy & Guidelines</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section style-two alternate">
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="auto-container">
            <ul class="accordion-box clearfix">
                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">Staff Recruitment Policy</div>
                    <div class="acc-content">
                        <div class="content policy-guiline-section">
                            <dir class="ptb30">
                            <h4>1. Policy Introduction</h4>
                            <p>
                               Faith in Action is committed to a comprehensive policy of Equality of Opportunity in Employment in which all individuals are treated on the basis of their relevant merits and abilities. Faith in Action seeks to promote good recruitment and selection practices and to ensure that in all cases the best candidate for the regular position is appointed. <br><br>
                               When recruiting staff, it is important not to discriminate on any unfair or unlawful grounds, e.g. sex, race, disability, marital status, sexual orientation and/or religion or belief. <br><br>
                               Responsibility for ensuring that the correct procedures are followed lies with the head office /project Manager responsibilities or recruiting and will be monitored by Human Resources. All who are involved in the recruitment and selection of staff are expected to observe these procedures and to ensure that their actions are consistent with the principles of these procedures. All members of each Appointing Committee must have undertaken orientation in recruitment and selection.
                            </p>
                            <h4 class="pt30">2. Recruiting of Family Members</h4>
                            <p>
                                Faith in Action encourage to acknowledge a disclosure in case of regular staff or consultants or contractors or service providers who is related by blood or marriage to any Faith in Action Board member or staff. Family member includes spouse, mother, father, brother, sister, grandfather, grandmother, grandson & daughter, aunt, uncle, nephew, niece or first cousin or any of the above as an "in-law" related by marriage.
                            </p>
                            <h4 class="pt30">3. Planning and preparation</h4>
                            <p>
                                A staff request should be raised by the Executive Director and obtained approval from the Executive Committee. <br><br>
                                A new post requires a Job Description which should be raised through HR and respective supervisor/manager. Once financial clearance has been provided, HR officer will take further actions. <br><br>
                                It is extremely important that the content of the job description clearly reflects the duties, skills and experience required for the post. A fully detailed and clear submission of a job description, in standard format, will normally result in the grading confirmation within 4 working days. In certain circumstances, further information may be required by HR before grading can be confirmed.
                            </p>
                            <h4 class="pt30">4. Advertising and recruitment timetable</h4>
                            <p>
                                Advertising <br>
                                Staff recruitment adverts will be placed by the HR. <br>
                                Once the vacancy has gone through the approval process in HR the HR Coordinator will arrange adverts through common magazines and websites at least 45 days before the interview.
                            </p>
                            <h4 class="pt30">5. Membership of appointing/interview committee</h4>
                            <p>
                                The composition of the 3- or 5-members appointing panels will be nominated by the Executive Committee. A Convener should be identified at this stage. <br>  
                                The role of the Convener is: <br>
                                <ul>
                                    <li>ensure fairness and equality for all candidates. </li>
                                    <li>assign areas to be covered by each panel member; </li>
                                    <li>greet the candidate and introduce him/her to all the members of the panel; </li>
                                    <li>direct the questioning and ensure continuity; </li>
                                    <li>manage the interview process especially in relation to time management; </li>
                                    <li>record initial scores; </li>
                                    <li>vote where consensus cannot be reached. </li>
                                    <li>record final decision. </li>
                                    <li>ensure a decision is made concerning probation for academic appointments (as appropriate)</li>
                                </ul>
                            </p>
                            <p>
                                <br>
                                When appointing the Committee consideration should be given to the following: <br>
                                <ul>
                                    <li>The appointment/interview committee's gender balance should reflect the gender representation of the subject specialist and at a minimum there should be at least one person of each sex represented; </li>
                                    <li>Any member of an Appointing/interview Committee should declare any conflicts of interest to the Convener; </li>
                                    <li>Appointing/interview Committee members cannot act as referees for candidates being interviewed; </li>
                                    <li>Orientation in Recruitment and Selection is mandatory;</li>
                                    <li>Careful consideration should be given to take account of principles of Equality and Diversity.</li>
                                </ul>
                            </p>
                            <h4 class="pt30">6. Short listing</h4>
                            <p>
                                The Appointing Committee is to reach a shortlist in a way which is reliable, valid and fair by comparing evidence in the application against the essential & desirable criteria for the post. <br><br>
                                The job description should identify those essential and desirable criteria which can be assessed from the details contained in the application form/CV/letter of application. It is extremely important that the essential and desirable criteria are compiled with the needs of the post and the skills required. <br><br>
                                The respective Project Manager will email/phone call a shortlist assessment form and interview request form to all members of the Appointing/interview Committee once the closing date has been reached. All members of the Appointing/interview Committee should normally be involved with this process. <br><br>
                                All candidates called for interview must meet all essential criteria, where a candidate does not meet one or more of the essential criteria, that a candidate cannot be invited to interview. If you have a large number of applicants who appear to meet the essential criteria, then the desirable criteria should be used to identify those who are most suitable. <br><br>
                                It is essential that all information is completed correctly on the shortlist assessment form in order that this can be used as a formal record for candidates whether they have been shortlisted or not. The individuals can potentially appeal against a decision not to be shortlisted, decisions taken therefore must be fair, objective and non-discriminatory and properly recorded.
                            </p>
                            <h4 class="pt30">7. References</h4>
                            <p>
                                The purpose of an employment reference is to obtain information about the past employment history of a candidate. References need to be treated with some caution by the Panel, as they have the potential to be indirectly discriminatory due to the possible prejudice of the 2 referees. This is generally a policy decision and should not be seen as a negative comment on the person's suitability. <br>
                                <ul>
                                    <li>Authorization must be obtained from each candidate prior to any contact with the referees. </li>
                                    <li>At least one reference must be the candidate’s current employer (where applicable). </li>
                                    <li>References are confidential to members of the Appointing Committee and should not be passed to anyone else, including the candidate. </li>
                                    <li>A final offer will not be confirmed until all references have been received. </li>
                                    <li>References should be used to inform the final decision-making process. </li>
                                    <li>All references will be obtained from Human Resources.</li>
                                </ul>
                            </p>
                            <h4 class="pt30">8. The interview</h4>
                            <p>
                                Each member of the Appointing/interview Committee should, before the interview:
                                <ul>
                                    <li>review job description</li>
                                    <li>assess the application form /CV</li>
                                    <li>bearing in mind the essential & desirable criteria decide which areas to explore and in what sequence – normally coordinated by the Convener</li>
                                </ul>
                                Applications of short-listed candidates must not be circulated to anyone other than the members of the Appointing/interview Committee. <br><br>
                                Selection techniques not detailed in this policy should only be adopted with prior agreement and guidance from Recruiting Committee Convener. <br><br>
                                The questions posed at interview stage should be designed to gather evidence in relation to criteria being assessed at interview stage. <br><br>
                                All candidates short listed should be interviewed (written & Viva) on the same day. If this is not possible, the interviews should be held over as short a period of time as possible. All candidates should be seen and considered by the same Appointing Committee. <br><br>
                                HR Coordinator will contact all short-listed candidates to confirm interview details. <br>
                                HR Coordinator will write or explain over to all short-listed candidates giving interview details. <br>
                            </p>
                            <h4 class="pt30">9. Recommendation</h4>
                            <p>
                                Once a preferred candidate has been identified by the Committee, the Convener should complete the Interview Recommendation Form and all information, including one interview assessment form represent the collective view of the Appointing/interview Committee for each candidate, should be returned to the HR Coordinator.
                            </p>
                            <p>Pre employment checks:</p>
                            <table class="table table-bordered">
                                <tr>
                                    <td>Verification of qualifications</td>
                                    <td>Original qualifications will be checked by the HR Recruitment Team. All offers will be made subject to the sight of these by HR </td>
                                </tr>
                                <tr>
                                    <td>References </td>
                                    <td>All outstanding references will be collected and an offer subject to satisfactory references, if still awaited, will be issued </td>
                                </tr>
                                <tr>
                                    <td>Disclosure </td>
                                    <td>Where a post requires a disclosure (relationship & other) check an offer will be made on a conditional basis, subject to the receipt of a satisfactory disclosure.</td>
                                </tr>
                            </table>
                            <h4 class="pt30">10. Induction</h4>
                            <p>
                                On arrival, new staff members should be inducted by their line manager to introduce them to their department or School. The mentor will also work through a checklist with them to ensure they are familiar with arrangements for IT, health and safety and other important information.
                                <br><br>
                                Inductions will vary depending on whether the staff member is new or they are an existing staff member switching roles or returning from a long absence.
                                <br><br>
                                The first day for a new staff member in the office is particularly important. Faith in Action will want to make the new staff member feel welcome and enthusiastic about their new job.
                                <br><br>
                                On a new staff member's first day, you should:
                                <br>
                                <ul>
                                    <li>introduce them to their colleagues, managers and supervisors</li>
                                    <li>office premises, pointing out important areas such as:
                                        <ul style="margin-left: 25px;">
                                            <li style="list-style-type: circle;">toilets, fire escapes, break rooms, their work area.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        general information on Faith in Action/project, which may include:
                                        <ul style="margin-left: 25px;">
                                            <li style="list-style-type: circle;">a copy of code of conduct, annual reports</li>
                                            <li style="list-style-type: circle;">Project annual plan, organizational/project charts</li>
                                            <li style="list-style-type: circle;">phone lists, stakeholders</li>
                                        </ul>
                                    </li>
                                    <li>
                                        employment conditions and policies, including:
                                        <ul style="margin-left: 25px;">
                                            <li style="list-style-type: circle;">work hours and breaks times</li>
                                            <li style="list-style-type: circle;">pay details, including when they can expect to be paid</li>
                                            <li style="list-style-type: circle;">leave entitlements</li>
                                            <li style="list-style-type: circle;">probation periods for new staff.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        necessary work health and safety information, including:
                                        <ul style="margin-left: 25px;">
                                            <li style="list-style-type: circle;">fire and evacuation instructions</li>
                                            <li style="list-style-type: circle;">details about any training you've planned for them, smoking</li>
                                        </ul>
                                    </li>
                                    <li>duties and have some work for them to do</li>
                                    <li>necessary equipment, uniforms, email addresses and computer access details</li>
                                </ul>
                            </p>
                        </dir>
                        </div>
                    </div>
                </li> 

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">Anti Corruption Policy-FIA</div>
                    <div class="acc-content">
                        <div class="content policy-guiline-section">
                            <embed src="{{asset('frontend/images/polices/anti-corruption-policy-fia.pdf#toolbar=0&navpanes=0&scrollbar=0')}}" type="application/pdf" width="100%" height="500"> 
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">Feedback and Complaint Response Mechanism</div>
                    <div class="acc-content">
                        <div class="content policy-guiline-section">
                            <embed src="{{asset('frontend/images/polices/feedback-and-complaint-response-mechanism.pdf#toolbar=0&navpanes=0&scrollbar=0')}}" type="application/pdf" width="100%" height="500">  
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">FIA Vulnerable Adult Safeguarding  Policy</div>
                    <div class="acc-content">
                        <div class="content policy-guiline-section">
                            <embed src="{{asset('frontend/images/polices/fia-vulnerable-adult-safeguarding-policy.pdf#toolbar=0&navpanes=0&scrollbar=0')}}" type="application/pdf" width="100%" height="500"> 
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">Gender Policy</div>
                    <div class="acc-content">
                        <div class="content policy-guiline-section">
                            <p><strong>Introduction</strong></p>
                            <p>In view of creating gender equality and gender friendly environment in the organization as well as in all its programs Faith in Action (FIA) has plan to operate integrated development programs in the community. These programs will enable to create a sustainable society and environment by personal and collective efforts of all level of stakeholders but initiative will be taken by FIA. FIA is committed to improve the economic, social and environmental situations of poor and powerless people in the community. The majority of the poor and powerless in the community is women. It is crucial to engage this section of population in the mainstream of development. Without their participation development is half done and would not sustain. Women are basic foundation of a family and they must be dignified and respected equally with the man. In the field of development there should be  no gender discrimination. In view of the development of women the organization will undertake few steps which will ensure the participation of women in organizational decision making process.</p>
                            <p>FIA believes that it is not possible solely by the organization itself to change the situation of women. FIA will initiate to aware and seeks direct and indirect participations of all related staffs of the organization as well as all other stakeholders like; non-government and government staff, local council members and civil societies.</p>
                            <p><strong>Initiatives of FIA in gender issues: </strong></p>
                            <p>FIA has been involved in promoting gender equality in the community through its programs since its beginning. The organization will undertake several activities to improve the situation of its staff and organized women group members as well as through its program interventions like; child education, training, income generating program (IGP), relief and rehabilitation, etc. The organization will continue different women and child development programs till women are being empowered in the community. Moreover the organization has recruited women and will be recruiting women in the mid-level positions to run its programs in view of facilitating more women. FIA encourages women to join its projects and programs. The organization feels that due to discriminating relationships between men and women in the society has become more complicated. FIA will create gender balance in the community taking different women development programs to reduce the vulnerability of women and children such as social exploitation, injustices, rights, child labor, dowry, divorce, wages, physical and mental abuse etc. </p>
                            <p>In view of this the organization will motivate women, provide skill training, provide self-help credit support and other opportunity to be aware and self-reliant which will eventually help them to be empowered. The empowerment of women will help to create gender balance in the community indeed. </p>
                            <p>Gender policy is a written document which will help to create a gender sensitive environment among all its staff, teachers, organized men and women, stakeholders, vendors and donors. And this policy will help to bring women in the main stream of development.</p>
                            <p>From the inauguration, FIA has been feeling the necessity of a gender policy for running its organizational programs and activities. The visit and discussion of Tear Australia also made it more clear the need of a gender policy. The main objective of this gender policy is to guide staffs for considering gender issues in all development programs and projects and its implementation, monitoring and evaluation process. This policy will help to take more tangible and dynamic participation of women in various development programs of FIA and simultaneously it will create impact in the family as well as in the society to accelerate gender equality. Gender policy will establish gender equality within FIA establishing gender friendly environment in all level of FIA programs. It would be gender friendly organization and there will be no discrimination of genders in recruitment, promotion, capacity building/training, leaves, salary and benefit etc. </p>
                            <p><strong>Aims of Gender Policy: </strong></p>
                            <p><strong>Primary Aims: </strong></p>
                            <ul>
                                <li>   Initiate to operate sustainable gender sensitive programs and ensure gender equity in the community.</li>
                                <li>   Create a friendly environment for both man and woman in the organization as well as in the project and community level. </li>
                                <li>   Institutionalize gender and gender concerned issues within the organization.</li>
                            </ul><br>
                            <p><strong>Specific Aims: </strong></p>
                            <ul>
                                <li>   Ensure equity between male and female staffs at all layer of the organization and its programs. </li>
                                <li>  Create such environment where gender and women voices will be considered and tension between men and women will be minimized.</li>
                                <li>Formulate a strategy for evaluate the outcomes of that have been occurred in the organization after being implemented this policy.</li>
                                <li>Institutionalize gender related programs and strategies.</li>
                                <li>Promote women participation in development process. </li>
                                <li>Contribute strengthening the government and non-government, local and national infrastructure which are concerned for the advancement of women in legal, social, and economic issues. </li>
                                <li>Take positive initiative for woman considering the history of background of their backwardness and exploitation. </li>
                                <li>Bring gender equity in the management level of the organization.</li>
                            </ul><br>
                            <p><strong>Who will use this Gender policy: </strong></p>
                            <p>FIA staff, stakeholders, vendors, program participants, visitors and donors will use this policy for their well-being and advancement of gender equity.</p>
                            <p><strong>Strategies for Internal and External purposes:</strong></p>
                            <ul>
                                <li>FIA will conduct an internal evaluation among its staff in view of finding out to what extent the staffs are concern about gender equity and how they are capable to operate and cope with the policy. This evaluation will also focus to what extent this policy has impacted the program participants in their behavioral changes.</li>
                                <li>FIA will protest against any anti women declaration and initiatives and will support the organizations those are actively engaged in working for elimination of physical and mental torture to women. Apart from this the organization will support the organizations those are working for empowering and well being of women. </li>
                            </ul><br>
                            <p><strong>Policy implementation strategy:</strong></p>
                            <p>The aims and objectives of this gender policy are to explore the gender discrimination,  problems and to find out solutions. Moreover this policy will help to uphold the gender equity among committee members, officers, staffs, beneficiaries and dev. partners of the organization.</p>
                            <p><strong>What FIA will do:</strong></p>
                            <ul>
                                <li>FIA will assist to establish an equal working environment in its office premise and in organized groups. </li>
                                <li>FIA will take proper steps and develop strategies and processes to create gender sensitiveness. </li>
                                <li>To eliminate gender discrimination temporary positive initiative could be taken but this temporary initiative shall be dissolved whenever discrimination is eradicated.</li>
                            </ul><br>
                            <p><strong>What FIA will not do:  </strong></p>
                            <ul>
                                <li>FIA shall not launch or implements any project which may disregard women or create obstacle to gender equity.</li>
                                <li>FIA will not recruit any person who is not respectful or does not believe in women equal rights and their freedom. </li>
                                <li>The organization will not create any obstacle to the freedom of speak of women (even not to men also).</li>
                                <li>The organization will not create obstacle to any positive women development cases. FIA  will operate its activities towards women development and their capacity building.</li>
                            </ul><br>
                            <p><strong>The steps for the participants in the program of FIA . </strong></p>
                            <p>FIA prioritizes on various gender issues, which is important for the success of its dev. programs. Because its programs are being designed and will design in order to develop women. FIA emphasizes and aims women and children situation and possibilities in all its development planning, monitoring and evaluations. FIA indents to run it’s all activities aiming at improvement of living status of all members of family and community through women and their participation in programs. Participation of women in all activities is obligatory and the project is considered failed if the women are not considered to attain the development process. It was not easy for FIA to give importance to involve women in the mainstream development activities but we continued journey with strict management. FIA desires undertaking gender equity programs that will accelerate women development and these would include freedom of speak poverty alleviation, education, skill development, awareness, training, health education etc. All these programs will ensure woman participation in decision-making process. </p>
                            <p><strong>Women and poverty:</strong></p>
                            <ul>
                                <li>FIA organized group members have access to take loan from their self savings with easy conditions and from this loans are invested in income generation activities which are giving them income. These savings based credits are creating job facility for women and these women have gradually getting access to the family assets. Gradually they are establishing their ownership in the family assets. The IGA income has helped to develop their mental courage and this courage will help to go for further development to form greater organization called “People Institution (PI)”. </li>
                                <li>FIA is encouraging women to take projects including new sustainable and more cost effective technology which would be beneficial to them. During emergency relief support of FIA are helping to meet the needs of vulnerable women and children at emergency time. </li>
                                <li>FIA will protect the rights of the female and children in emergency relief and rehabilitation honoring the HAP, RC and Sphere standards. </li>
                            </ul><br>
                            <p><strong>Women rights and human rights :</strong></p>
                            <p>At the stage of strategic planning of gender issues FIA ensures the participation of its concerned stakeholders in developing projects and programs. Gender issue, gender analysis and gender related information is included in the future planning monitoring and evaluation of its project proposal. </p>
                            <p>FIA has included human rights and legal rights issues in its program and this initiative will be continued for motivating women in establishing their ownership and rights in the family as well as in the community. Awareness building on woman hatred and anti-human rights perspective will be continued. The elite group in rural area will be encouraged to support the backward women in establishing their rights in their own community. </p>
                            <p>FIA  will continue awareness raising projects in order to reduce and eliminate violence against woman and children and will provide legal assistance to victimized woman to some extent. The organization will encourage forming social action committee against violence, mental and physical torture, trafficking and other heinous activities against women and children. Among the group members those who will be able to arrange marriage without dowry will maintain marriage register and stop child marriage will be socially awarded by the organization. </p>
                            <p><strong>Code of conduct for FIA :</strong></p>
                            <ul>
                                <li>As an organization FIA will have own values and will share those values to its organized beneficiaries. The EC members, officers and staffs will follow code of conduct and the values to ensure the acceptance and good will of the organization to all level people of the community. </li>
                                <li>The organization will encourage creating an equal opportunity and participatory working environment and will discourage any sorts of shoving and trend of preventing women from participating in cultural activities. </li>
                                <li>In meeting women will be encouraged to present their opinions and their opinions will be considered in decision-making. </li>
                                <li>Gender sensitivity will be considered as the efficiency of officers and staffs. The organization will observe activities of different offices who are involved in implementing gender programs and will help these organizations indeed. The organization will appreciate work of woman and admire their success. </li>
                                <li>The organization will ensure harassment free environment within its working areas (physical, mental and sexual) by making strict policy with proper punishment. </li>
                                <li>Gender advisory committee or woman forum will be formed for inspecting and looking after sexual harassment and other concerned affairs. The committee will investigate if any sexual abuse takes place within own offices and among the organized members. The committee will protect the victim woman until the investigation finishes. The victim may be protected after completion of the investigation if she seeks protection. The community will give counseling to the victim and they will maintain the secrecy of the phenomena. </li>
                                <li>Any member of the organization (irrespective of position and seniority) will be brought under accountability if they violate of this gender policy. </li>
                                <li> FIA will identify the social restrictions and barriers of women such as attending group meeting at evening, social restriction on women going outside at night etc. and will work to overcome these it barriers. </li>
                                <li>The organization will continue to work with women in partnership and to make them confident in playing active role in local politics and voluntary organization. </li>
                                <li> FIA will continue its support to women organizations, to women group to stop violence and other criminal activities against women. </li>
                                <li>The organization will make alliance with other organizations and will jointly protest against any sorts of women antagonistic statement and work.</li>
                            </ul><br>
                            <p><strong> Women in decision making process: </strong></p>
                            <p> FIA will encourage and motivate both men and woman for equal access of women to family land, wealth, loan, healthcare and education. Organization will help women for stabling their self-control and collective control over their lives. Motivation will be given to men to help women in their works. Assistance will be given to women to establish their rights on family income and in decision-making process. The organization will support women in establishing their ownership in local resources and participation in local power structure. </p>
                            <p><strong> Women participation in the dev. program of FIA </strong></p>
                            <p>FIA will make effort to work with people in participatory ways. The behavior and of the staff will accelerate the women empowerment process. The organizational process and interaction will pursue dominating male people towards developing women leadership in the community with their help.</p>
                            <p>The organization will help stabling women voices at every level. It will recognize women contribution and work accordingly and meeting up their needs. FIA will be pro-active to stabling women opinions in participatory way and will identify their priorities, needs and immediate duties. FIA believes in that women participation in its projects and programs.</p>
                            <p>The organization will encourage People Institutions (PI) to ensure the ratio of women leadership in the People Institution (PI). (minimum 50%). FIA will provide need base training and supports to women to make them confident in playing leadership role and taking responsibility in PI. </p>
                            <p>FIA will play a positive role in making women aware through observing national and international days. The organization will focus on the constitutional rights, Beijing convention, International convention of rights of women in the family, community and nation. The organization will support and promote women activities which will help them to be participated in the local government structure. </p>
                            <p><strong> Education for woman and girls:</strong></p>
                            <p> FIA will support as much as possible to women who have been suffering from lack of self-confidence and self-esteem. The organization will extend training and education facilities for woman which will help them to be self employed. The organization will strengthen women access in primary and high school level by empowering and creating equal opportunity and gender balance in the community. FIA will encourage women to be involved in domestic and traditional income generation activities and it will provide training, technology, credit facility and marketing assistance to these projects at field level. Men will be encouraged to take up equally domestic and family responsibility (such as family planning, food security, child care etc.) and woman will be encouraged to be freed from their monotonous household works. Women will be encouraged for choosing their education and professions freely. Men are to be educated in the case of taking equal responsibility of family planning and conjugal life related functions. FIA will take proper steps to bring all organized members, elite persons, officers and dev. partners of FIA in the gender awareness training.</p>
                            <p><strong> Women and health: </strong></p>
                            <p> FIA will be working continuously in reducing pregnant and child mortality and will be improving the condition of nutritional status of children. The organization will take initiative for a family based reproductive health care to eliminate discrimination which harms women to take pregnancy decision. Female staff will enjoy Government approved maternity leave. </p>
                            <p><strong> Steps for the staff of FIA: </strong></p>
                            <p> FIA will create a friendly environment and equal opportunity for recruiting, posting and transferring staff so that women would work together with men. The organization will recruit women staff as needed and will do proper evaluation of women staffs’ opinion for ensuring gender equality. This process will be continuing until the gender discrimination is eliminated. The organization will conduct training program on gender issues for all staffs and if possible for their spouses. It will also be careful about sexual abuse, women physical problems especially pregnancy and antenatal needs. FIA believes that all officers and staff will follow this code of conduct. This code of conduct will help to reduce gender discrimination and assist to uphold women rights within the organization as well as organized groups. </p>
                            <p><strong> Recruitment:</strong></p>
                            <p> FIA will maintain gender balance in all its offices. According to guidelines woman may apply for every position such as senior management, accounting and technical besides men. Following steps will be ensured in requiting the staff: </p>
                            <ul>    
                                <li>A recruitment committee will be formed comprising equal number of male and female member. </li>
                                <li>Woman candidate will be given preference in case of having equal qualification by both male and female candidates. </li>
                                <li>The interview board members should encourage women candidates at interview time. </li>
                                <li>Recruit woman aiming at bringing up woman staffs at least 50 %. Women will be appointed both for senior and mid level positions.</li>
                                <li>Some special positions will be preserved for woman candidates only</li>
                                <li>FIA can promote women staff for higher positions.</li>
                            </ul><br>
                            <p><strong>Promotion, posting and transfer: </strong></p>
                            <p>Promotion of more women into higher position will strongly be encouraged. FIA will liberalize the qualification and experience of women candidates until gender balance is fulfilled in the organization. Same process will be followed for both men and women staff for the case of posting and transferring. The following exceptional cases can be considered differently:</p>
                            <ul>
                                <li>In case of transferring female staff the security, husband/parents resident etc will be considered. Similarly in case of transferring male staff his wife position and situation will be considered. </li>
                            </ul><br>
                            <p><strong>Financial and other facilities: </strong></p>
                            <p>In accordance to the position both male and female officers and staff will receive equal financial facility such as salary, house rent, traveling, allowance, increment, provident fund, gratuity, medical allowance. Woman staff will get special facility of using official vehicle; for example, from 7th month of pregnancy until giving birth, a woman staff will get preference in using official vehicles (applying conditions) </p>
                            <p><strong>Leave: </strong></p>
                            <ul>
                                <li>All sorts of leaves will be equal for both men and women staff except the maternity leave for women during their pregnancies. Each female staff will enjoy maximum 120 days (including weekends) maternity leave with salary. </li>
                                <li>Married male staffs will enjoy seven days fatherhood leave immediate after child born with condition to help his wife during this fatherhood leave. Fatherhood leave will be applicable to that staff whose wife is also staff of FIA.</li>
                                <li>Two times maternity and fatherhood leave will be granted in his/her service life. </li>
                            </ul><br>
                            <p><strong>Discharge of service: </strong></p>
                            <p>Irrespective of gender both male and female officers and staff may be discharged from service under the service rule and conditions. If it is being proved that any male officer or staff harass any female officer or staff physically or mentally or rape, will be immediately discharged from service. </p>
                            <p><strong>Positive steps: </strong></p>
                            <p>FIA will take steps aiming at encouraging female officers and staffs and advancing them within the organization as bellows.</p>
                            <ul>
                                <li>The organization will arrange training for women for developing their skills and capacity in management, communication, monitoring and supervisions. </li>
                                <li>The organization will aware male colleague about the characteristic of female leadership and management. </li>
                                <li>The organization will help women to participate in developing gender related programs and project. </li>
                                <li>Organization will organize gender equity seminar, workshop and dialogue for its officers and staff. </li>
                                <li>Gender issues will be included in all training programs. </li>
                                <li>To aware all level people, organization will disseminate gender related information and international initiatives. </li>
                                <li>Woman officers and staff will be given preference in initiating various developments and training programs. Preference will be given sending female officers and staffs to seminar workshop, discussion and policy related symposium </li>
                                <li>Spouses of all level staff will be invited in participating in gender awareness and legal training courses so that they can experience woman development results. </li>
                                <li>Woman officers will be encouraged to enrich FIA by taking new responsibility and facing new challenges. </li>
                                <li>Gender awareness and sensitivity among all officers and staffs will be expected</li>
                            </ul><br>
                            <p><strong>Physical needs of women: </strong></p>
                            <ul>
                                <li>Gender friendly washroom and toilets will be considered in its offices, guest and training rooms. FIA will arrange separate toilet facility for female officers and staffs considering their physical needs.</li>
                                <li>The organization will arrange   accommodation only for unmarried female officers and staffs if needed.</li>
                                <li>For the purposes and need of programs and projects limited movement of pregnant and lactate woman staffs will be considered. Lactate woman staffs will be given extra 30 minutes break time for breast feeding. This facility will be given up to six months of child birth.</li>
                            </ul><br>
                            <p><strong>Personal security of women: </strong></p>
                            <p>FIA will take steps to protect woman officer and staff from facing adverse and danger situation at working place and during journey:</p>
                            <ul>
                                <li>Female staffs will be discouraged to work and travel at night or security will be ensured if traveling at night is obvious.</li>
                                <li>Female staffs will be considered for taking less pressure and work load during pregnancy, after childbirth and at breast-feeding period.</li>
                            </ul><br>
                            <p><strong>Conclusion: </strong>FIA believes by implementing the policy, FIA will be a gender friendly organization where each staff will enjoy equal rights irrespective caste, creeds, color, religion, ethnicity and sex.</p>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">Child Safety Policy</div>
                    <div class="acc-content">
                        <div class="content policy-guiline-section">

                            <p><strong>1. Introduction:</strong></p>
                            <p>Faith in Action is a child, woman and disability friendly organization. It ensures their safety, needs and participation with the highest priority in all program interventions. The purpose of this policy document is to protect all children under project area from any type of violence, discrimination, abuse and their solution of any incidence occurs within the organization and its programs with partners. It applies to all staff, donor, Executive Committee (EC) members, partner’s (DPO, VDF/People’s Institution (PI) and local NGO, Church,) visitors, volunteers, and contractors, such as evaluators, trainers, and consultants and all other stakeholders of FIA who will come in touch with children. Faith in Action has set out policy for common values, principles and beliefs to meet its organizational commitment to protect children in special circumstances and work for their rights and entitlements. Faith in Action explicitly states that the organization will initiate and implement projects with special emphasis on:</p>
                            <ul>
                                <li>Caring children with disability for their rights and growth in the society</li>
                                <li>Children’s education for development and fundamental rights.</li>
                                <li>Protection of children from any violence and abuse – especially children with disabilities. Children participation in inclusive development </li>
                                <li>Working partners should be equally responsible to meet protection standards for children in their programs.</li>
                            </ul><br>
                            <p><strong>2. Purpose:</strong></p>
                            <p>The purpose of this policy document is to protect all children in the project areas from any type of violence, discrimination, abuse and “procedures that will apply if an incident occurs within the organization and its programs with partners.</p>
                            <p><strong>3. Definition of Children: </strong></p>
                            <p>In accordance with UNCRC, a person below the age of 18 years is a child. FIA commits to include children regardless of his or her sex, race, ethnicity, religion and any physical and mental health condition. </p>
                            <p><strong>4. Legal Framework:</strong></p>
                            <p>This policy document has been developed in compliance with the UN Convention on the Rights of the Child and the Bangladesh Government Child Act 2013.</p>
                            <p><strong>5. Principles:</strong></p>
                            <p>Faith in Action envisions a community where justice, respects, dignity prevail for all. For that, the policy sets out how to work to achieve this in practice and protecting children both from intentional and unintentional harm and behavior.</p>
                            <ul>
                                <li>Faith in Action has a duty of care and a duty to act for the interests of the organization and its beneficiaries. </li>
                                <li>Faith in Action will follow the rule of law of Bangladesh for any legal aspect in respect of children issues. </li>
                                <li>Abuse of any child by any stakeholder of the organization constitute misconduct and is subject to disciplinary measure as per norms of the organization. If any incidence of child abuse occurs where Faith in Action become a stakeholder should extend Legal support to abused child in one hand and take legal action against perpetrator on the other hand. </li>
                                <li>Faith in Action will create and maintain an environment that prevents exploitation and abuse, and promotes child rights. </li>
                                <li>Treating children with respect and dignity </li>
                                <li>Plan and organize the project and program so as to minimize risks of children. FIA conducted a risk assessment to identify activities of high risk and designed a strategy to mitigate them. </li>
                                <li>As far as possible, be visible in working with children. </li>
                                <li>Ensure that a culture of openness exists to enable any issue or concerns to be raised and   discussed on children issues. </li>
                                <li>Ensure that a sense of accountability exists between staff so that poor practice or potentially abusive behavior does not go unchallenged. </li>
                                <li>Talk to children about their conduct with staff or others and encourage them to raise any concern. </li>
                                <li>FIA commits to continued development and strengthening of procedures and practices to protect children. </li>
                                <li>Ensure Faith in Action supported projects routinely report on the status of child protection activities in the environment of inclusive development.</li>
                            </ul><br>
                            <p><strong>6. Recruitment & Training</strong></p>
                            <p><strong>Recruitment: </strong>Faith in Action strictly follows some norms before appointed new staff:</p>
                            <ol>
                                <li style="list-style-type: decimal;">Collect Police verification certificate in possible area.</li>
                                <li style="list-style-type: decimal;">Referee check at least from 2 people and keep record. If the recommendation is not satisfied his/her candidature will be disqualified.</li>
                                <li style="list-style-type: decimal;">Character certificate from church and or local Union Council Chairman is mandatory for short listed candidate.</li>
                                <li style="list-style-type: decimal;">Written self-declaration is mandatory for newly appointed staff and behavioural questions will be asked in the interview process.</li>
                                <li style="list-style-type: decimal;">Prior to appoint a volunteer, or issue a work order to contractor, consultant or any other service providers must sign and submit a copy of child protection policy along with their Expression of Interest (EOI)/CV, only then their EOI/CV may consider for further action. </li>
                                <li style="list-style-type: decimal;">If there are any concerns that an applicant may pose a risk to a child’s safety they will not be appointed by FIA.</li>
                            </ol>
                            <p><strong>Training: </strong></p>
                            <ol>
                                <li style="list-style-type: decimal;">FIA ensure the availability of the Child Protection Policy through different publications and put in the website for public availability. Additionally, all prospective employees, volunteers, EC members and all Individuals who are hired as independent contractors will be informed about child protection policy through a brief orientation. They will be given a copy of the Faith in Action’s Child Protection Policy and required to sign a declaration that they have received and understood it. </li>
                                <li style="list-style-type: decimal;">Those who are working directly with the community and children (Field Organizer, Trainer, School/FAL teachers, Health and other volunteers) will get the training quarterly. </li>
                                <li style="list-style-type: decimal;">Staff and volunteers will receive the training half yearly basis. Special focus will be given to staff/volunteers who work with children directly.</li>
                                <li style="list-style-type: decimal;">FIA educates SHG and VDF members and encourage them to practice the Child Protection Policy at community level and takes actions if they find any injustice (abuse, discrimination, sexual harassment, humiliation with) children. </li>
                                <li style="list-style-type: decimal;">FIA organize workshop, seminar and day observation with the locally elected body members (LEB) to raise mass awareness</li>
                                <li style="list-style-type: decimal;">For EC member will be review in the yearly executive committee meeting</li>
                            </ol>
                            <p><strong>7. Reporting procedure suspected or actual abuse of children:</strong></p>
                            <p><strong>Staff:</strong></p>
                            <ul>
                                <li>Immediately staff will remove from the incident place</li>
                                <li>A three member’s investigation team will be formed headed by the Executive Director. </li>
                                <li>A proper and fair investigation will be done within three working days and if it proves that the accused person is involve with the incident then the person will be immediately terminated without any prior notice and all kind of organizational benefits will be barred. </li>
                                <li>For any serious offence the accused person will be handed over to the legal authority. </li>
                                <li>FIA will notify donor agency (ies) within 24 hours and keep informed.</li>
                            </ul><br>
                            <p><strong>Executive Committee members (including Executive Director): </strong>if the offense happens by the Executive Committee members then;</p>
                            <ol>
                                <li style="list-style-type: decimal;">The issue will be informed to the Chairman immediately. </li>
                                <li style="list-style-type: decimal;">An investigation team of three members headed by the Chairman will be formed. </li>
                                <li style="list-style-type: decimal;">If it is proven, then his/her membership will be suspended and will take action as per the recommendation of the investigation committee. This will include termination and if necessary legal actions will be taken.</li>
                            </ol>
                            <p><strong>Donor/Visitor:</strong>If any allegation comes against them they will be withdrawn immediately from the field and the issue will be informed immediately (24 hours) to the concerned agency through EC chairman, ED and action to be taken as per the recommendation by the concerned agency.</p>
                            <p><strong>Consultant/Evaluator/Trainer/Contractor:</strong>The issue will be informed to the concerned agency through ED and s/he will remove from the incident place immediately and contract will be cancelled if the investigation proves the allegations.</p>
                            <p><strong>Locally Elected Body (LEB), Government Officials and other Stake holders:</strong> Inform to the legal authority through EC Chairman and ED.</p>
                            <p><strong>Community: </strong></p>
                            <ol>
                                <li style="list-style-type: decimal;">If any allegation comes from the community the issue will be informed through the concerned project manager for immediate action.</li>
                                <li style="list-style-type: decimal;">ED will form a 3 member’s committee headed by the project manager along with VDF leaders to investigate the allegation. The committee will collaborate with the local legal authorities.</li>
                            </ol><br>
                            <p><strong>Reporting:</strong>All staff and volunteers are required to report any suspicions or allegations to the Project Manager (PM) immediately by cell phone followed by written complain. The PM will report to the responsible officer/Executive Director.</p>
                            <p>
                                <strong>8. Communication guidelines to talk about children:</strong>
                            </p>
                            <ul>
                                <li>Seek to portray and represent people in an accurate and balanced way, making as much reference as possible to their social, cultural and economic environment, and emphasizing everyone’s dignity. </li>
                                <li>Avoid using or supporting degrading, victimizing or shaming language and images. </li>
                                <li>Avoid manipulating or sensationalizing text and images; making inaccurate generalizations; never use images of anyone in inappropriate clothing or provocative poses. Should use pictures that are decent and respectful, not presenting them as victims. The child’s dignity should be preserved whilst presenting any reality.  </li>
                                <li>Secure the informed consent of the person to use images for further use. </li>
                                <li>Personal and physical information of children that could be used to identify the location of a child within a country should not be used on organization’s web sites or in any other form of communication.</li>
                            </ul>
                            <p><strong>9. Faith in Action’s expectation from Partner Organization, consultants and contractors, </strong></p>
                            <p>Any agreement between the Faith in Action and partner organizations which need to work with children will require assurance that child protection policies and procedures are in place, acknowledging that lack of such policies can place children and the organization at risk and may become a factor for disqualification to enter into partnership. Faith in Action reserves the right to terminate contract negotiations with a partner organisation or individual, if any proposed personnel is believed to pose an unacceptable risk to children’s safety or wellbeing. </p>
                            <p><strong>10. Organizational mandates:</strong></p>
                            <ul>
                                <li>All staff, volunteers and partners of different projects will sign and abide by the code of conduct </li>
                                  <li>All staff and volunteers will have access to a copy of the child protection policy.</li>
                                <li>Induction will include briefing on child protection issues </li>
                                <li>Every work place will display contact details for reporting possible child abuse. </li>
                                <li>Ensure child consultation and participation in program implementation as appropriate. </li>
                                <li>Training, learning opportunities and support will be provided by Faith in Action members as appropriate to ensure commitments are met.</li>
                            </ul><br>
                            <p><strong>11. Confidentiality: </strong>An allegation of child abuse is a serious issue. In following this policy and local procedures, it is essential that all parties maintain confidentiality. Sharing of information, which could identify a child or an alleged perpetrator, should be purely on a ‘need to know’ basis. Unless abuse has actually been proved to have occurred, one must always refer to “alleged abuse”.</p>
                            <p><strong>12. Policy decision and Administration:</strong></p>
                            <ul>
                                <li>Executive Council (EC) or any representative of the EC of Faith in Action will evaluate regularly for effective use of Child Protection Policy and make amendment if necessary. The FIA Child Safety Policy will be reviewed every 3 years or as needed.</li>
                                <li>The Executive Director of Faith in Action is responsible to implement and use of policy guideline as appropriate to program and management of the organization. </li>
                                <li>ED of Faith in Action is also responsible for supervision, monitoring and support its team.  </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn">Code of conduct</div>
                    <div class="acc-content">
                        <div class="content policy-guiline-section">
                            <p>This Code of Conduct states rules of appropriate and proper behavior, which are designed to protect children but are also intended to protect adults from false accusations of inappropriate behavior or abuse. These protocols apply to employees, volunteers, board members, contractors, supporters, partners and any visitors to the agency’s projects.</p>
                            <ul>
                                <li>Staff, visitors and other relevant stakeholders shall sign a code of conduct to ensure awareness of proper behavior, attitude, relationship and conduct with children.</li>
                                <li>Any staff engages, abuses or is accused for physical/sexual relationship with children is subject to disciplinary action and legal prosecution if necessary.</li>
                                <li>Never use language, behave, make suggestions or offer advice, which are inappropriate socially and culturally to either individuals, families, communities or open audience.</li>
                                <li>Never condone, or participate in, behavior of children which is illegal, unsafe or abusive</li>
                                <li>Make commitment to never act in ways intended to shame, humiliate, belittle or degrade  </li>
                                <li>Never discriminate against, show differential treatment, or favour particular children to the exclusion of others.</li>
                                <li>Never use any computers, mobile phones, or video and digital cameras inappropriately, and never to exploit or harass children or to access child pornography through any medium. Staff must not involve with physical assault.</li>
                                <li>Faith in Action personnel and visitors from partner organizations must not stay alone overnight with one or more children or minors, whether in staff accommodation, project premises or elsewhere.</li>
                                <li>Faith in Action personnel and visitors from partner organizations should not engage or hire a minor (child) as “personal/house help or other labour”.  A minor is defined as a child under the age of 18 years.  </li>
                                <li>Faith in Action personnel and visitors must not fondle, hold, kiss, hug or touch minors in an inappropriate or culturally insensitive way. To avoid misunderstanding, it is recommended that there should have consultation with parents or guardians and child before holding them.</li>
                                <li>Where possible and practical, the “two-adult” rule, wherein two or more adults supervise all activities where minors or children are involved and are present at all times, should be followed. If this is not possible, staff members are encouraged to look for alternatives such as being accompanied by community members on visits to children.</li>
                                <li>Faith in Action personnel need to be aware that they may work with children who, because of the circumstances and abuses they have experienced, may use a relationship to obtain “special attention”.  The adult is always considered responsible even if a child behaves seductively. Adults should avoid being placed in a compromising or vulnerable position.</li>
                                <li>Inappropriate behaviour and negative attitude towards children are grounds for disciplinary actions.  </li>
                                <li>Faith in Action personnel must be concerned about perception and appearance in their language, actions and relationships with minors and children.</li>
                            </ul>
                            <p><strong>If a child discloses:</strong></p>
                            <ul>
                                <li>Listen their demand/talk patiently and with concentration</li>
                                <li>Assist children by offering to refer to qualified councellors.</li>
                                <li>Listen carefully and politely. Don’t interrupt the child when he/she is trying to tell his/her story.Assist the children for planning some specific steps for problem solving.</li>
                                <li>Always tell children the truth and do not promise to keep their disclosure a secret. And where appropriate explain to the child what steps are being taken, what has to be reported to whom and how.</li>
                                <li>Encourage them to express their thinking and affirm children that any form of abuse done to them is not their fault.</li>
                            </ul>
                            <p>Signature:</p>
                            <p>Name:</p>
                            <p>Designation:</p>
                            <p>Date:</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    
@endsection