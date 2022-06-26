@extends('layouts.app')

@section('title')
    Read | Perpus
@endsection

@section('content')
<div class="page-content page-cart">
    <section class="book-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Bahasa Indonesia
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <h4>Contoh menampilkan file pdf dengan tag embed</h4>
        <iframe src="{{ url('pdf/BBT.pdf') }}" width="100%" height="700"></iframe>
        <div class="col-8 col-md-3">
          <a href="/index.html" class="btn btn-success mt-4 px-4 btn-block">
            Go to home
          </a>
        </div>
      </div>
    </section>
</div>
@endsection
