@extends('layouts.app')

@section('title')
    Read | Perpus
@endsection

@section('content')

<div class="page-content page-details">
    <section class="book-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">

              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="#">
                         {{ $book->name }} Details
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="#">
                         {{ $book->name }} Read
                    </a>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <div class="container" oncontextmenu="return false">
    <div class="row">
        <iframe src="{{  Storage::url($book->pdf) }}#toolbar=0"
            class="mt-3"
            style="width:100%; height: 500px"
            frameborder='0'
        >
        </iframe>
    </div>
    </div>
    <div class="book-details-container" data-aos="fade-up">
      <section class="book-heading">
        <div class="container">
          <div class="row">

        <div class="col-lg-8 pt-3">
        <h1>{{ $book->name }}</h1>
            <div class="owner">
                <ul>
                    <li>
                        Author | {{ $book->author }}
                    </li>
                    <li>
                        <a href="#" style="text-decoration: none;">
                            Kategori | {{ $book->category->slug }}
                        </a>
                    </li>
                </ul>
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
