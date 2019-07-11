@extends('layouts.main')


@section('title')
    {{$job->title}}
@endsection


@section('content')
{{--<div class="container">--}}
    {{--<div class="row justify-content-center my-5">--}}
        {{--@include('partials.alert')--}}
        {{--<div class="col-md-7">--}}

           {{--<h3 class="h3 text-info mb-4">{{$job->title}}</h3>--}}
           {{--<p class="h5 text-success">Budget: <i class="fas fa-dollar-sign"></i>{{number_format($job->budget)}}</p>--}}
           {{--{!! $job->body !!}--}}

        {{--</div>--}}
        {{--<div class="col-md-3 h6">--}}
        	{{--<ul class="list-unstyled">--}}
        		{{--<li class="mb-2">--}}
        			{{--<span class="text-success">--}}
        				{{--<i class="fas fa-clock"></i> Posted: --}}
        			{{--</span>--}}
        			{{--{{$job->created_at->diffForHumans()}}--}}
        		{{--</li>--}}
        		{{--<li class="mb-2">--}}
        			{{--<span class="text-success">--}}
        				{{--<i class="fas fa-briefcase"></i> Position : --}}
        			{{--</span>--}}
        			{{--{{ucwords($job->position_type)}}--}}
        		{{--</li>--}}
        		{{--<li class="mb-2">--}}
        			{{--<span class="text-success">--}}
        				{{--<i class="fas fa-hourglass-end"></i> Project Duration:  --}}
        			{{--</span>--}}
        			{{--{{ ucwords($job->project_duration) }}--}}
        		{{--</li>--}}
        		{{--<li class="mb-2">--}}
        			{{--<span class="text-success">--}}
        				{{--<i class="fas fa-tags"></i> Category: --}}
        			{{--</span>--}}
        			{{--{{ ucwords($job->category->category_name) }}--}}
        		{{--</li>--}}
        	{{--</ul>--}}
        	{{--<hr>--}}
        	{{--<ul class="list-unstyled">--}}
        		{{--<li class="mb-2 h5 text-info">About the Client</li>--}}
        		{{--<li class="mb-2">--}}
        			{{--<span class="text-primary">Job Posting History: </span>{{$jobcount}} jobs posted</li>--}}
        		{{--<li class="mb-2">--}}
        			{{--<span class="text-primary">Member Since: </span>{{date("M Y", strtotime($job->user->created_at))}}--}}
        		{{--</li>--}}
        	{{--</ul>--}}
        	{{--@guest--}}
        	{{--@else--}}
	        	{{--@if(Auth::user()->role == 1)--}}
                    {{--@if ($result == 'exist')--}}
                       {{--<button class="btn btn-success btn-block"><i class="fas fa-check"></i>Applied</button>--}}
                    {{--@else--}}
	        		{{--<a href="{{url("/job/application/$job->id")}}"><button class="btn btn-primary btn-block"> Apply to this Job</button></a>--}}
                    {{--@endif--}}
	        	{{--@endif--}}
         	{{--@endguest--}}



        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<!-- Breadcrumb Bar -->
<div class="section breadcrumb-bar solid-blue-bg">
	<div class="inner">
		<div class="container-fluid">
			<p class="breadcrumb-menu">
				<a href="index-2.html"><i class="ion-ios-home"></i></a>
				<i class="ion-ios-arrow-right arrow-right"></i>
				{{--<a href="#0">Job listing - list view</a>--}}
			</p> <!-- end .breabdcrumb-menu -->
			<h2 class="breadcrumb-title flex items-center">{{$job->title}}
				<button type="button" class="button full-time button-sm">{{ucwords($job->position_type)}}</button>
			</h2>
		</div> <!-- end .container-fluid -->
	</div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Job Listings Section -->
