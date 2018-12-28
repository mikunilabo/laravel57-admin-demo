@extends('layouts.skeleton')

@section('title', __('Reset Password'))

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="card-body p-4">
                  <h1>@lang ('Reset Password')</h1>
                  <p class="text-muted">{{ __('Please enter your registered e-mail address.') }}</p>

                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>
                    <input name="email" type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="{{ __('E-Mail') }}" required autofocus />
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <button class="btn btn-block btn-outline-warning" type="{{ empty($demo) ? 'submit' : 'button' }}">{{ __('Submit') }}</button>

                  <div class="mt-3">
                    <a href="{{ route('login') }}">
                      <button class="btn btn-block btn-link px-0" type="button">Back to sign in page.</button>
                    </a>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
