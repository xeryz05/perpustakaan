@extends('layouts.errors')

@section('title')
    404 | Perpus
@endsection

@section('content')
<div class="container">
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-7 text-center">
              <img src="/images/banner2.jpg" alt="" class="mb-4" style="max-height: 200px" />
              <p>
                <h1 class="m-0">404 | Page not found</h1>
              </p>
              <div>
                <a class="btn btn-success w-50 mt-2" href="{{ route('home') }}">
                  Go To Library
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
