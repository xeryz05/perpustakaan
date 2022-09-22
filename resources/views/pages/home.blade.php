@extends('layouts.app')

@section('title')
    Home | Perpus
@endsection

@section('content')
<div class="page-content page-home">
    <section class="book-carousel">
      <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="bookCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#bookCarousel"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#bookCarousel" data-slide-to="1"></li>
                  <li data-target="#bookCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="{{ asset('images/banner_smait.jpg') }}"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="{{ asset('images/banner_smait2.jpg') }}"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <section class="book-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12 pt-3" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
            @php
                $incrementCategory = 0
            @endphp
            @forelse ($categories as $category)
              <div
                class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementCategory+= 100 }}">
                <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block" >
                    <div class="categories-image">
                        <img src="{{  Storage::url($category->photo) }}" class="w-100" />
                    </div>
                        <p class="categories-text">
                        {{ $category->name }}
                        </p>
                </a>
            </div>
            @empty
                <div class="col-12 text-center py-5"
                    data-aos="fade-up"
                    data-aos-delay="100">
                No Category Found
                </div>
            @endforelse ()
        </div>
      </div>
    </section>
    <section class="book-new-books">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Books</h5>
          </div>
        </div>


        <div class="row">
            @php
                $incrementBook = 0
            @endphp
            @forelse ($books as $book)
              <div class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up" data-aos-delay="{{  $incrementBook += 100 }}">
                    <a href="{{ route('detail', $book->slug) }}" class="component-books d-block" >
                        <div class="books-thumbnail">
                            <div class="books-image" style="
                                @if($book->photo)
                                    /* background-image: url('{{  Storage::url($book->photo)}}'); */
                                     background-image: url('{{  $book->photo  }}');
                                @else
                                    bacground-color: #40ff40;
                                @endif
                                ">
                            </div>
                        </div>
                        <div class="books-title">
                            {{  $book->name }}
                        </div>
                        <div class="books-author">
                            {{ $book->author }}
                        </div>
                    </a>
                </div>
            @empty
                <div
                    class="col-12 text-center py-5"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    No Products Found
                </div>
            @endforelse ()
        </div>
      </div>
    </section>
</div>
@endsection
