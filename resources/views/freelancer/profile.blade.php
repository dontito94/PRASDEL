@extends('layouts.main')


@section('title')
    Profile - {{$user->name}}
@endsection

@section('select2css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"
          xmlns="http://www.w3.org/1999/html"/>
@endsection


@section('content')
    <section role="main" class="">
        <!-- Candidate Dashboard -->
        <div class="section candidate-dashboard-content solid-light-grey-bg">
            <div class="inner">
                <div class="container">
                    <div class="candidate-dashboard-wrapper flex space-between no-wrap">

                        <div class="left-sidebar-menu">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="heading">Manage account</li>
                                <li><a data-toggle="pill" href="#resume">My Resume</a></li>
                                {{--<li class=""><a data-toggle="pill" href="#bookmarked-jobs">Bookmarked Jobs</a></li>--}}
                                {{--<li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications">Notifications</a> <span class="notification-count">2</span></li>--}}
                                <li class="nav-divider"></li>
                                <li class="heading">Manage job</li>
                                <li><a data-toggle="pill" href="#manage-applications">Manage Applications</a></li>
                                {{--<li><a data-toggle="pill" href="#job-alerts">Job Alerts</a></li>--}}
                                <li class="nav-divider"></li>
                                <li><a data-toggle="pill" href="#change-password">Change Password</a></li>
                                {!! Form::open(['route' => 'logout', 'id' => 'logout-form']) !!}
                                {!! Form::close() !!}
                                <li> <a role="menuitem" tabindex="-1" href="{{ route("logout") }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> @lang("label.logout") </a></li>
                            </ul>
                        </div> <!-- end .left-sidebar-menu -->

                        <div class="right-side-content">
                            <div class="tab-content candidate-dashboard">

                                <div id="bookmarked-jobs" class="tab-pane fade ">
                                    <h3 class="tab-pane-title">Bookmarked jobs</h3>
                                    <div class="bookmarked-jobs-list-wrapper">
                                        <div class="bookmarked-job-wrapper">
                                            <div class="bookmarked-job flex no-wrap no-column ">
                                                <div class="job-company-icon">
                                                    <img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
                                                </div> <!-- end .job-icon -->
                                                <div class="bookmarked-job-info">
                                                    <h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
                                                    <h5>Banana inc.</h5>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                                    <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                                                        <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                                            <ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
                                                                <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                            </ul> <!-- end .candidates-avatar -->
                                                            <h6 class="bookmarked-job-category">Art/Design</h6>
                                                            <h6 class="candidate-location">Park ave,<span>nyc, usa</span></h6>
                                                            <h6 class="hourly-rate">$45<span>/Hour</span></h6>
                                                        </div> <!-- end .bookmarked-job-meta -->
                                                        <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                                                            <i class="ion-ios-heart wishlist-icon"></i>
                                                            <a href="#0" class="button">more detail</a>
                                                        </div> <!-- end .right-side-bookmarked-job-meta -->
                                                    </div> <!-- end .bookmarked-job-info-bottom -->
                                                </div> <!-- end .bookmarked-job-info -->
                                            </div> <!-- end .bookmarked-job -->
                                        </div> <!-- end .bookmarked-job-wrapper -->

                                        <div class="bookmarked-job-wrapper">
                                            <div class="bookmarked-job flex no-wrap no-column ">
                                                <div class="job-company-icon">
                                                    <img src="images/company-logo-big02.jpg" alt="company-icon" class="img-responsive">
                                                </div> <!-- end .job-icon -->
                                                <div class="bookmarked-job-info">
                                                    <h4 class="dark flex no-column">We're looking for a designer<a href="#0" class="button full-time">full time</a></h4>
                                                    <h5>Cat studio</h5>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                                    <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                                                        <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                                            <ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
                                                                <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                            </ul> <!-- end .candidates-avatar -->
                                                            <h6 class="bookmarked-job-category">Art/Design</h6>
                                                            <h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
                                                            <h6 class="hourly-rate">$45<span>/Hour</span></h6>
                                                        </div> <!-- end .bookmarked-job-meta -->
                                                        <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                                                            <i class="ion-ios-heart wishlist-icon"></i>
                                                            <a href="#0" class="button">more detail</a>
                                                        </div> <!-- end .right-side-bookmarked-job-meta -->
                                                    </div> <!-- end .bookmarked-job-info-bottom -->
                                                </div> <!-- end .bookmarked-job-info -->
                                            </div> <!-- end .bookmarked-job -->
                                        </div> <!-- end .bookmarked-job-wrapper -->

                                        <div class="bookmarked-job-wrapper">
                                            <div class="bookmarked-job flex no-wrap no-column ">
                                                <div class="job-company-icon">
                                                    <img src="images/company-logo-big03.jpg" alt="company-icon" class="img-responsive">
                                                </div> <!-- end .job-icon -->
                                                <div class="bookmarked-job-info">
                                                    <h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
                                                    <h5>Bull creative angency</h5>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                                    <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                                                        <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                                            <ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
                                                                <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                            </ul> <!-- end .candidates-avatar -->
                                                            <h6 class="bookmarked-job-category">Art/Design</h6>
                                                            <h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
                                                            <h6 class="hourly-rate">$45<span>/Hour</span></h6>
                                                        </div> <!-- end .bookmarked-job-meta -->
                                                        <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                                                            <i class="ion-ios-heart wishlist-icon"></i>
                                                            <a href="#0" class="button">more detail</a>
                                                        </div> <!-- end .right-side-bookmarked-job-meta -->
                                                    </div> <!-- end .bookmarked-job-info-bottom -->
                                                </div> <!-- end .bookmarked-job-info -->
                                            </div> <!-- end .bookmarked-job -->
                                        </div> <!-- end .bookmarked-job-wrapper -->

                                        <div class="bookmarked-job-wrapper">
                                            <div class="bookmarked-job flex no-wrap no-column ">
                                                <div class="job-company-icon">
                                                    <img src="images/company-logo-big04.jpg" alt="company-icon" class="img-responsive">
                                                </div> <!-- end .job-icon -->
                                                <div class="bookmarked-job-info">
                                                    <h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
                                                    <h5>Elephant studio</h5>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                                    <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                                                        <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                                            <ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
                                                                <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                            </ul> <!-- end .candidates-avatar -->
                                                            <h6 class="bookmarked-job-category">Art/Design</h6>
                                                            <h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
                                                            <h6 class="hourly-rate">$45<span>/Hour</span></h6>
                                                        </div> <!-- end .bookmarked-job-meta -->
                                                        <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                                                            <i class="ion-ios-heart wishlist-icon"></i>
                                                            <a href="#0" class="button">more detail</a>
                                                        </div> <!-- end .right-side-bookmarked-job-meta -->
                                                    </div> <!-- end .bookmarked-job-info-bottom -->
                                                </div> <!-- end .bookmarked-job-info -->
                                            </div> <!-- end .bookmarked-job -->
                                        </div> <!-- end .bookmarked-job-wrapper -->

                                        <div class="bookmarked-job-wrapper">
                                            <div class="bookmarked-job flex no-wrap no-column ">
                                                <div class="job-company-icon">
                                                    <img src="images/company-logo-big04.jpg" alt="company-icon" class="img-responsive">
                                                </div> <!-- end .job-icon -->
                                                <div class="bookmarked-job-info">
                                                    <h4 class="dark flex no-column">We need a web designer<a href="#0" class="button full-time">full time</a></h4>
                                                    <h5>Banana inc.</h5>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                                    <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                                                        <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                                            <ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
                                                                <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                                <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                            </ul> <!-- end .candidates-avatar -->
                                                            <h6 class="bookmarked-job-category">Art/Design</h6>
                                                            <h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
                                                            <h6 class="hourly-rate">$45<span>/Hour</span></h6>
                                                        </div> <!-- end .bookmarked-job-meta -->
                                                        <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                                                            <i class="ion-ios-heart wishlist-icon"></i>
                                                            <a href="#0" class="button">more detail</a>
                                                        </div> <!-- end .right-side-bookmarked-job-meta -->
                                                    </div> <!-- end .bookmarked-job-info-bottom -->
                                                </div> <!-- end .bookmarked-job-info -->
                                            </div> <!-- end .bookmarked-job -->
                                        </div> <!-- end .bookmarked-job-wrapper -->
                                    </div> <!-- end .bookmarked-jobs-list-wrapper -->
                                    <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
                                        <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
                                        <ul class="list-unstyled flex no-column items-center">
                                            <li><a href="#0">1</a></li>
                                            <li><a href="#0">2</a></li>
                                            <li><a href="#0">3</a></li>
                                            <li><a href="#0">4</a></li>
                                            <li><a href="#0">5</a></li>
                                        </ul>
                                        <a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
                                    </div> <!-- end .jobpress-custom-pager -->
                                </div> <!-- end #bookmarked-jobs-tab -->

                                <div id="job-alerts" class="tab-pane fade in">
                                    <h3 class="tab-pane-title">Job alerts</h3>
                                    <div class="job-alerts-list-wrapper">
                                        <ul class="job-alert-table-headings flex items-center no-column list-unstyled">
                                            <li class="company-name-cell"><h6>Company Name</h6></li>
                                            <li class="job-position-cell"><h6>Position</h6></li>
                                            <li class="contract-type-cell"><h6>Contract Type</h6></li>
                                            <li class="job-frequency-cell"><h6>Frequency</h6></li>
                                        </ul> <!-- end .job-alert-table-headings -->
                                        <div class="job-alerts-wrapper">
                                            <div class="job-alert flex no-wrap no-column items-center list-unstyled">
                                                <div class="company-name-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Company name</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <div class="cell-text no-column">
                                                        <h4>Banana Inc.</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .company-name-cell -->
                                                <div class="job-position-cell job-alert-cell flex no-column no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Position</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>web designer</p>
                                                </div> <!-- end .job-position-cell -->
                                                <div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Contract type</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <button type="button" class="button full-time">Full time</button>
                                                </div> <!-- end .contract-position-cell -->
                                                <div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Frequency</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>Daily</p>
                                                </div> <!-- end .job-frequency-cell -->
                                                <div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
                                                    <i class="ion-ios-compose-outline edit-icon"></i>
                                                    <i class="ion-ios-trash-outline trash-icon"></i>
                                                    <i class="ion-ios-more-outline options-icon"></i>
                                                </div> <!-- end .job-edit-cell -->
                                            </div> <!-- end .job-alert -->
                                            <div class="divider"></div>
                                            <div class="job-alert flex no-wrap no-column items-center list-unstyled">
                                                <div class="company-name-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Company name</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <div class="cell-text no-column">
                                                        <h4>Folder cooperation</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Cupertino, CA, USA</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .company-name-cell -->
                                                <div class="job-position-cell job-alert-cell flex no-column no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Position</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>UI/UX designer</p>
                                                </div> <!-- end .job-position-cell -->
                                                <div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Contract type</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <button type="button" class="button full-time">Full time</button>
                                                </div> <!-- end .contract-position-cell -->
                                                <div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Frequency</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>Daily</p>
                                                </div> <!-- end .job-frequency-cell -->
                                                <div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
                                                    <i class="ion-ios-compose-outline edit-icon"></i>
                                                    <i class="ion-ios-trash-outline trash-icon"></i>
                                                    <i class="ion-ios-more-outline options-icon"></i>
                                                </div> <!-- end .job-edit-cell -->
                                            </div> <!-- end .job-alert -->
                                            <div class="divider"></div>
                                            <div class="job-alert flex no-wrap no-column items-center list-unstyled">
                                                <div class="company-name-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Company name</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <div class="cell-text no-column">
                                                        <h4>Bookcover publisher</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .company-name-cell -->
                                                <div class="job-position-cell job-alert-cell flex no-column no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Position</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>Front end developer</p>
                                                </div> <!-- end .job-position-cell -->
                                                <div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Contract type</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <button type="button" class="button full-time">Full time</button>
                                                </div> <!-- end .contract-position-cell -->
                                                <div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Frequency</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>Daily</p>
                                                </div> <!-- end .job-frequency-cell -->
                                                <div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
                                                    <i class="ion-ios-compose-outline edit-icon"></i>
                                                    <i class="ion-ios-trash-outline trash-icon"></i>
                                                    <i class="ion-ios-more-outline options-icon"></i>
                                                </div> <!-- end .job-edit-cell -->
                                            </div> <!-- end .job-alert -->
                                            <div class="divider"></div>
                                            <div class="job-alert flex no-wrap no-column items-center list-unstyled">
                                                <div class="company-name-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Company name</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <div class="cell-text no-column">
                                                        <h4>Archive inc.</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .company-name-cell -->
                                                <div class="job-position-cell job-alert-cell flex no-column no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Position</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>Backend developer</p>
                                                </div> <!-- end .job-position-cell -->
                                                <div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Contract type</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <button type="button" class="button full-time">Full time</button>
                                                </div> <!-- end .contract-position-cell -->
                                                <div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Frequency</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>Daily</p>
                                                </div> <!-- end .job-frequency-cell -->
                                                <div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
                                                    <i class="ion-ios-compose-outline edit-icon"></i>
                                                    <i class="ion-ios-trash-outline trash-icon"></i>
                                                    <i class="ion-ios-more-outline options-icon"></i>
                                                </div> <!-- end .job-edit-cell -->
                                            </div> <!-- end .job-alert -->
                                            <div class="divider"></div>
                                            <div class="job-alert flex no-wrap no-column items-center list-unstyled">
                                                <div class="company-name-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Company name</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <div class="cell-text no-column">
                                                        <h4>Quick Studio</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .company-name-cell -->
                                                <div class="job-position-cell job-alert-cell flex no-column no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Position</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>Graphic Designer</p>
                                                </div> <!-- end .job-position-cell -->
                                                <div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Contract type</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <button type="button" class="button full-time">Full time</button>
                                                </div> <!-- end .contract-position-cell -->
                                                <div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
                                                    <div class="cell-mobile-label">
                                                        <h6>Frequency</h6>
                                                    </div> <!-- end .cell-label -->
                                                    <p>Daily</p>
                                                </div> <!-- end .job-frequency-cell -->
                                                <div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
                                                    <i class="ion-ios-compose-outline edit-icon"></i>
                                                    <i class="ion-ios-trash-outline trash-icon"></i>
                                                    <i class="ion-ios-more-outline options-icon"></i>
                                                </div> <!-- end .job-edit-cell -->
                                            </div> <!-- end .job-alert -->
                                            <div class="divider"></div>
                                        </div> <!-- end .job-alerts-wrapper -->
                                    </div> <!-- end .job-alerts-list-wrapper -->
                                    <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
                                        <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
                                        <ul class="list-unstyled flex no-column items-center">
                                            <li><a href="#0">1</a></li>
                                            <li><a href="#0">2</a></li>
                                            <li><a href="#0">3</a></li>
                                            <li><a href="#0">4</a></li>
                                            <li><a href="#0">5</a></li>
                                        </ul>
                                        <a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
                                    </div> <!-- end .jobpress-custom-pager -->
                                </div> <!-- end #job-alerts-tab -->

                                <div id="manage-applications" class="tab-pane fade in">
                                    <h3 class="tab-pane-title">Manage applications</h3>
                                    <div class="job-applications-list-wrapper">
                                        @foreach($jobs as $job)
                                            {{--<tr>--}}
                                                {{--<td>--}}
                                                    {{--<a href="/jobs/{{$job->job_id}}"><h4 class="h5 text-info">{{ $job->title }}</h4></a>--}}
                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--@if ($job->status =='hired')--}}
                                                        {{--<h4><span class="badge badge-success w-100">{{ $job->status }}</span></h4>--}}
                                                    {{--@elseif($job->status =='rejected')--}}
                                                        {{--<h4><span class="badge badge-danger w-100">{{ $job->status }}</span></h4>--}}
                                                    {{--@else--}}
                                                        {{--<h4><span class="badge badge-info w-100">{{ $job->status }}</span></h4>--}}
                                                    {{--@endif--}}
                                                {{--</td>--}}
                                                {{--<td>--}}
                                                    {{--@if ($job->status !='hired')--}}

                                                    {{--@else--}}
                                                        {{--<a href="#" data-toggle="tooltip" data-placement="top" title="Send Message">--}}
                                                            {{--<p class="text-primary text-center">--}}
                                                                {{--<i class="far fa-envelope fa-2x"></i>--}}
                                                            {{--</p>--}}
                                                        {{--</a>--}}
                                                    {{--@endif--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}

                                            <div class="job-application flex items-center no-column no-wrap">
                                                <div class="application-company-cell application-cell flex items-center no-column no-wrap">
                                                    <div class="application-company-logo">
                                                        <img src="{!! url('template/images/company-logo01.jpg') !!}" alt="company-logo" class="img-responsive">
                                                    </div> <!-- end .application-company-logo -->
                                                    <div class="application-company-text">
                                                        <a href="/jobs/{{$job->job_id}}"><h4 class="h5 text-info">{{ $job->title }}</h4></a>                                                        {{--<p>Quick studio</p>--}}
                                                    </div> <!-- end .application-company-text -->
                                                </div> <!-- end .job-application-company-cell -->
                                                <div class="application-contractor-type-cell application-cell">
                                                    <button type="button" class="button full-time button-xs">{{ucwords($job->position_type)}}</button>
                                                </div> <!-- end .application-contractor-type-cell -->
                                                <div class="application-submission-date-cell application-cell">
                                                    <p>No 14th, 2017</p>
                                                </div> <!-- end .application-submission-date-cell -->
                                                <div class="application-status-cell">
                                                    @if ($job->status =='hired')
                                                        <p class="rejected">{{ $job->status }}</p>

                                                        {{--<h4><span class="badge badge-success w-100"></span></h4>--}}
                                                    @elseif($job->status =='rejected')
                                                        <p class="rejected">{{ $job->status }}</p>

                                                        <h4><span class="badge badge-danger w-100"></span></h4>
                                                    @else
                                                        <p class="rejected">{{ $job->status }}</p>
                                                    @endif
                                                </div> <!-- end .application-status-cell -->
                                            </div> <!-- end .job-application -->

                                        @endforeach



                                    </div> <!-- end .applications-list-wrapper -->
                                    <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
                                        <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
                                        <ul class="list-unstyled flex no-column items-center">
                                            <li><a href="#0">1</a></li>
                                            <li><a href="#0">2</a></li>
                                            <li><a href="#0">3</a></li>
                                            <li><a href="#0">4</a></li>
                                            <li><a href="#0">5</a></li>
                                        </ul>
                                        <a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
                                    </div> <!-- end .jobpress-custom-pager -->
                                </div> <!-- end #manage-applications-tab -->

                                <div id="notifications" class="tab-pane fade in">
                                    <h3 class="tab-pane-title">Your notifications</h3>
                                    <div class="notifications-list-wrapper">

                                        <div class="notification flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>has expired.</p>
                                                <p class="ultra-light">3 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification highlighted flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p>Banana Inc. posted a new job.<a href="#0">Check it out now!</a></p>
                                                <p class="ultra-light">4 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo13.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p>Your bookmarked job “Web designer needed” from<span class="company-name">Bull Creative Agency.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                                                <p class="ultra-light">5 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo14.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p>Your bookmarked job “We’re looking for a designer” from<span class="company-name">Cat Studio</span>has expired.</p>
                                                <p class="ultra-light">6 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification highlighted flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                                                <p class="ultra-light">1 day ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo12.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p><span class="company-name">Prymb Creative Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
                                                <p class="ultra-light">2 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo08.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p><span class="company-name">Elephant Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
                                                <p class="ultra-light">2 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo11.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p><span class="company-name">Evotweet</span>posted a new job.<a href="#0">Check it out now!</a></p>
                                                <p class="ultra-light">2 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo14.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p>Your bookmarked job “We're looking for a designer'” from<span class="company-name">Cat studio</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                                                <p class="ultra-light">2 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                        <div class="notification flex items-center no-column no-wrap">
                                            <div class="notification-company-logo">
                                                <img src="images/company-logo15.jpg" alt="company-logo" class="img-responsive">
                                            </div> <!-- end .notification-company-logo -->
                                            <div class="notification-text">
                                                <p><span class="company-name">Audiotorium</span>posted a new job.<a href="#0">Check it out now!</a></p>
                                                <p class="ultra-light">2 hours ago</p>
                                            </div> <!-- end .notification-text -->
                                        </div> <!-- end .notification -->

                                        <div class="divider"></div>

                                    </div> <!-- end .notifications-list-wrapper -->
                                    <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
                                        <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
                                        <ul class="list-unstyled flex no-column items-center">
                                            <li><a href="#0">1</a></li>
                                            <li><a href="#0">2</a></li>
                                            <li><a href="#0">3</a></li>
                                            <li><a href="#0">4</a></li>
                                            <li><a href="#0">5</a></li>
                                        </ul>
                                        <a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
                                    </div> <!-- end .jobpress-custom-pager -->
                                </div> <!-- end #notifications-tab -->

                                <div id="resume" class="tab-pane fade in active">
                                    <div class="profile-badge"><h6>My resume</h6></div>
                                    <div class="profile-wrapper">

                                        <div class="profile-info profile-section flex no-column no-wrap">
                                            <div class="profile-picture">
                                                <img src="{!! url('template/images/candidate-big01.jpg') !!}" alt="candidate-picture" class="img-responsive">
                                            </div> <!-- end .user-picture -->
                                            <div class="profile-meta">
                                                <h4 class="dark">{!! $user->name !!}</h4>
                                                <p>{!! count($profile->job_title)? $profile->job_title :'' !!}</p>
                                                <div class="profile-contact flex items-center no-wrap no-column">
                                                    <h6 class="contact-location">{!! $profile->province !!},<span>{!! $profile->city !!}, {!! $profile->country !!}</span></h6>
                                                    <h6 class="contact-phone">(+01)-212-322-5732</h6>
                                                    <h6 class="contact-email">{!! $user->email !!}</h6>
                                                </div> <!-- end .profile-contact -->
                                                <ul class="list-unstyled social-icons flex no-column">
                                                    <li><a href="#0"><i class="ion-social-twitter">
                                                            </i></a></li>
                                                    <li><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                                    <li><a href="#0"><i class="ion-social-instagram"></i></a></li>
                                                </ul> <!-- end .social-icons -->


                                            </div> <!-- end .profile-meta -->
                                        </div> <!-- end .profile-info -->

                                        <div class="divider"></div>

                                        <div class="profile-about profile-section">
                                            <h3 class="dark profile-title">About me<span class="pull-right">

                                                    @if(isset($profile->overview))
                                                        @if ($profile !== null)
                                                            <button class="btn btn-default float-right" data-toggle="modal"
                                                                    data-target="#editprofile{{$user->id}}"><i class="far fa-edit text-success"></i>
                                                        <span class="text-success h6">Edit</span></button>
                                                        @else
                                                            <button class="btn btn-default float-right" data-toggle="modal"
                                                                    data-target="#addprofile{{$user->id}}"><i class="far fa-edit text-success"></i>
                                                        <span class="text-success h6">Edit</span></button>
                                                        @endif</span></h3>
                                            @else

                                                <i class="ion-plus">add</i></span></h3>

                                            @endif
                                            <p>{!! $profile->overview !!}</p>
                                        </div> <!-- end .profile-about -->

                                        <div class="divider"></div>

                                        <div class="profile-experience-wrapper profile-section">
                                            <h3 class="dark profile-title">Work experience<span class="pull-right">   <button class="btn btn-primary float-right  py-0 mr-1 px-1" data-toggle="modal"
                                                                                                           data-target="#addwork{{$user->id}}">
                                <i class="far fa-edit text-white"></i> <span class="text-white h6">Add New</span>
                            </button></span></h3>
                                            <br>
                                            @foreach($works as $work)

                                                        <h3 class="dark profile-title mt-2">{{$work->position}}<span style="float: right"><i class="fas fa-pencil-alt"
                                                                                                                                                    data-id="{{$work->id}}"
                                                                                                                                                    data-toggle="modal"
                                                                                                                                                    data-target="#editWork{{$work->id}}"></i></span><span class="pull-right" style="float: right"><i class="far fa-trash-alt"
                                                                                                                                                                                                                                            data-toggle="modal"
                                                                                                                                                                                                                                            data-target="#deleteWork{{$work->id}}"></i></span></h3>


                                                        <h6 class="profile-company dark">{{$work->company}}</h6>
                                                        <p class="small ultra-light">{{ $work->year }}</p>
                                                        <p>{!! nl2br(e($work->description)) !!}</p>


                                                <!-- Edit Work Background Modal -->
                                                <div class="modal fade" id="editWork{{$work->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-info" id="exampleModalLabel">Edit Work
                                                                    Background</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body editworksbody">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fas fa-user"></i>&nbsp;Position</span>
                                                                    </div>
                                                                    <input type="text" id="editPosition" class="form-control"
                                                                           value="{{$work->position}}">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-building"></i>&nbsp;Company</span>
                                                                    </div>
                                                                    <input type="text" id="editCompany" class="form-control"
                                                                           value="{{$work->company}}">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar"></i>&nbsp;Year</span>
                                                                    </div>
                                                                    <input type="text" id="editWorkYear" class="form-control"
                                                                           value="{{$work->year}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="input-group-text"><i class="fas fa-briefcase"></i>&nbsp;Description</span>
                                                                    <textarea class="form-control" id="editWorkDescription"
                                                                              rows="3">{{$work->description}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="submit" class="btn btn-primary editWorkBackground"
                                                                        data-dismiss="modal" data-id="{{$work->id}}">Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Delete Work Modal -->
                                                <div class="modal fade" id="deleteWork{{$work->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4>REMOVE EMPLOYMENT</h4>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6 class="modal-title h6">Are you sure you want to delete <span
                                                                            class="text-info">"{{$work->company}}"</span> from your
                                                                    profile?</h6>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger text-white px-5"
                                                                        data-dismiss="modal">No
                                                                </button>
                                                                <button type="button" class="btn btn-primary deleteWork px-5"
                                                                        data-dismiss="modal" data-id="{{$work->id}}">Yes
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                            @endforeach


                                            <div class="spacer-md"></div>
                                            <div class="modal fade" id="addwork{{$user->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-info" id="exampleModalLabel">Add New Work</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body editworksbody">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-user"></i>&nbsp;Position</span>
                                                                </div>
                                                                <input type="text" id="addPosition" class="form-control">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                        <span class="input-group-text"><i
                                                    class="far fa-building"></i>&nbsp;Company</span>
                                                                </div>
                                                                <input type="text" id="addCompany" class="form-control">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="far fa-calendar"></i>&nbsp;Year</span>
                                                                </div>
                                                                <input type="text" id="addWorkYear" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                    <span class="input-group-text"><i
                                                class="fas fa-briefcase"></i>&nbsp;Description</span>
                                                                <textarea class="form-control" id="addWorkDescription" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary addNewWorkButton" data-dismiss="modal">Save
                                                                changes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div> <!-- end .profile-experience-wrapper -->

                                        <div class="divider"></div>

                                        <div class="profile-education-wrapper profile-section" style="margin-bottom: 40px">
                                            <h3 class="dark profile-title" style="margin-bottom: 10px">Education <span class="pull-right"> <button class="btn btn-primary float-right  py-0 mr-1 px-1" data-toggle="modal"
                                                                                                                                                   data-target="#addeducation{{$user->id}}">
                                <i class="far fa-edit text-white"></i> <span class="text-white h6">Add New</span>
                            </button></span></h3>
                                            <br>

                                        @foreach($educations as $education)
                                                <h3 class="dark profile-title mt-2">{!! $education->school !!}<span style="float: right"><i class="fas fa-pencil-alt"
                                                                                                                  data-id="{{$education->id}}"
                                                                                                                  data-toggle="modal"
                                                                                                                  data-target="#editeducation{{$education->id}}"></i></span><span style="float: right"><i class="far fa-trash-alt"
                                                                                                                                                                                     data-toggle="modal"
                                                                                                                                                                                     data-target="#deleteEducation{{$education->id}}"></i></span></h3>

                                                <div class="" style="margin-top: 0px;">
                                                    <p>{!! $education->course !!}</p>
                                                    <p class="ultra-light">{!! $education->year !!}</p>
                                                </div> <!-- end .profile-education -->



                                                <!-- Edit Educational Background Modal -->
                                                <div class="modal fade" id="editeducation{{$education->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form>
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-info" id="exampleModalLabel">Edit
                                                                        Educational Background</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body addeducationbody">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                    class="fas fa-graduation-cap"></i>&nbsp;Course</span>
                                                                        </div>
                                                                        <input type="text" id="editCourse" class="form-control"
                                                                               name="add_course" value="{{$education->course}}">
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="far fa-building"></i>&nbsp;School</span>
                                                                        </div>
                                                                        <input type="text" id="editSchool" class="form-control"
                                                                               name="add_school" value="{{$education->school}}">
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="far fa-calendar"></i>&nbsp;Year</span>
                                                                        </div>
                                                                        <input type="text" id="editSchoolYear" class="form-control"
                                                                               name="add_school_year" value="{{$education->year}}">
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fas fa-trophy"></i>&nbsp;Achievement</span>
                                                                        </div>
                                                                        <input type="text" id="editAchievement" class="form-control"
                                                                               name="add_achievement" value="{{$education->achievement}}">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                    <button type="submit" class="btn btn-primary editEducation"
                                                                            data-dismiss="modal" data-id="{{$education->id}}">Save changes
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>{{-- end modal --}}




                                            <!-- Delete Education Modal -->
                                                <div class="modal fade" id="deleteEducation{{$education->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4>REMOVE EDUCATION</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6 class="modal-title h6">Are you sure you want to delete <span
                                                                            class="text-info">"{{$education->school}}"</span> from your
                                                                    profile?</h6>
                                                            </div>
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger text-white px-5"
                                                                        data-dismiss="modal">No
                                                                </button>
                                                                <button type="button" class="btn btn-primary deleteEducation px-5"
                                                                        data-dismiss="modal" data-id="{{$education->id}}">Yes
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach

                                        <!-- Add Educational Background Modal -->
                                            <div class="modal fade" id="addeducation{{$user->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <form>
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-info" id="exampleModalLabel">Add Educational
                                                                    Background</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body addeducationbody">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fas fa-graduation-cap"></i>&nbsp;Course</span>
                                                                    </div>
                                                                    <input type="text" id="addCourse" class="form-control" name="add_course">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-building"></i>&nbsp;School</span>
                                                                    </div>
                                                                    <input type="text" id="addSchool" class="form-control" name="add_school">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar"></i>&nbsp;Year</span>
                                                                    </div>
                                                                    <input type="text" id="addSchoolYear" class="form-control"
                                                                           name="add_school_year">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fas fa-trophy"></i>&nbsp;Achievement</span>
                                                                    </div>
                                                                    <input type="text" id="addAchievement" class="form-control"
                                                                           name="add_achievement">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                                                </button>
                                                                <button type="submit" class="btn btn-primary" data-dismiss="modal"
                                                                        id="addNewEducation">Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                                <div class="spacer-md"></div>

                                        </div> <!-- end .profile-education-wrapper -->

                                        <div class="divider"></div>

                                        <div class="profile-skills-wrapper profile-section">
                                            <h3 class="dark profile-title">Summary skill<span><i class="ion-edit"></i></span></h3>
                                            {{--<div class="progress-wrapper flex space-between items-center no-wrap">--}}
                                                {{--<h6 class="progress-skill">HTML</h6>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">--}}
                                                    {{--</div> <!-- end .progress-bar -->--}}
                                                {{--</div> <!-- end .progress -->--}}
                                                {{--<h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>--}}
                                            {{--</div> <!-- end .progress-wrapper -->--}}
                                            {{--<div class="spacer-xs"></div>--}}
                                            {{--<div class="progress-wrapper flex space-between items-center no-wrap">--}}
                                                {{--<h6 class="progress-skill">WordPress</h6>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">--}}
                                                    {{--</div> <!-- end .progress-bar -->--}}
                                                {{--</div> <!-- end .progress -->--}}
                                                {{--<h6 class="percentage"><span class="countTo" data-from="0" data-to="80">80</span>%</h6>--}}
                                            {{--</div> <!-- end .progress-wrapper -->--}}
                                            {{--<div class="spacer-xs"></div>--}}
                                            {{--<div class="progress-wrapper flex space-between items-center no-wrap">--}}
                                                {{--<h6 class="progress-skill">PS</h6>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">--}}
                                                    {{--</div> <!-- end .progress-bar -->--}}
                                                {{--</div> <!-- end .progress -->--}}
                                                {{--<h6 class="percentage"><span class="countTo" data-from="0" data-to="60">60</span>%</h6>--}}
                                            {{--</div> <!-- end .progress-wrapper -->--}}
                                            {{--<div class="spacer-xs"></div>--}}
                                            {{--<div class="progress-wrapper flex space-between items-center no-wrap">--}}
                                                {{--<h6 class="progress-skill">AI</h6>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">--}}
                                                    {{--</div> <!-- end .progress-bar -->--}}
                                                {{--</div> <!-- end .progress -->--}}
                                                {{--<h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>--}}
                                            {{--</div> <!-- end .progress-wrapper -->--}}
                                        </div> <!-- end .profile-skills-wrapper -->

                                    </div> <!-- end .profile-wrapper -->
                                </div> <!-- end #resume-tab -->

                                <div id="change-password" class="tab-pane fade in">
                                    <div class="password-form-wrapper">
                                        <h3 class="dark">Change Password</h3>
                                        <form class="password-form">
                                            <div class="form-group">
                                                <label for="InputEmail1">Old password<sup>*</sup></label>
                                                <input type="email" class="form-control" id="InputEmail1" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="InputPassword1">New Password<sup>*</sup></label>
                                                <input type="password" class="form-control" id="InputPassword1" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="InputPassword1">Confirm New Password<sup>*</sup></label>
                                                <input type="password" class="form-control" id="InputPassword1" placeholder="">
                                            </div>
                                        </form> <!-- end .password-form -->
                                        <div class="password-button-wrapper">
                                            <button type="submit" class="button">Save change</button>
                                        </div> <!-- end .password-button-wrapper -->
                                    </div> <!-- end .password-form-wrapper -->
                                </div> <!-- end #change-password-tab -->

                            </div> <!-- end .candidate-dashboard -->
                        </div> <!-- end .right-side-content -->
                    </div> <!-- end .candidate-dashboard-wrapper -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <!-- start: page -->





        <!-- end: page -->
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                @include('partials.alert')
                {{--<div class="row mb-3">--}}
                    {{--<div class="col-md-2 text-center">--}}
                        {{--@if(!empty($profile->photo))--}}
                            {{--<img class="p-0 profilepicture rounded-circle" src="/storage/photo/{{$profile->photo}}"--}}
                                 {{--data-toggle="modal" data-target="#uploadphoto{{$user->id}}">--}}
                        {{--@else--}}
                            {{--<i class="fas fa-user-circle fa-10x text-muted" data-toggle="modal"--}}
                               {{--data-target="#uploadphoto{{$user->id}}"></i>--}}
                        {{--@endif--}}


                         {{--Upload Photo --}}
                        {{--<div class="modal fade" id="uploadphoto{{$user->id}}" tabindex="-1" role="dialog"--}}
                             {{--aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                            {{--<div class="modal-dialog modal-lg" role="document">--}}
                                {{--<div class="modal-content">--}}
                                    {{--<form action="/profile/uploadphoto" method="POST" enctype="multipart/form-data">--}}
                                        {{--{{ csrf_field() }}--}}
                                        {{--<div class="modal-header">--}}
                                            {{--<h5 class="modal-title text-info" id="exampleModalLabel">Upload Photo</h5>--}}
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                        {{--<div class="modal-body editworksbody">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<input type="file" class="form-control-file text-center"--}}
                                                       {{--id="profilepicture" name="profilepicture"--}}
                                                       {{--aria-describedby="fileHelp">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="modal-footer">--}}
                                            {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close--}}
                                            {{--</button>--}}
                                            {{--<button type="submit" class="btn btn-primary">Save changes</button>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-10 pl-5">--}}
                        {{--<h3 class="h3 text-info d-inline-block">{{$user->name}}</h3>--}}
                        {{--@if ($profile !== null)--}}
                            {{--<button class="btn btn-default float-right" data-toggle="modal"--}}
                                    {{--data-target="#editprofile{{$user->id}}"><i class="far fa-edit text-success"></i>--}}
                                {{--<span class="text-success h6">Edit</span></button>--}}
                        {{--@else--}}
                            {{--<button class="btn btn-default float-right" data-toggle="modal"--}}
                                    {{--data-target="#addprofile{{$user->id}}"><i class="far fa-edit text-success"></i>--}}
                                {{--<span class="text-success h6">Edit</span></button>--}}
                        {{--@endif--}}
                        {{--<h5 class="h5">--}}
                            {{--@if ($profile !== null)--}}
                                {{--{{$profile->job_title}}--}}
                            {{--@endif--}}

                        {{--</h5>--}}
                        {{--<small class="h6 text-muted"><i class="fas fa-map-marker-alt"></i>--}}
                            {{--@if ($profile !== null)--}}
                                {{--{{$profile->city}}, {{$profile->province}} {{$profile->country}}--}}
                            {{--@endif</small>--}}
                    {{--</div>--}}
                {{--</div>--}}

                 {{--Edit Profile --}}
                @if ($profile !== null)
                    <div class="modal fade" id="editprofile{{$user->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        @else
                            <div class="modal fade" id="addprofile{{$user->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                @endif
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-info" id="exampleModalLabel">Edit Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body editworksbody">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-briefcase"></i>&nbsp;Title</span>
                                                </div>
                                                <input type="text" id="editJobTitle" class="form-control"
                                                       name="edit_job_title"
                                                       value="{{$profile !== null ? $profile->job_title : ''}}">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"
                                                                                      va></i>&nbsp;City</span>
                                                </div>
                                                <input type="text" id="editCity" class="form-control" name="edit_city"
                                                       value="{{$profile !== null ? $profile->city : ''}}">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i>&nbsp;Province</span>
                                                </div>
                                                <input type="text" id="editProvince" class="form-control"
                                                       name="edit_province"
                                                       value="{{$profile !== null ? $profile->province : ''}}">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i>&nbsp;Country</span>
                                                </div>
                                                <input type="text" id="editCountry" class="form-control" name="country"
                                                       value="{{$profile !== null ? $profile->country : ''}}">
                                            </div>
                                            <div class="form-group">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i>&nbsp;Overview</span>
                                                <textarea class="form-control" id="editOverview" name="edit_overview"
                                                          rows="3">{{$profile !== null ? $profile->overview : ''}}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            @if ($profile !== null)
                                                <button type="submit" class="btn btn-primary editProfileButton"
                                                        data-dismiss="modal" data-id="{{$user->id}}">Save changes
                                                </button>
                                            @else
                                                <button type="submit" class="btn btn-primary addProfileButton"
                                                        data-dismiss="modal">Save changes
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
            </div>
        </div>
        @endsection
        @section('jsplugins')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.select2').select2({
                        width: 'resolve',
                        placeholder: "Please select Skills",
                        allowClear: true
                    });
                    $('.selectedskills').select2().val({!! json_encode($user->skills()->allRelatedIds()) !!}).trigger('change');
                });
            </script>


@endsection