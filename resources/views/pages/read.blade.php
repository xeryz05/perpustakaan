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
                <li class="breadcrumb-item"><a href="#">{{ $book->name }} Details</a></li>
                <li class="breadcrumb-item"><a href="#">PDF {{ $book->name }}</a></li>
              </ol>
            </nav>
            <iframe method="GET" type="application/pdf" src="{{  Storage::url($book->pdfs) }}"width="100%" height="100%"> </iframe>
          </div>
        </div>
        <div class="col-8 col-md-3">
          <a href="{{ route('home') }}" class="btn btn-success mt-4 px-4 btn-block">
            Go to home
          </a>
        </div>
      </div>
    </section>
</div>
@endsection
