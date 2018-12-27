@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <form action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <h1>Login</h1>
                    <p class="text-muted">Sign In to your account</p>

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
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-lock"></i>
                        </span>
                      </div>
                      <input name="password" type="password" value class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required />
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>

                    @if (false)
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="row">
                      <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">Login</button>
                      </div>
                      <div class="col-6 text-right">
                        <a href="{{ route('password.request') }}">
                          <button class="btn btn-link px-0" type="button">Forgot password?</button>
                        </a>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="{{ route('register') }}">
                    <button class="btn btn-primary active mt-3" type="button">Register Now!</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