<div class="section jobs-details-section">
	<div class="container-fluid">
		<div class="jobs-details-wrapper flex no-wrap">

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



			</div> <!-- end .left-side -->

			<div class="right-side-wrapper">
				<div class="right-side-top">
					<h6><span><i class="ion-ios-arrow-left"></i></span>Back to <a href="#0">Technologies</a></h6>
					<div class="right-side-top-inner flex no-wrap">

						<div class="job-post-wrapper">
							<div class="job-post-top flex no-column no-wrap">
								<div class="job-post-top-left">
									<img src="images/company-logo-big01.jpg" alt="company-logo" class="img-responsive">
								</div> <!-- end .left-side-inner -->
								<div class="job-post-top-right">
									<h4 class="dark">{{$job->title}}</h4>
									<h5>{!! $job->user->name !!}</h5>
									<div class="job-post-meta flex items-center no-column no-wrap">
										<div class="bookmarked-job-meta flex items-center no-wrap no-column">
											<h6 class="bookmarked-job-category">{{ ucwords($job->category->category_name) }}</h6>
											<h6 class="candidate-location">Park Ave,<span>NYC, USA</span></h6>
											<h6 class="hourly-rate">${{number_format($job->budget)}}<span></span></h6>
										</div>
										<h6 class="full-time">{{ucwords($job->position_type)}}</h6>
									</div> <!-- end .job-post-meta -->
								</div> <!-- end .right-side-inner -->
							</div> <!-- end .job-post-top -->

							<div class="divider"></div>

							<div class="job-post-bottom">
								<h4 class="dark">Job Description</h4>
								<p>{!! $job->body !!}.</p><br>



								<br>

								<div class="divider"></div>

								<div class="job-post-share flex space-between items-center no-wrap">
									<div class="job-post-share-left flex items-center no-wrap">
										<h6>Share this job:</h6>
										<ul class="social-share flex no-wrap no-column list-unstyled">
											<li><a href="#0" class="button button-sm facebook-btn"><span><i class="ion-social-facebook"></i></span>Facebook</a></li>
											<li><a href="#0" class="button button-sm twitter-btn"><span><i class="ion-social-twitter"></i></span>Twitter</a></li>
											<li><a href="#0" class="button button-sm g-plus-btn"><span><i class="ion-social-googleplus"></i></span>Google plus</a></li>
										</ul> <!-- end .social-share -->
									</div> <!-- end .job-post-share-left -->
									<div class="job-post-share-right flex items-center no-column no-wrap">
										<h6>Bookmark this job</h6>
										<i class="ion-ios-heart wishlist-icon"></i>
									</div> <!-- end .job-post-share-right -->

								</div> <!-- end .job-post-share -->

							</div> <!-- end .job-post-bottom -->

						</div> <!-- end .left-side-inner -->

						<div class="right-side-inner">
							<div id="map" class="map on-job-details-page"></div>
							<div class="job-post-company-info">
								<h5 class="dark">{!! $job->user->name !!}.</h5>
								<ul class="list-unstyled">
									<li class="flex no-column no-wrap"><i class="ion-ios-location"></i>56/23 Park Ave, Manhattan NYC 10001, USA</li>
									<li class="flex no-column no-wrap"><i class="ion-ios-telephone"></i><a href="tel:(+01)-212-342-6789">(+01)-212-342-6789</a></li>
									<li class="flex no-column no-wrap"><i class="ion-email"></i><a href="mailto:hr@banana.inc">hr@banana.inc</a></li>
									<li class="flex no-column no-wrap"><i class="ion-earth"></i><a href="#0">https://banana.inc</a></li>
								</ul>
								<ul class="list-unstyled">
									<li class="mb-2 h5 text-info">About the Client</li>
									<li class="mb-2">
										<span class="text-primary">Job Posting History: </span>{{$jobcount}} jobs posted</li>
									<li class="mb-2">
										<span class="text-primary">Member Since: </span>{{date("M Y", strtotime($job->user->created_at))}}
									</li>
								</ul>
							</div> <!-- end .job-post-company-info -->

							<div class="apply-for-job">
								<p class="divider-text text-center"><span>Apply for this job</span></p>
								<div class="apply-btn-group flex space-center items-center no-column no-wrap">
									<button type="button" class="button facebook-btn">Via Facebook</button>
									<button type="button" class="button linkedln-btn">Via Linkedln</button>
								</div> <!-- end .apply-btn-group -->
							</div> <!-- end .apply-for-job -->

							<div class="system-login text-center">
								<h6>Or login using our system</h6>
								@guest
								@else
									@if(Auth::user()->role == 1)
										@if ($result == 'exist')
											<button class="button"><i class="fas fa-check"></i>Applied</button>
										@else
											<a href="{{url("/job/application/$job->id")}}"><button class="button"> Apply to this Job</button></a>
										@endif
									@endif
									@endguest
							</div> <!-- end .system-login -->

						</div> <!-- end .right-side-inner -->

					</div> <!-- end .left-side-top -->

					<div class="right-side-bottom-wrapper">

						<div class="bookmarked-jobs-list-wrapper on-listing-page on-job-detals-page">
							<h3>Similar jobs from<span>Banana inc.</span></h3>
							<div class="bookmarked-job-wrapper">
								<div class="bookmarked-job flex no-wrap no-column ">
									<div class="job-company-icon">
										<img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
									</div> <!-- end .job-icon -->
									<div class="bookmarked-job-info">
										<h4 class="dark flex no-column">We're looking for a designer<a href="#0" class="button full-time">full time</a></h4>
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

							<div class="bookmarked-job-wrapper">
								<div class="bookmarked-job flex no-wrap no-column ">
									<div class="job-company-icon">
										<img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
									</div> <!-- end .job-icon -->
									<div class="bookmarked-job-info">
										<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button part-time">Part time</a></h4>
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
					</div> <!-- end .right-side-bottom-wrapper -->
				</div> <!-- end .right-side-top-inner -->
			</div> <!-- end .right-side-top -->
		</div> <!-- end .right-side-wrapper -->
	</div> <!-- end .jobs-details-wrapper -->
</div> <!-- end .container-fluid -->
</div> <!-- end .section -->

@endsection
