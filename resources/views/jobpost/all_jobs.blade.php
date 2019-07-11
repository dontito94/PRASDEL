@extends('layouts.main')

@section('title')
    Prasdel - Hire Candidate &amp; Find Pratical Training Jobs Online
@endsection

@section('content')

    <!-- Breadcrumb Bar -->
    <div class="section breadcrumb-bar solid-blue-bg">
        <div class="inner">
            <div class="container-fluid">
                <p class="breadcrumb-menu">
                    <a href="{!! url('/') !!}"><i class="ion-ios-home"></i></a>
                    <i class="ion-ios-arrow-right arrow-right"></i>
                    {{--<a href="#0">Job listing - list view</a>--}}
                </p> <!-- end .breabdcrumb-menu -->
                <h2 class="breadcrumb-title">Showing all Practical Trainings</h2>
            </div> <!-- end .container-fluid -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Job Listings Section -->
    <div class="section jobs-listing-section">
        <div class="container-fluid">
            <div class="jobs-listing-wrapper flex no-wrap">

                <div class="left-side">

                    <div class="statistics-widget-wrapper jobs-widget">
                        <h6>Overall statistics</h6>
                        <div class="statistics-widget flex no-column no-wrap">
                            <div class="left-side-inner">
                                <h2 class="dark">683,207</h2>
                                <h5>Created Resumes</h5>
                            </div> <!-- end .left-side -->
                            <div class="right-side-inner">
                                <button type="button" class="button button-sm grey">+583 this week</button>
                            </div> <!-- end .right-side -->
                        </div> <!-- end .statisstics-widget -->

                        <div class="statistics-widget flex no-column no-wrap">
                            <div class="left-side-inner">
                                <h2 class="dark">129, 245</h2>
                                <h5>Posted Jobs</h5>
                            </div> <!-- end .left-side -->
                            <div class="right-side-inner">
                                <button type="button" class="button button-sm grey">+364 this week</button>
                            </div> <!-- end .right-side -->
                        </div> <!-- end .statisstics-widget -->

                    </div> <!-- end .statistics-widget-wrapper -->

                    <div class="divider"></div>

                    <div class="job-categories-widget jobs-widget">
                        <h6>Categories</h6>
                        <form method="get">
                            <div class="form-check">
                                <input class="form-check-input catFilter" type="checkbox"  value="all" id="filterall" name="cat"
                                @if($cat > 0)
                                    {{'unchecked'}}
                                        @else
                                    {{'checked'}}
                                        @endif
                                >
                                <label class="form-check-label" for="filterall">All
                                </label>
                            </div>
                            @foreach($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input catFilter" type="checkbox" value="{{$category->id}}" id="defaultCheck1{{$category->id}}" name="cat"
                                    @if($cat == $category->id)
                                        {{'checked'}}
                                            @endif
                                    >
                                    <label class="form-check-label" for="defaultCheck1{{$category->id}}">
                                        {{$category->category_name}}
                                    </label>
                                </div>
                            @endforeach


                            <input type="text" name="search" class="form-control mt-2" placeholder="Search Training" value="{{$search}}">
                            <button class="btn btn-info mt-2" id="searchCat">Seach</button>
                        </form>
                        {{--<ul class="job-categories list-unstyled">--}}
                            {{--@foreach($categories as $category)--}}
                                {{--<li class="job-category checkbox flex space-between items-center no-column no-wrap">--}}
                                    {{--<input id="checkbox1" type="checkbox">--}}
                                    {{--<label for="checkbox1">{!! $category->category_name !!}<span>4,286 Jobs</span></label>--}}
                                    {{--<span><i class="ion-android-add"></i></span>--}}
                                {{--</li>--}}
                                {{--@endforeach--}}

                        {{--</ul> <!-- end .job-categories -->--}}
                    </div> <!-- end .job-categories-widget -->

                </div> <!-- end .left-side -->

                <div class="center-content-wrapper">

                    <div class="sort-by-wrapper on-listing-page flex space-between items-center no-wrap">
                        <div class="left-side-inner">
                            <h6>Showing <span>1-5</span>or<span>748</span>job in<a href="#0">Art/design</a>and<a href="#0">Technologies</a>in<a href="#0">San Francisco</a></h6>
                        </div> <!-- end .left-side -->
                        <div class="right-side-inner">
                            <div class="sort-by dropdown flex no-wrap no-column items-center">
                                <h6>sort by</h6>
                                <button class="button dropdown-toggle" type="button" id="sort-by" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Default
                                    <i class="ion-ios-arrow-down"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="sort-by">
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Top candidates</a></li>
                                    <li><a href="#">Price, high to low</a></li>
                                    <li><a href="#">Alphabetically, A-Z</a></li>
                                    <li><a href="#">Alphabetically, Z-A</a></li>
                                    <li><a href="#">Best sellers</a></li>
                                </ul> <!-- end .dropdown-menu -->
                            </div> <!-- end .sort-by-drop-down -->
                        </div> <!-- end .right-side -->
                    </div> <!-- end .sort-by-wrapper -->


                    <div class="bookmarked-jobs-list-wrapper on-listing-page">
                        @foreach($jobs as $job)
                            <div class="bookmarked-job-wrapper">
                                <div class="bookmarked-job flex no-wrap no-column ">
                                    <div class="job-company-icon">
                                        <img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
                                    </div> <!-- end .job-icon -->
                                    <div class="bookmarked-job-info">
                                        <h4 class="dark flex no-column">{!! $job->title !!}<a href="#0" class="button full-time"> {{ucwords($job->position_type)}}</a></h4>
                                        <h5>{!! $job->user->name !!}</h5>
                                        <p> {!! truncateString($job->body,100) !!}</p>
                                        <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                                            <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                                <h6 class="bookmarked-job-category">{{ ucwords($job->category->category_name) }}</h6>
                                                <h6 class="candidate-location">Park ave,<span>nyc, usa</span></h6>
                                                <h6 class="hourly-rate">${{number_format($job->budget)}}</h6>
                                            </div> <!-- end .bookmarked-job-meta -->
                                            <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                                                <i class="ion-ios-heart wishlist-icon"></i>
                                                <a href="{!! url('/jobs',$job->id) !!}{{--jobs/{{$job->id}}--}}" class="button">more detail</a>
                                            </div> <!-- end .right-side-bookmarked-job-meta -->
                                        </div> <!-- end .bookmarked-job-info-bottom -->
                                    </div> <!-- end .bookmarked-job-info -->
                                </div> <!-- end .bookmarked-job -->
                            </div> <!-- end .bookmarked-job-wrapper -->

                            @endforeach

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

                </div> <!-- end .center-content -->

                <div class="right-side">

                    <div class="cta-job-widget">
                        <h5 class="dark">Need a Training?</h5>
                        <h3 class="dark">Join our community and search for a better paractical training</h3>
                        <a href="#0">Get started now <span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div> <!-- end .cta-job-widget -->

                </div> <!-- end .right-side -->

            </div> <!-- end .jobs-listing-wrapper -->
        </div> <!-- end .container-fluid -->
    </div> <!-- end .section -->

@endsection