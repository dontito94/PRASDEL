@extends('layouts.main')

@section('title')
    Prasdel - Hire Candidate &amp; Find Pratical Training Jobs Online
@endsection

@section('content')


    <!-- Hero Section -->
    <div class="section hero-section transparent" style="background-image: url('template/images/background01.jpg');height: 50%">
        <div class="inner" style="height:10%">
            <div class="container">
                <div class="job-search-form">
                    <h2>Over<span>100,000<sup>+</sup></span>Practicat Training are waiting for you</h2>
                    <form class="form-inline flex" method="get">
                        <div class="form-group">
                                <input name="search" type="text" class="form-control" id="input-field-1" placeholder="job title / Keywords / company name " value="{{$search}}" >
                                <i class="ion-ios-briefcase-outline"  id="searchCat"></i>

                        </div>

                        <button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
                    </form>

                    <div class="keywords flex">
                        <h4 class="self-center">Popular Keywords:</h4>
                        @foreach($categories as $category)

                        <a href="#0" class="button item-center" for="defaultCheck1{{$category->id}}">                                    {{$category->category_name}}
                        </a>

                        @endforeach

                    </div> <!-- end .keywords -->
                </div> <!-- end .job-search-form -->
            </div> <!-- end .container -->
            <div class="features-bar">
                <div class="container">
                    <div class="features-bar-inner flex space-between">
                        <div class="features-box self-center">
                            <h3>Leading the industry</h3>
                            <a href="about.html">About us<i class="ion-ios-arrow-thin-right"></i></a>
                        </div> <!-- end .feature-box -->
                        <div class="features-box-icon flex no-wrap">
                            <img src="{!! url('template/images/feature-icon01.png') !!}" alt="cup-icon" class="img-responsive self-center">
                            <div class="content self-center">
                                <h3>High average salary</h3>
                                <a href="#0">Learn more<i class="ion-ios-arrow-thin-right"></i></a>
                            </div> <!-- end .content -->
                        </div> <!-- end .feature-box-icon -->
                        <div class="features-box-icon flex no-wrap">
                            <img src="template/images/feature-icon02.png" alt="cup-icon" class="img-responsive self-center">
                            <div class="content self-center">
                                <h3>2,500,000+ candidates</h3>
                                <a href="#0">Our community<i class="ion-ios-arrow-thin-right"></i></a>
                            </div> <!-- end .content -->
                        </div> <!-- end .feature-box-icon -->
                        <div class="user-profile-icon self-center">
                            <img src="template/images/profile-icon01.png" alt="profile-icon" class="img-responsive self-center">
                        </div> <!-- end .profile-icon -->
                    </div> <!-- end .features-bar-inner -->
                </div> <!-- end .container -->
            </div> <!-- end .features-bar -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->




    <!-- Latest Jobs Section -->
    <div class="section Latest-jobs-section">
        <div class="inner">
            <div class="container">
                <div class="section-top-content flex items-center">
                    <h1>Latest Practical Trainings</h1>
                    <a href="#0">View all Trainings<i class="ion-ios-arrow-thin-right"></i></a>
                </div> <!-- end .section-top-content -->
                <div class="jobs-table">
                    <div class="table-header">
                        <div class="table-cells flex">
                            <div class="job-title-cell"><h6> Title / Company name</h6></div>
                            <div class="job-type-cell"><h6>Type</h6></div>
                            <div class="location-cell"><h6>Location</h6></div>
                            <div class="expired-date-cell"><h6>Posted At</h6></div>
                            <div class="salary-cell"><h6>Salary</h6></div>
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-header -->
                    <div class="table-row">
                        @if(count($jobs) > 0)
                            @foreach ($jobs as $job)

                                <div class="table-cells flex no-wrap">
                                    <div class="cell job-title-cell flex no-column no-wrap">
                                        <div class="cell-mobile-label">
                                            <h6>Company name</h6>
                                        </div> <!-- end .cell-label -->
                                        <img src="template/images/company-logo06.jpg" alt="company-logo" class="img-responsive">
                                        <div class="content">
                                            <h4><a href="jobs/{{$job->id}}">{{$job->title}}</a></h4>
                                            <p class="small">{{ ucwords($job->category->category_name) }}</p>
                                        </div> <!-- end .content -->
                                    </div> <!-- end .job-title-cell -->
                                    <div class="cell job-type-cell flex no-column no-wrap">
                                        <div class="cell-mobile-label">
                                            <h6>Type</h6>
                                        </div> <!-- end .cell-label -->
                                        <button type="button" class="button full-time">{{ ucwords($job->position_type) }}</button>
                                    </div>
                                    <div class="cell location-cell flex no-column no-wrap">
                                        <div class="cell-mobile-label">
                                            <h6>Location</h6>
                                        </div> <!-- end .cell-label -->
                                        <p>Cupertino<span>, CA, USA</span></p>
                                    </div>
                                    <div class="cell expired-date-cell flex no-column no-wrap">
                                        <div class="cell-mobile-label">
                                            <h6>Posted At</h6>
                                        </div> <!-- end .cell-label -->
                                        <p>{{$job->created_at->diffForHumans()}}</p>
                                    </div>
                                    <div class="cell salary-cell flex no-column no-wrap">
                                        <div class="cell-mobile-label">
                                            <h6>Salary</h6>
                                        </div> <!-- end .cell-label -->
                                        <p><sup></sup>{{$job->budget}}<span></span></p>
                                    </div>
                                </div> <!-- end .table-cells -->

                                {{--<div class="card mb-3">--}}
                                    {{--<h5 class="h5 card-header"><a href="jobs/{{$job->id}}" class="text-info">{{$job->title}}</a></h5>--}}
                                    {{--<div class="card-block px-3">--}}
                                        {{--<p class="small">--}}
                                            {{--<span>Budget: &#36;{{$job->budget}}</span>--}}
                                            {{--<span> - </span>--}}
                                            {{--<span>Posted: {{$job->created_at->diffForHumans()}}</span>--}}
                                        {{--</p>--}}
                                        {{--<p class="small">--}}
                                            {{--<span><span class="text-success"><i class="fas fa-briefcase"></i> Position Type:</span> {{ ucwords($job->position_type) }}</span>--}}
                                            {{--<br>--}}
                                            {{--<span><span class="text-success"><i class="fas fa-hourglass-end"></i> Project Duration:</span> {{ ucwords($job->project_duration) }}</span>--}}
                                            {{--<br>--}}
                                            {{--<span><span class="text-success"><i class="fas fa-tags"></i> Category:</span> {{ ucwords($job->category->category_name) }}</span>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            @endforeach
                            {{ $jobs->links() }}
                        @else
                            <h2 class="h2 text-muted text-center">NO RESULT FOUND</h2>
                        @endif

                    </div> <!-- end .table-row -->

                    <div class="table-footer flex space-between items-center">
                        <h6>Showing<span>1-5</span>of 23 trainings</h6>
                        <div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
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
                    </div>
                </div> <!-- end .jobs-table -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <div class="section cta-section parallax text-center" style="background-image: url('images/background02.jpg');">
        <div class="inner">
            <div class="container">
                <h2>Looking for a Practical Training</h2>
                <p class="large light">Join thousand of employers and earn what you deserve</p>
                <div class="cta-button">
                    <a href="post-resume-form.html" class="button">Get started now</a>
                </div> <!-- end .cta-button -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Latest News Section -->
    <div class="section Latest-news-section">
        <div class="inner">
            <div class="container">
                <div class="section-top-content flex items-center">
                    <h1>Latest News</h1>
                    <a href="blog-list.html">View all news<i class="ion-ios-arrow-thin-right"></i></a>
                </div> <!-- end .section-top-content -->
                <div class="news-grid">
                    <div class="news-grid-row flex space-between">
                        <div class="news-item">
                            <img src="images/news-grid01.jpg" alt="news-thumbnail" class="img-responsive">
                            <div class="news-content">
                                <div class="news-meta flex no-column">
                                    <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                    <h6 class="publish-date">20.02.2017</h6>
                                    <h6><a href="#0" class="comment-count">5 comments</a></h6>
                                </div> <!-- end .news-meta -->
                                <h3 class="news-title">Tips to write an impressive resume online for beginner</h3>
                                <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                                <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                            </div> <!-- end .news-content -->
                        </div> <!-- end .news-item -->
                        <div class="news-item">
                            <img src="images/news-grid02.jpg" alt="news-thumbnail" class="img-responsive">
                            <div class="news-content">
                                <div class="news-meta flex no-column">
                                    <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                    <h6 class="publish-date">20.02.2017</h6>
                                    <h6><a href="#0" class="comment-count">5 comments</a></h6>
                                </div> <!-- end .news-meta -->
                                <h3 class="news-title">Let's explore 5 cool new features in JobPress theme</h3>
                                <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                                <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                            </div> <!-- end .news-content -->
                        </div> <!-- end .news-item -->
                        <div class="news-item">
                            <img src="images/news-grid03.jpg" alt="news-thumbnail" class="img-responsive">
                            <div class="news-content">
                                <div class="news-meta flex no-column">
                                    <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                    <h6 class="publish-date">20.02.2017</h6>
                                    <h6><a href="#0" class="comment-count">5 comments</a></h6>
                                </div> <!-- end .news-meta -->
                                <h3 class="news-title">How to convince recuiters and get your dream job</h3>
                                <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                                <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                            </div> <!-- end .news-content -->
                        </div> <!-- end .news-item -->
                    </div>  <!-- end .news-grid-row -->
                </div> <!-- end .news-grid -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Clients Section -->
    <div class="section clients-section solid-grey-bg">
        <div class="inner">
            <div class="container">
                <h1 class="section-title">Clients & Partners</h1>
                <div class="logo-grid">
                    <div class="logo-grid-row flex space-between">
                        <div class="logo-item flex">
                            <img src="images/client-logo01.png" alt="client-company-logo" class="img-responsive self-center">
                        </div> <!-- end .logo-item -->
                        <div class="logo-item flex">
                            <img src="images/client-logo02.png" alt="client-company-logo" class="img-responsive self-center">
                        </div> <!-- end .logo-item -->
                        <div class="logo-item flex">
                            <img src="images/client-logo03.png" alt="client-company-logo" class="img-responsive self-center">
                        </div> <!-- end .logo-item -->
                        <div class="logo-item flex">
                            <img src="images/client-logo04.png" alt="client-company-logo" class="img-responsive self-center">
                        </div> <!-- end .logo-item -->
                        <div class="logo-item flex">
                            <img src="images/client-logo05.png" alt="client-company-logo" class="img-responsive self-center">
                        </div> <!-- end .logo-item -->
                        <div class="logo-item flex">
                            <img src="images/client-logo06.png" alt="client-company-logo" class="img-responsive self-center">
                        </div> <!-- end .logo-item -->
                    </div> <!-- end .logo-grid-row -->
                </div> <!-- end .logo-grid -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->


@endsection