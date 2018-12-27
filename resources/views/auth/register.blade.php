@extends('layouts.skeleton')

@section('title', __('Create your account'))

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="card-body p-4">
                  <h1>Sign Up</h1>
                  <p class="text-muted">@lang ('Create your account')</p>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-user"></i>
                      </span>
                    </div>
                    <input name="name" type="text" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="{{ __('Username') }}" required autofocus />
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>
                    <input name="email" type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="{{ __('E-Mail') }}" required />
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
                    <input name="password" type="password" value class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('Password') }}" required />
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-lock"></i>
                      </span>
                    </div>
                    <input name="password_confirmation" type="password" value class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="{{ __('Repeat password') }}" required />
                  </div>

                  <button class="btn btn-block btn-outline-success" type="submit">Create Account</button>

                  <div>
                    <a href="{{ route('login') }}">
                      <button class="btn btn-block btn-link px-0 mt-3" type="button">Already have a account? Sign in!</button>
                    </a>
                  </div>
                </div>
            </form>
            <div class="card-footer p-4">
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-block btn-facebook" type="button">
                    <i class="fa fa-facebook"></i><span> Facebook</span>
                  </button>
                </div>
                <div class="col-6">
                  <button class="btn btn-block btn-twitter" type="button">
                    <i class="fa fa-twitter"></i><span> Twitter</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
