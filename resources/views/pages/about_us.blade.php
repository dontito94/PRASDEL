@extends('layouts.main')

@section('title')

@endsection

@section('content')



    <!-- Page Title Section -->
    <div class="section page-title text-center" style="background-image: url('template/images/background04.jpg');">
        <div class="inner">
            <h1 class="light">About Us</h1>
            <h3 class="light">.</h3>
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Tabs Section -->
    <div class="section tabs-section about-page">
        <ul class="nav nav-tabs jobpress-dynamic-tabs flex space-center items-center no-column">
            <li class="active"><a data-toggle="tab" href="#company"><i class="ion-ios-glasses-outline"></i>PRASDEL</a></li>
            <li><a data-toggle="tab" href="#how-it-works"><i class="ion-ios-cog-outline"></i>How it works</a></li>
        </ul> <!-- end .jobpress-dynamic-tabs -->

        <div class="tab-content jobpress-dynamic-tabs-content">

            <div id="company" class="tab-pane company-tab-content text-center fade in active">
                <div class="testimonial">
                    <p><q><strong>PRASDEL</strong> is the system that is conceived to allow students from different Tertiary level educational institutions to register themselves for acquisition of practical training attachments<br>The systems solves the challenges of students acquiring organisations for <strong>field/internship work</strong> as well as Organisations recruiting for suitable candidates for the same.</q></p>
                </div> <!-- end .testimonial -->
                <div class="core-values">
                    <div class="core-values-inner">
                        <div class="container">
                            <div class="images">
                                <div class="images-inner flex space-between no-wrap items-center">
                                    <div class="image-item">
                                        <img src="template/images/company01.jpg" alt="company-office-images" class="img-responsive">
                                    </div> <!-- end .image-item -->
                                    <div class="spacer-xs-m"></div>
                                    <div class="image-item">
                                        <img src="template/images/company02.jpg" alt="company-office-images" class="img-responsive">
                                    </div> <!-- end .image-item -->
                                    <div class="spacer-xs-m"></div>
                                    <div class="image-item">
                                        <img src="template/images/company03.jpg" alt="company-office-images" class="img-responsive">
                                    </div> <!-- end .image-item -->
                                </div> <!-- end .images-inner -->
                            </div> <!-- end .images -->
                        </div> <!-- end .container -->
                        <div class="values-text-content">
                            <div class="container">
                                <div class="values-text-content-inner flex space-around no-wrap items-center">
                                    <div class="vision box">
                                        <div class="icon">
                                            <img src="template/images/vision-icon.png" alt="vision-icon" class="img-responsive">
                                        </div> <!-- end .icon -->
                                        <h3 class="dark">Our Vision</h3>
                                        <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                                    </div> <!-- end .vision -->
                                    <div class="spacer-md-m"></div>
                                    <div class="mission box">
                                        <div class="icon">
                                            <img src="template/images/our-mission-icon.png" alt="our-mission-icon" class="img-responsive">
                                        </div> <!-- end .icon -->
                                        <h3 class="dark">Our Vision</h3>
                                        <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                                    </div> <!-- end .vision -->
                                    <div class="spacer-md-m"></div>
                                    <div class="target box">
                                        <div class="icon">
                                            <img src="template/images/our-target-icon.png" alt="our-target-icon" class="img-responsive">
                                        </div> <!-- end .icon -->
                                        <h3 class="dark">Our Vision</h3>
                                        <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                                    </div> <!-- end .vision -->

                                </div> <!-- end .values-text-content-inner -->
                            </div> <!-- end .container -->

                        </div> <!-- end .values-text-content -->
                    </div> <!-- end .core-values-inner -->
                    <div class="background-text">
                        <h1>Core Values</h1>
                    </div> <!-- end .background-text -->
                </div> <!-- end .core-values -->

            </div> <!-- end .company-tab-content -->

            <div id="how-it-works" class="tab-pane how-it-works-tab-content fade">
                <div class="section">
                    <div class="inner">
                        <div class="container">
                            <h3 class="text-center">Content Heading</h3>
                            <div class="testimonial">
                                <p>In PRASDEL  system contains two main parts Users and Admin f the system . Where Users are categorize into two JOB SEEKER and JOB POSTER.
                                    JOB seeker: Includes normal user which are said to be a third level user with the following functionality;
                                </p>
                                <ul>
                                    <li>View job available in the system</li>
                                    <li>Apply and save available job in the system</li>
                                    <li>Can register and save their particulars</li>
                                    <li>Also can print out cv from the details saved</li>
                                </ul>
                            </div>

                        </div> <!-- end .container -->
                    </div> <!-- end .inner -->
                </div> <!-- end .section -->
            </div> <!-- end .how-it-works-tab-content -->

            <div id="team" class="tab-pane team-tab-content fade">
                <div class="section team-members-section">
                    <div class="inner">
                        <div class="container">
                            <div class="team-members-inner-row flex space-between no-column items-center">
                                <div class="team-member">
                                    <img src="images/team-member01.jpg" alt="team-member-image" class="img-responsive">
                                    <div class="team-member-info text-center">
                                        <h3 class="team-member-name">Albert Martin</h3>
                                        <h6 class="team-member-designation">Founder of Jobpress</h6>
                                        <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                            <li><a href="#0">+fb</a></li>
                                            <li><a href="#0">+tw</a></li>
                                            <li><a href="#0">+gp</a></li>
                                            <li><a href="#0">+ins</a></li>
                                        </ul> <!-- end .social-info -->
                                    </div> <!-- end .team-member-info -->
                                </div> <!-- end .team-member -->
                                <div class="team-member">
                                    <img src="images/team-member02.jpg" alt="team-member-image" class="img-responsive">
                                    <div class="team-member-info text-center">
                                        <h3 class="team-member-name">Kenneth Turner</h3>
                                        <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                                        <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                            <li><a href="#0">+fb</a></li>
                                            <li><a href="#0">+tw</a></li>
                                            <li><a href="#0">+gp</a></li>
                                            <li><a href="#0">+ins</a></li>
                                        </ul> <!-- end .social-info -->
                                    </div> <!-- end .team-member-info -->
                                </div> <!-- end .team-member -->
                                <div class="team-member">
                                    <img src="images/team-member03.jpg" alt="team-member-image" class="img-responsive">
                                    <div class="team-member-info text-center">
                                        <h3 class="team-member-name">Dorothy Cole</h3>
                                        <h6 class="team-member-designation">HR Manager</h6>
                                        <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                            <li><a href="#0">+fb</a></li>
                                            <li><a href="#0">+tw</a></li>
                                            <li><a href="#0">+gp</a></li>
                                            <li><a href="#0">+ins</a></li>
                                        </ul> <!-- end .social-info -->
                                    </div> <!-- end .team-member-info -->
                                </div> <!-- end .team-member -->
                                <div class="team-member">
                                    <img src="images/team-member04.jpg" alt="team-member-image" class="img-responsive">
                                    <div class="team-member-info text-center">
                                        <h3 class="team-member-name">Alan Schmidt</h3>
                                        <h6 class="team-member-designation">Product Lead</h6>
                                        <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                            <li><a href="#0">+fb</a></li>
                                            <li><a href="#0">+tw</a></li>
                                            <li><a href="#0">+gp</a></li>
                                            <li><a href="#0">+ins</a></li>
                                        </ul> <!-- end .social-info -->
                                    </div> <!-- end .team-member-info -->
                                </div> <!-- end .team-member -->
                            </div> <!-- end .team-inner -->

                            <div class="spacer-sm"></div>


                            <div class="spacer-md"></div>

                            <ul class="jobpress-custom-pager list-unstyled flex no-column space-center items-center">
                                <li><a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a></li>
                                <li><a href="#0">1</a></li>
                                <li><a href="#0">2</a></li>
                                <li><a href="#0">3</a></li>
                                <li><a href="#0">4</a></li>
                                <li><a href="#0">5</a></li>
                                <li><a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a></li>
                            </ul>

                        </div> <!-- end .container -->
                    </div> <!-- end .inner -->
                </div> <!-- end .team-members-section -->

            </div> <!-- end .team-tab-content -->

            <div id="faq" class="tab-pane faq-tab-content fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
            </div>

            <div id="contact-us" class="tab-pane contact-us-tab-content fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
            </div>



        </div> <!-- end .tab-content -->
    </div> <!-- end .section -->



@endsection