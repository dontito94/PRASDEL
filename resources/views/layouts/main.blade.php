<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Spinnaker" rel="stylesheet">

    <!-- Fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- Styles -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('select2css')
    {{--<link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
    <!-- Owl Carousel -->
    <link href="{!! url('template/css/owl.carousel.css') !!}" rel="stylesheet">
    <link href="{!! url('template/css/owl.theme.default.css') !!}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{!! url('template/css/animate.min.css') !!}" rel="stylesheet">
    <!--Magnific Popup -->
    <link href="{!! url('template/css/magnific-popup.css') !!}" rel="stylesheet">
    <!--Tagsinput CSS -->
    <link href="{!! url('template/css/tagsinput.css') !!}" rel="stylesheet">
    <!-- Style.css -->
    <link href="{!! url('template/css/style.css') !!}" rel="stylesheet">
    <link href="{!! url('template/fonts/ionicons/css/ionicons.min.css') !!}" rel="stylesheet">







    <!-- Hover CSS -->
    <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet">
    <!-- Toastr CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>
<body>
<div id="app">
    {{--@include('partials.navbar')--}}
    <header class="header">
        <div class="container clearfix">
            <div class="header-inner flex space-between items-center">
                <div class="left">
                    <div class="logo"><a href="{!! url('/') !!}"><img src="{!! url('img/LOGO.png') !!}"   width="200" height="45" alt="JobPress" class="img-responsive"></a></div>
                </div> <!-- end .left -->
                <div class="right flex space-between no-column items-center">
                    <div class="navigation">
                        <nav class="main-nav">
                            <ul class="list-unstyled">
                                @guest
                                <li class="active"><a href="{!! url('/') !!}">Home</a></li>
                                <li><a href="{!! route('about_us') !!}">About</a></li>
                                <li><a href="{!! route('candidate') !!}">Candidate</a></li>
                                <li><a href="{!! route('company') !!}">Company</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#0">Support</a>
                                    <ul>
                                        <li><a href="#">Help Tabs</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Pricing plans</a></li>
                                    </ul>
                                </li>

                                @else

                                    @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
                                        <li class="active"><a href="{!! url('/') !!}">Home</a></li>
                                        <li><a href="{!! route('about_us') !!}">About</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="candidates-listing.html">Candidates</a>
                                            <ul>
                                                <li><a href="{!! route('jobs.job_list') !!}">Jobs Listing</a></li>
                                                <li><a href="categories.html">Job Categories</a></li>
                                                <li><a href="{!! url('profile',str_slug(strtolower(Auth::user()->name), '-')) !!}">Candidate Dashboard</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="blog-standard.html">Blog</a>
                                            {{--<ul>--}}
                                                {{--<li><a href="blog-standard.html">Blog Standard</a></li>--}}
                                                {{--<li><a href="blog-grid-full-width.html">Blog Grid Full Width</a></li>--}}
                                                {{--<li><a href="blog-masonry-full-width.html">Blog Masonry Full Width</a></li>--}}
                                                {{--<li><a href="blog-list.html">Blog List</a></li>--}}
                                                {{--<li><a href="blog-single-fullwidth-image.html">Blog Single Image</a></li>--}}
                                                {{--<li><a href="blog-single-fullwidth-video.html">Blog Single Video</a></li>--}}
                                                {{--<li><a href="blog-single-with-sidebar.html">Blog Single Sidebar</a></li>--}}
                                            {{--</ul>--}}
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#0">Support</a>
                                            <ul>
                                                <li><a href="#">Help Tabs</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">Pricing plans</a></li>
                                            </ul>
                                        </li>
                                        @endif

                                        @if(\Illuminate\Support\Facades\Auth::user()->role == 2)
                                            <li class="active"><a href="index-2.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>

                                            <li class="menu-item-has-children">
                                                <a href="companies-listing.html">Companies</a>
                                                <ul>
                                                    <li><a href="companies-listing.html">Browse Companies</a></li>
                                                    <li><a href="post-job-form.html">Post a job</a></li>
                                                    <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="blog-standard.html">Blog</a>
                                                <ul>
                                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                                    <li><a href="blog-grid-full-width.html">Blog Grid Full Width</a></li>
                                                    <li><a href="blog-masonry-full-width.html">Blog Masonry Full Width</a></li>
                                                    <li><a href="blog-list.html">Blog List</a></li>
                                                    <li><a href="blog-single-fullwidth-image.html">Blog Single Image</a></li>
                                                    <li><a href="blog-single-fullwidth-video.html">Blog Single Video</a></li>
                                                    <li><a href="blog-single-with-sidebar.html">Blog Single Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#0">Pages</a>
                                                <ul>
                                                    <li><a href="help.html">Help Tabs</a></li>
                                                    <li><a href="contact-us-full-width.html">Contact Us</a></li>
                                                    <li><a href="pricing-plans.html">Pricing plans</a></li>
                                                </ul>
                                            </li>
                                        @endif

                                 @endguest

                            </ul>
                        </nav> <!-- end .main-nav -->
                        <a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
                    </div> <!-- end .navigation -->

                    @guest
                    <div class="button-group-merged flex no-column">
                        <a href="{!! url('/login') !!}" class="button">login</a>
                        <a href="{!! url('/register') !!}" class="button" data-target=".bs-modal-sm">Sign Up</a>
                    </div> <!-- end .button-group-merged -->
                    @endguest
                    @auth
                    <div class="account-info-top flex items-center no-column">
                        <a href="#0" class="notification-icon"><i class="ion-android-notifications"></i></a>
                        <a href="#0" class="profile-button flex space-between items-center no-column no-wrap"><span>Hi!</span>{{ Auth::user()->name }} <img src="{!! url('template/images/avatar01.jpg') !!}" alt="avatar" class="img-responsive"></a>
                    </div> <!-- end .account-info-top -->
                    @endauth
                </div> <!-- end .right -->
            </div> <!-- end .header-inner -->
        </div> <!-- end .container -->
    </header> <!-- end .header -->

    <main>
        @yield('content')

    </main>
    @include('partials.footer')
</div>
<!-- jQuery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@yield('jsplugins')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="{{asset('template/js/script.js')}}"></script>
{!! Html::script(url('template/js/jquery-3.1.1.min.js')) !!}
{!! Html::script(url('template/js/bootstrap.min.js')) !!}
{!! Html::script(url('template/js/owl.carousel.min.js')) !!}
{!! Html::script(url('template/js/wow.min.js')) !!}
{!! Html::script(url('template/js/typehead.js')) !!}

{!! Html::script(url('template/js/tagsinput.js')) !!}
{!! Html::script(url('template/js/bootstrap-select.js')) !!}
{!! Html::script(url('template/js/jquery.waypoints.min.js')) !!}
{!! Html::script(url('template/js/jquery.countTo.js')) !!}
{!! Html::script(url('template/js/isotope.pkgd.min.js')) !!}

{!! Html::script(url('template/js/imagesloaded.pkgd.min.js')) !!}
{!! Html::script(url('template/js/jquery.magnific-popup.js')) !!}
{!! Html::script(url('template/js/theme.init.js')) !!}
{!! Html::script(url('template/vendor/select2/js/select2.min.js')) !!}
{!! Html::script(url('template/js/share.js')) !!}


<!-- Scripts -->
<!-- jQuery -->
<!-- Bootstrap -->
<!-- google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
<!-- Owl Carousel -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@yield('jsplugins')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
{{--{!! Html::script(url('js/theme.js')) !!}--}}
{{--{!! Html::script(url('js/custom.js')) !!}--}}
{{--{!! Html::script(url('js/theme.init.js')) !!}--}}
{{--{!! Html::script(url('vendor/select2/js/select2.min.js')) !!}--}}
{{--{!! Html::script(url('js/share.js')) !!}--}}


{{--{!! Html::script(url('vendor/jquery/jquery.js')) !!}--}}
{{--{!! Html::script(url('assets/nextbyte/plugins/jquery-ui/js/jquery-ui.min.js')) !!}--}}
{{--{!! Html::script(url('vendor/jquery-browser-mobile/jquery.browser.mobile.js')) !!}--}}
{{--{!! Html::script(url('vendor/popper/umd/popper.min.js')) !!}--}}
{{--{!! Html::script(url('vendor/bootstrap/js/bootstrap.min.js')) !!}--}}
{{--{!! Html::script(url('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')) !!}--}}
{{--{!! Html::script(url('vendor/common/common.js')) !!}--}}
{{--{!! Html::script(url('vendor/nanoscroller/nanoscroller.js')) !!}--}}
{{--{!! Html::script(url('vendor/magnific-popup/jquery.magnific-popup.min.js')) !!}--}}
{{--{!! Html::script(url('vendor/jquery-placeholder/jquery-placeholder.js')) !!}--}}
{{--{!! Html::script(url('vendor/pnotify/pnotify.custom.js')) !!}--}}
{{--{!! Html::script(url('vendor/socket/js/socket.io.min.js')) !!}--}}
<!-- toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>
