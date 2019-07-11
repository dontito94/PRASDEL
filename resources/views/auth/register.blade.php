@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5" style="margin-top: 40px;margin-left: 300px;margin-bottom: 30px">
        <div class="col-md-6">
            @include('partials.alert')
            <div class="card card-default">
                <div class="card-header bg-info text-white text-center"><h3 class="h3">Register</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="InputEmail1">Your Name *</label>
                            <input id="InputEmail1" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="InputEmail1">Your Email *</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="InputPassword1">Password *</label>
                            <input id="InputPassword1" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="InputPassword2">Confirm Password *</label>
                            <input id="InputPassword1" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <label for="select1">Register as:</label>
                            <div class="select-wrapper">
                                <select class="form-control" id="select1" name="role">
                                    <option selected disabled>...Select Role</option>
                                    <option value='1' >Candidate</option>
                                    <option value='2'>Company</option>
                                </select>
                            </div> <!-- end .select-wrapper -->
                        </div>

                        <div class="checkbox">
                            <input id="signup-checkbox" type="checkbox">
                            <label for="signup-checkbox">I agree with the Terms of Use</label>
                        </div> <!-- end .checkbox -->

                        <button type="submit" class="button" data-dismiss="modal">Sign Up</button>

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
