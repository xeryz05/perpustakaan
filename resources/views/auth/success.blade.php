@extends('layouts.success')

@section('title')
    Register Success | Perpus
@endsection

@section('content')
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-7 text-center">
              <img src="/images/banner2.jpg" alt="" class="mb-4" style="max-height: 200px" />
              <h2>
                Welcome to Library SMAIT Asy-Syukriyyah
              </h2>
              <p>
                Kamu sudah berhasil terdaftar <br />
                bersama kami. Let’s read book now.
              </p>
              <div>
                <a class="btn btn-success w-50 mt-4" href="{{ route('dashboard') }}">
                  My Profile
                </a>
                <a class="btn btn-signup w-50 mt-2" href="{{ route('home') }}">
                  Go To Library
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
