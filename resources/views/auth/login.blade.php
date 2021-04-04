@extends('layouts.auth')
@section('title') Sign in  @endsection
@section('main')
    <section class="wizard-section">
        <div class="form-wizard">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex align-items-center flex-column ">
                    <div class="col-md-12 mb-3 text-center ">
                        <h1>PwC Complaint System </h1>
                        <h1>Login </h1>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationServer01" class="is-required">Email address<span class="sr-only"> (required)</span></label>
                        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                               placeholder="username@domain.com" >

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="validationServer02" class="is-required">Password<span class="sr-only"> (required)</span></label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" >

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
{{--                    <div class="form-group row " style="float: left;">--}}
{{--                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                        <label class="form-check-label" for="remember">--}}
{{--                            {{ __('Remember Me') }}--}}
{{--                        </label>--}}
{{--                    </div>--}}
                    <div class="col-md-5 ">
                        <button class="btn btn-primary  btn-lg btn-block" id="next1" type="submit" >Login
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="col-md-5 mb-3">
                       <button class="btn btn-secondary  btn-lg btn-block">  <a href="{{ route('register') }}" style="text-decoration:none"> Create an Account </a> </button>
                    </div>
                </div>
            </form>
        </div>
    </section>




@endsection
