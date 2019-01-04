@extends('layouts.skeleton')

@section('title', __('Sign In'))

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <form action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <h1>@lang ('Sign In')</h1>
                    <p class="text-muted mt-3 lead" style="cursor: pointer;" data-container="body" data-toggle="popover" data-html="true" data-placement="top" data-content="<mark>@lang ('user')</mark>: <code>{{ config('app.demo_user') }}</mark><br><mark>@lang ('password')</code>: <code>{{ config('app.demo_passwd') }}</code>">
                        <i class="icons cui-magnifying-glass"></i>
                        @lang ('Demo account information is here')
                    </p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-user"></i>
                        </span>
                      </div>
                      <input name="email" type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="E-Mail" required autofocus />
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-lock"></i>
                        </span>
                      </div>
                      <input name="password" type="password" value="" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required />
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>

                    <div class="row">
                      <div class="col-2">
                        <label class="switch switch-pill switch-outline-success">
                          <input name="remember" type="checkbox" id="remember" class="switch-input" {{ old('remember') ? 'checked' : '' }} />
                          <span class="switch-slider"></span>
                        </label>
                      </div>
                      <div class="col-10">
                        <label for="remember">
                          <p class="text-muted">{{ __('Remember Me') }}</p>
                        </label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <button class="btn btn-outline-primary px-4" type="{{ empty($demo) ? 'submit' : 'button' }}">{{ __('Login') }}</button>
                      </div>
                      <div class="col-8 text-right">
                        <a href="{{ route('password.request') }}">
                          <button class="btn btn-link px-0" type="button">{{ __('Forgot password?') }}</button>
                        </a>
                      </div>
                      <div class="col-12 d-md-none mt-3">
                        <a href="{{ route('register') }}">
                          <button class="btn btn-link px-0" type="button">Do not have a account? Sign Up!</button>
                        </a>
                      </div>
                    </div>
                  </div>
              </form>
              <div class="card p-4">
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-block btn-google-plus" type="button">
                        <i class="fa fa-google-plus"></i><span> Google</span>
                      </button>
                      <button class="btn btn-block btn-facebook" type="button">
                        <i class="fa fa-facebook"></i><span> Facebook</span>
                      </button>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-block btn-twitter" type="button">
                        <i class="fa fa-twitter"></i><span> Twitter</span>
                      </button>
                      <button class="btn btn-block btn-dark" type="button">
                        <i class="fa fa-github"></i><span> GitHub</span>
                      </button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="{{ route('register') }}">
                    <button class="btn btn-success mt-3" type="button">Register Now!</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
