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
            <div id="bookCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#bookCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#bookCarousel" data-slide-to="1"></li>
                <li data-target="#bookCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/banner4.jpg" class="d-block w-100" alt="Carousel Image" />
                </div>
                <div class="carousel-item">
                  <img src="/images/banner3.jpg" class="d-block w-100" alt="Carousel Image"/>
                </div>
                <div class="carousel-item">
                  <img src="/images/banner2.jpg" class="d-block w-100" alt="Carousel Image"/>
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
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img src="/images/categories-gadgets.svg" class="w-100" />
              </div>
              <p class="categories-text">
                SMA X
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img src="/images/categories-furniture.svg" class="w-100" />
              </div>
              <p class="categories-text">
                SMA XI
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img src="/images/categories-makeup.svg" class="w-100" />
              </div>
              <p class="categories-text">
                SMA XII
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img src="/images/categories-sneaker.svg" alt="Sneaker Categories" class="w-100" />
              </div>
              <p class="categories-text">
                Komik
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img src="/images/categories-tools.svg" alt="Tools Categories" class="w-100" />
              </div>
              <p class="categories-text">
                Jurnal
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a class="component-categories d-block" href="#">
              <div class="categories-image">
                <img src="/images/categories-baby.svg" alt="Baby Categories" class="w-100" />
              </div>
              <p class="categories-text">
                Bahan Ajar
              </p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="book-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Books</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a class="component-books d-block" href="#">
              <div class="books-thumbnail">
                <div class="books-image" style="
                      background-image: url('/images/products-apple-watch.jpg');
                    "></div>
              </div>
              <div class="books-title">
                Bahasa Indonesia
              </div>
              <div class="books-read">
                Read Book
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a class="component-books d-block" href="#">
              <div class="books-thumbnail">
                <div class="books-image" style="
                      background-image: url('/images/products-orange-bogotta.jpg');
                    "></div>
              </div>
              <div class="books-title">
                Bahasa Inggris
              </div>
              <div class="books-read">
                Read Book
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a class="component-books d-block" href="/details.html">
              <div class="books-thumbnail">
                <div class="books-image" style="
                      background-image: url('/images/products-sofa-ternyaman.jpg');
                    "></div>
              </div>
              <div class="books-title">
                Bahasa Arab
              </div>
              <div class="books-read">
                Read Book
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a class="component-books d-block" href="/details.html">
              <div class="books-thumbnail">
                <div class="books-image" style="
                      background-image: url('/images/products-bubuk-maketti.jpg');
                    "></div>
              </div>
              <div class="books-title">
                Fiqih
              </div>
              <div class="books-read">
                Read Book
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a class="component-books d-block" href="/details.html">
              <div class="books-thumbnail">
                <div class="books-image" style="
                                background-image: url('/images/products-apple-watch.jpg');
                              "></div>
              </div>
              <div class="books-title">
                Bahasa Indonesia
              </div>
              <div class="books-read">
                Read Book
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a class="component-books d-block" href="/details.html">
              <div class="books-thumbnail">
                <div class="books-image" style="
                                background-image: url('/images/products-orange-bogotta.jpg');
                              "></div>
              </div>
              <div class="books-title">
                Bahasa Inggris
              </div>
              <div class="books-read">
                Read Book
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a class="component-books d-block" href="/details.html">
              <div class="books-thumbnail">
                <div class="books-image" style="
                                background-image: url('/images/products-sofa-ternyaman.jpg');
                              "></div>
              </div>
              <div class="books-title">
                Bahasa Arab
              </div>
              <div class="books-read">
                Read Book
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a class="component-books d-block" href="/details.html">
              <div class="books-thumbnail">
                <div class="books-image" style="
                                background-image: url('/images/products-bubuk-maketti.jpg');
                              "></div>
              </div>
              <div class="books-title">
                Fiqih
              </div>
              <div class="books-read">
                Read Book
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection
