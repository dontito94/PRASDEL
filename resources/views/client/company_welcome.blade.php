@extends('layouts.main')


@section('title')

    Company
@endsection

@section('select2css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"
          xmlns="http://www.w3.org/1999/html"/>
@endsection


@section('content')
    <!-- Responsive Menu -->
    <div class="responsive-menu">
        <a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
        <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
    </div> <!-- end .responsive-menu -->

    <!-- Blog Section -->
    <div class="section blog-single-section">
        <div class="jumbotron" style="background-image: url('/template/images/blog-post-featured-img01.jpg')">
            <h1>Hire Top Employees!!</h1>
            <h1 style="color:cadetblue;font-size: 2.75em ">Find the perfect candidates</h1>

            <p style="color: darkblue;">Create a BrighterMonday account and take the first step toward a new career.</p>
            <p><a class="btn btn-primary btn-lg" style="margin-left: 50px" href="#" role="button">Learn more</a></p>
        </div>
        <div class="section blog-text-content-wrapper">
            <div class="inner">
                <div class="container">
                    <div class="blog-text-content">
                        <div class="content-meta flex items-center no-column no-wrap">
                            <div class="left-side">
                                <img src="template/images/avatar07.jpg" alt="post-author-image" class="img-responsive">
                            </div> <!-- end .left-side -->
                            <div class="right-side">
                                <h1 class="dark">Blog single full width with image format</h1>
                                <div class="right-side-bottom-wrapper flex items-center">
                                    <div class="news-meta flex no-column">
                                        <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                        <h6 class="publish-date">20.02.2017</h6>
                                        <h6><a href="#0" class="comment-count">5 comments</a></h6>
                                    </div> <!-- end .news-meta -->
                                    <div class="post-tags-wrapper flex items-center no-column">
                                        <h6>Tags:</h6>
                                        <ul class="post-tags flex items-center no-column list-unstyled">
                                            <li><a href="#0" class="button button-sm grey">Recruiter</a></li>
                                            <li><a href="#0" class="button button-sm grey">Interview</a></li>
                                            <li><a href="#0" class="button button-sm grey">Salary</a></li>
                                        </ul> <!-- end .post-tags -->
                                    </div> <!-- end .post-tags-wrapper -->
                                </div> <!-- end .right-side-bottom-wrapper -->
                            </div> <!-- end .right-side -->
                        </div> <!-- end .blog-content-meta -->

                        <div class="divider"></div>

                        <div class="blog-text">
                            <p><strong>Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu. Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi.</strong><br><br>Duis eget velit sodales, tristique dui a, malesuada erat. Phasellus at neque augue. Nullam convallis tincidunt tincidunt. Maecenas a libero aliquam, sollicitudin lectus vel, ultrices lacus. Aliquam placerat venenatis rutrum. Quisque id placerat leo, quis porta justo. Pellentesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit lacus augue sit amet lacus. Sed id ornare neque. In eget tortor varius, pharetra elit porttitor, porttitor metus. Integer bibendum diam vitae mi semper pellentesque. Sed tincidunt congue ipsum. Sed sagittis porttitor felis ut dictum. Nullam mattis vestibulum dui, ac mattis diam sollicitudin in.<br><br>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere. Nullam tempor, ipsum eget egestas viverra, velit augue fringilla arcu, et sollicitudin enim eros nec est. Suspendisse volutpat velit non porttitor placerat. Mauris porttitor aliquam bibendum. Nam at ultrices justo. Mauris eget urna magna.<br><br>Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Integer hendrerit egestas magna, eu pellentesque velit placerat et. Integer pulvinar dolor eu metus elementum, at commodo erat efficitur. Vivamus sollicitudin, quam a ornare vestibulum, lorem turpis egestas magna, in lacinia felis arcu sit amet arcu.</p>
                        </div> <!-- end .blog-text -->

                        <div class="social-share-wrapper flex items-center no-wrap">
                            <h6>Share this job:</h6>
                            <ul class="social-share flex no-wrap no-column list-unstyled">
                                <li><a href="#0" class="button button-sm facebook-btn"><span><i class="ion-social-facebook"></i></span>Facebook</a></li>
                                <li><a href="#0" class="button button-sm twitter-btn"><span><i class="ion-social-twitter"></i></span>Twitter</a></li>
                                <li><a href="#0" class="button button-sm g-plus-btn"><span><i class="ion-social-googleplus"></i></span>Google plus</a></li>
                            </ul> <!-- end .social-share -->
                        </div> <!-- end .social-share-wrapper -->
                    </div> <!-- end .blog-text-content -->

                    <div class="divider"></div>
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .blog-text-content -->
    </div> <!-- end .blog-single-section -->



@endsection