@extends('layouts.app')

@section('title')
    Detail | Perpus
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
                  {{ $book->name }} Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="book-gallery" id="gallery">
      <div class="container">
        <div class="row">
            <picture>
                <img src="{{  Storage::url($book->photo) }}" class="img-fluid mt-3" alt="Responsive image" style="max-height: 400px;">
            </picture>
        </div>
      </div>
    </section>
    <div class="book-details-container" data-aos="fade-up">
      <section class="book-heading">
        <div class="container">
          <div class="row">

                <div class="col-lg-8">
                <h1>{{ $book->name }}</h1>
                    <div class="owner"> By
                        <a href="#"
                        style="text-decoration: none;">
                        {{ $book->author }}</a>
                    </div>
                    <div class="categories">
                        <a href="#"
                        style="text-decoration: none;">
                        {{ $book->categories_id }}</a>
                    </div>
                </div>

            <div class="col-lg-2" data-aos="zoom-in">
            @auth()
                <form action="{{ route('read', $book->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button
                        type="submit"
                        class="btn btn-success nav-link px-4 text-white btn-block mb-3">
                        Read Book
                    </button>
                </form>

            @else
            <a
                class="btn btn-success nav-link px-4 text-white btn-block mb-3"
                href="{{ route('login') }}">
                Login to read
            </a>
            @endauth
            </div>

          </div>
        </div>
      </section>
      <section class="book-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <p>
                {!! $book->description !!}
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="book-review">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8 mt-3 mb-3">
              <h5>Customer Review (3)</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              <ul class="list-unstyled">
                <li class="media">
                  <img src="/images/icon-testimonial-1.png" class="mr-3 rounded-circle" alt="" />
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Hazza Risky</h5>
                    I thought it was not good for living room. I really happy
                    to decided buy this Book last week now feels like
                    homey.
                  </div>
                </li>
                <li class="media my-4">
                  <img src="/images/icon-testimonial-2.png" class="mr-3 rounded-circle" alt="" />
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                    Color is great with the minimalist concept. Even I thought
                    it was made by Cactus industry. I do really satisfied with
                    this.
                  </div>
                </li>
                <li class="media">
                  <img src="/images/icon-testimonial-3.png" class="mr-3 rounded-circle" alt="" />
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                    When I saw at first, it was really awesome to have with.
                    Just let me know if there is another upcoming book like
                    this.
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
</div>
@endsection
