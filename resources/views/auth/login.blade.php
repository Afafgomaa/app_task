@extends('layouts.app')

@section('content')


    <div class="d-flex align-items-center justify-content-center ht-100v">
      <img src="https://via.placeholder.com/1920x1280" class="wd-100p ht-100p object-fit-cover" alt="">
      <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> {{ __('Login') }} <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-60">The Admin Template For Perfectionist</div>
        <form method="POST" action="{{ route('login') }}">
                        @csrf
          <div class="form-group">
            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control fc-outline-dark @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
               @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
          </div><!-- form-group -->
          <div class="form-group">
            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control  fc-outline-dark @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
           </div>
            <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
          <button type="submit" class="btn btn-info btn-block">Sign In</button>
            
        </form>
          <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->


@endsection
