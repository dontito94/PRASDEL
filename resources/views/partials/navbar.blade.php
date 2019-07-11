 {{--<nav class="navbar navbar-expand-sm navbar-light navbar-laravel">--}}
        {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
           {{--<img src="{{ asset('storage/assets/iconnect.png') }}" id="mylogo">--}}
        {{--</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
            {{--@guest--}}
            {{--<!-- Left Side Of Navbar -->--}}
              {{--<ul class="navbar-nav mr-auto">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/userdashboard">FIND WORK<span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/how-it-works">HOW IT WORKS</a>--}}
                {{--</li>--}}
              {{--</ul>--}}
            {{--@else--}}
            {{--@if(Auth::user()->role == 1)--}}
                {{--<!-- Left Side Of Navbar -->--}}
                  {{--<ul class="navbar-nav mr-auto">--}}
                     {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/userdashboard">FIND WORK<span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/profile/{{str_slug(strtolower(Auth::user()->name), '-')}}">PROFILE</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/my-jobs">MY JOBS</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="">MESSAGES</a>--}}
                    {{--</li>--}}
                  {{--</ul>--}}
             {{--@endif--}}

             {{--@if(Auth::user()->role == 2)--}}
                {{--<ul class="navbar-nav mr-auto">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/jobs">JOBS<span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/dashboard">DASHBOARD</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="">MESSAGES</a>--}}
                    {{--</li>--}}
                 {{--</ul>--}}
             {{--@endif--}}
             {{--@if(Auth::user()->role == 3)--}}
                 {{--<ul class="navbar-nav mr-auto">--}}
                     {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/panel/freelancer">FREELANCERS<span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/panel/clients">CLIENTS</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="/panel/jobs">JOBS</a>--}}
                    {{--</li>--}}
                  {{--</ul>--}}
              {{--@endif--}}
            {{--@endguest--}}
            {{--<!-- Right Side Of Navbar -->--}}
            {{--<ul class="navbar-nav ml-auto list-group">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@guest--}}
                    {{--<li><a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="{{ route('login') }}">LOGIN</a></li>--}}
                    {{--<li><a class="nav-link list-group-item list-group-item-action flex-column align-items-end" href="{{ route('register') }}">SIGN UP</a></li>--}}
                    {{--<li><a class="nav-link" href=""><button class="btn btn-sm align-middle btn-info" type="button">POST A JOB</button></a></li>--}}
                {{--@else--}}
                    {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--@if(Auth::user()->role == 1)--}}
                                {{--<a href="/dashboard" class="dropdown-item" >Account Settings</a>--}}
                            {{--@endif--}}
                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                             {{--document.getElementById('logout-form').submit();">--}}
                                {{--Logout--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--@csrf--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--@endguest--}}
            {{--</ul>--}}
        {{--</div>--}}
{{--</nav>--}}


 <header class="header header-nav-menu">
     <div class="logo-container">
         <a href="../" class="logo">
             <img src="{!! url('img/LOGO.png') !!}" width="200" height="45" alt="Porto Admin" />
         </a>
         <button class="btn header-btn-collapse-nav d-lg-none" data-toggle="collapse" data-target=".header-nav">
             <i class="fas fa-bars"></i>
         </button>

         <!-- start: header nav menu -->
         <div class="header-nav collapse">
             <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                 <nav>
                     <ul class="nav nav-pills" id="mainNav">
                         @guest

                         <li class="">
                             <a class="nav-link" href="{{ url('/') }}">
                                 HOME
                             </a>
                         </li>
                         <li class="">
                             <a class="nav-link" href="{!! route('userdashboard') !!}">
                                 BROWSE TRAINING
                             </a>
                         </li>
                         <li class="">
                             <a class="nav-link" href="#">
                                 CANDIDATE
                             </a>
                         </li>
                         <li class="">
                             <a class="nav-link" href="#">
                                 COMPANY
                             </a>
                         </li>
                         <li class="">
                             <a class="nav-link" href="#">
                                 SOFT SKILLS
                             </a>
                         </li>

                         @else

                             @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
                         <li class="">
                             <a class="nav-link" href="{!! route('userdashboard') !!}">
                                 Dashboard
                             </a>
                         </li>
                         <li class="dropdown ">
                             <a class="nav-link dropdown-toggle" href="#">
                                 Trainings
                             </a>
                             <ul class="dropdown-menu">
                                 <li>
                                     <a class="nav-link" href="{!! route('userdashboard') !!}">
                                         Find Trainings
                                     </a>
                                 </li>
                                 <li>
                                     <a class="nav-link" href="{!! route('myjobs') !!}">
                                         Applied trainings
                                     </a>
                                 </li>
                                 <li>
                                     <a class="nav-link" href="#">
                                         saved Trainings
                                     </a>
                                 </li>

                             </ul>
                         </li>
                                 <li class="">
                                     <a class="nav-link" href="#">
                                         soft skills
                                     </a>
                                 </li>
                         <li class="dropdown">
                             <a class="nav-link dropdown-toggle" href="#">
                                 Layouts
                             </a>
                             <ul class="dropdown-menu">
                                 <li>
                                     <a class="nav-link" href="index.html">
                                         Landing Page
                                     </a>
                                 </li>
                             </ul>
                         </li>
                             @endif

                                 @if(\Illuminate\Support\Facades\Auth::user()->role == 2)
                                     <li class="">
                                         <a class="nav-link" href="{!! route('client.dashboard') !!}">
                                             Dashboard
                                         </a>
                                     </li>
                                     <li class="dropdown">
                                         <a class="nav-link dropdown-toggle" href="#">
                                             Trainings
                                         </a>
                                         <ul class="dropdown-menu">
                                             <li>
                                                 <a class="nav-link" href="{!! route('jobs.create') !!}">
                                                     Post Trainings
                                                 </a>
                                             </li>
                                             <li>
                                                 <a class="nav-link" href="{!! route('jobs.all') !!}">
                                                     Training Proposals
                                                 </a>
                                             </li>
                                             <li>
                                                 <a class="nav-link" href="{!! route('client.dashboard') !!}">
                                                     Manage  Trainings
                                                 </a>
                                             </li>

                                         </ul>
                                     </li>
                                     <li class="">
                                         <a class="nav-link" href="#">
                                             soft skills
                                         </a>
                                     </li>
                                     <li class="dropdown">
                                         <a class="nav-link dropdown-toggle" href="#">
                                             Layouts
                                         </a>
                                         <ul class="dropdown-menu">
                                             <li>
                                                 <a class="nav-link" href="index.html">
                                                     Landing Page
                                                 </a>
                                             </li>
                                         </ul>
                                     </li>
                                 @endif


                             @endguest
                     </ul>
                 </nav>
             </div>
         </div>
         <!-- end: header nav menu -->
     </div>

     <!-- start: search & user box -->
     <div class="header-right">

        <span class="d-none d-xl-inline-block">
            {{--@include("includes/partials/lang")--}}
        </span>
         <span class="separator"></span>

         @guest
         <div class="user_links" style="display: inline-block">
             @lang("label.account?")
             {{ link_to('/login', __("label.login"), ['class' => 'btn btn-sm btn-default']) }}
             {{ link_to('/register', __("label.registration"), ['class' => 'btn btn-sm btn-default']) }}
             &nbsp;
         </div>

         @endguest

         @auth
         {{--<ul class="notifications">--}}
             {{--<li>--}}
                 {{--<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">--}}
                     {{--<i class="fas fa-flag-checkered"></i>--}}
                     {{--<span class="badge offers-badge"></span>--}}
                 {{--</a>--}}
                 {{--<div class="dropdown-menu notification-menu large">--}}
                     {{--<div class="notification-title">--}}
                         {{--<span class="float-right badge badge-default">{{ alert()->getByUserByTypeCount(access()->user()->id, 210) }}</span>--}}
                         {{--@lang('label.business.offers')--}}
                     {{--</div>--}}
                     {{--<div class="content">--}}
                         {{--<div id="offers-list"></div>--}}
                         {{--<hr/>--}}
                         {{--<div class="text-right">--}}
                             {{--<a href="{{ route('alert.index') }}" class="view-more">@lang('label.view_all')</a>--}}
                         {{--</div>--}}
                     {{--</div>--}}
                 {{--</div>--}}
             {{--</li>--}}
             {{--<li>--}}
                 {{--<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">--}}
                     {{--<i class="fas fa-file-alt"></i>--}}
                     {{--<span class="badge tenders-badge"></span>--}}
                 {{--</a>--}}
                 {{--<div class="dropdown-menu notification-menu">--}}
                     {{--<div class="notification-title">--}}
                         {{--<span class="float-right badge badge-default">{{ alert()->getByUserByTypeCount(access()->user()->id, 211) }}</span>--}}
                         {{--@lang('label.business.tenders')--}}
                     {{--</div>--}}

                     {{--<div class="content">--}}
                         {{--<div id="tenders-list"></div>--}}
                         {{--<hr/>--}}
                         {{--<div class="text-right">--}}
                             {{--<a href="{{ route('alert.index') }}" class="view-more">@lang('label.view_all')</a>--}}
                         {{--</div>--}}
                     {{--</div>--}}
                 {{--</div>--}}
             {{--</li>--}}
             {{--<li>--}}
                 {{--<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">--}}
                     {{--<i class="fas fa-bell"></i>--}}
                     {{--<span class="badge alerts-badge"></span>--}}
                 {{--</a>--}}
                 {{--<div class="dropdown-menu notification-menu">--}}
                     {{--<div class="notification-title">--}}
                         {{--<span class="float-right badge badge-default">{{ alert()->getByUserByTypeCount(access()->user()->id, 209) }}</span>--}}
                         {{--@lang('label.system.alerts.alerts')--}}
                     {{--</div>--}}
                     {{--<div class="content">--}}
                         {{--<div id="alerts-list"></div>--}}
                         {{--<hr />--}}
                         {{--<div class="text-right">--}}
                             {{--<a href="{{ route('alert.index') }}" class="view-more">@lang('label.view_all')</a>--}}
                         {{--</div>--}}
                     {{--</div>--}}
                 {{--</div>--}}
             {{--</li>--}}
         {{--</ul>--}}
         <span class="separator"></span>

         <div id="userbox" class="userbox">
             <a href="#" data-toggle="dropdown">
                 <div class="profile-info" data-lock-name=" {{ Auth::user()->name }}" data-lock-email="  {{ Auth::user()->email }}">
                     <span class="name"></span>
                     @auth
                     <span class="name"> <span class="badge badge-pill badge-success">&nbsp;</span>  {{ Auth::user()->name }}</span>
                     @endauth
                 </div>
                 <i class="fa custom-caret"></i>
             </a>

             <div class="dropdown-menu">
                 <ul class="list-unstyled">
                     <li class="divider"></li>
                     <li>
                         <a role="menuitem" tabindex="-1" href="profile/{{str_slug(strtolower(Auth::user()->name), '-')}}"><i class="fas fa-user"></i> @lang('label.my_profile')</a>
                     </li>
                     <li>
                         {!! Form::open(['route' => 'logout', 'id' => 'logout-form']) !!}
                         {!! Form::close() !!}
                         <a role="menuitem" tabindex="-1" href="{{ route("logout") }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> @lang("label.logout") </a>
                     </li>
                 </ul>
             </div>
         </div>
         @endauth
     </div>
     <!-- end: search & user box -->


 </header>>