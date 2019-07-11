@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 40px;margin-left: 300px;margin-bottom: 30px">
        <div class="col-md-6">
            
            <div class="card card-default">
                <div class="card-header bg-info text-center text-white"><h3 class="h3">Login</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="InputEmail1">Your Email *</label>
                            <input id="InputEmail1" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="InputPassword1">Password *</label>
                            <input id="InputPassword1" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="checkbox flex space-between">
                            <div>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="sigin-checkbox">Remember me</label>
                            </div>
                            <a href="{{ route('password.request') }}">Lost password?</a>
                        </div> <!-- end .checkbox -->

                        <button type="submit" class="button" data-dismiss="modal">Login</button>

                        <p class="text-center divider-text small"><span>or login using</span></p>

                        <div class="social-buttons">
                            <ul class="list-unstyled flex space-between">
                                <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                                <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                            </ul>
                        </div> <!-- end .social-buttons -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
