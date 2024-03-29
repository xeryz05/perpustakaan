@extends('layouts.auth')
@section('title')
    Sign in | Perpus
@endsection
@section('content')

    <div class="page-content page-auth">
      <div class="section-book-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login">
            <div class="col-lg-6 text-center">
              <img
                src="/images/login.png"
                alt=""
                class="w-100 mb-4 mb-lg-none"
              />
            </div>
            <div class="col-lg-6">
              <h2>
                Membaca Untuk membuka wawasan
                menjadi lebih mudah
              </h2>
                <form method="POST" action="{{ route('login') }}" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input id="username" type="text"
                            class="form-control w-75 @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control w-75 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button
                            type="submit"
                            class="btn btn-success w-75 btn-block mt-4"
                        >
                            Sign In to My Account
                        </button>

                        @if (Route::has('password.request'))
                        <button type="submit" class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </button>
                        @endif
                    </form>
            </div>
          </div>
        </div>
      </div>
    </div>
