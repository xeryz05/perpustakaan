@extends('layouts.app')

@section('title')
    Books | Perpus
@endsection

@section('content')
<div class="page-content page-categories">
    <section class="book-trend-categories">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">

                <form action="/categories/search" method="GET">
                    <div class="input-group mb-3 pt-3">
                        <input type="text"
                            class="form-control"
                            placeholder="Search.."
                            name="search"
                            value="{{ request('search') }}"

                        >
                        <div class="input-group-append">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
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
            @php $incrementBook = 0 @endphp
            @forelse ($books as $book)
                <div class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up" data-aos-delay="{{  $incrementBook += 100 }}">
                    <a href="{{ route('detail', $book->slug) }}" class="component-books d-block" >
                        <div class="books-thumbnail">
                            <div class="books-image" style="
                                @if($book->photo)
                                    background-image: url('{{  Storage::url($book->photo)}}');
                                @else
                                    bacground-color: #D9F8C4;
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
                        <div class="books-author">
                            {{ $book->category->slug }}
                        </div>
                    </a>
                </div>
            @empty
                <div
                    class="col-12 text-center py-5"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    No Books Found
                </div>
            @endforelse
        </div>
      </div>
    </section>
</div>
@endsection
