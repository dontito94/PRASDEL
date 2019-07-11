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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('select2css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
{{ Html::style(url('css/theme.css')) }}
{{ Html::style(url('css/theme-elements.css')) }}
{{ Html::style(url('css/skins/default.css')) }}
{{ Html::style(url('css/custom.css')) }}
{{ Html::style(url("/css/fonts.googleapis.css"), ['rel' => 'stylesheet', 'type' => 'text/css']) }}
{{ Html::style(url('vendor/bootstrap/css/bootstrap.min.css')) }}
{{ Html::style(url('vendor/animate/animate.css')) }}
{{ Html::style(url('vendor/font-awesome/css/fontawesome-all.min.css')) }}
{{ Html::style(url('vendor/magnific-popup/magnific-popup.css')) }}
{{ Html::style(url('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')) }}
{{ Html::style(url("assets/nextbyte/plugins/jquery-ui/css/jquery-ui.min.css"), ['rel' => 'stylesheet']) }}
{{ Html::style(url("vendor/pnotify/pnotify.custom.css"), ['rel' => 'stylesheet']) }}

    <!-- Hover CSS -->
    <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet">
    <!-- Toastr CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

     
</head>
<body>
    <div id="app">
        @include('partials.navbar')
        <main>           
            @yield('content')
            <div class="loading">
                <i class="fas fa-spinner fa-pulse fa-3x fa-fw"></i><br/>
                <span>Loading</span>
            </div>
        </main>
        @include('partials.footer')
    </div>   
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
    @yield('jsplugins')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    {!! Html::script(url('js/theme.js')) !!}
    {!! Html::script(url('js/custom.js')) !!}
    {!! Html::script(url('js/theme.init.js')) !!}
    {!! Html::script(url('vendor/select2/js/select2.min.js')) !!}
    {!! Html::script(url('js/share.js')) !!}


    <!- toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html>
