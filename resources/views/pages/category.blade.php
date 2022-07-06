@extends('layouts.app')

@section('title')
    Books | Perpus
@endsection

@section('content')
<div class="page-content page-categories">
    <section class="store-trend-categories">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="/categories" method="GET">
                    <div class="input-group mb-3 pt-3">
                        <input type="text"
                            class="form-control"
                            placeholder="Search.."
                            name="search"
                            value=""
                            
                        >
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Books</h5>
          </div>
        </div>
        <div class="row">
            @php $incrementProduct = 0 @endphp
            @forelse ($books as $book)
                <div class="col-6 col-md-4 col-lg-3"
                    data-aos="fade-up" data-aos-delay="{{  $incrementProduct += 100 }}">
                    <a href="{{ route('detail', $book->slug) }}" class="component-books d-block" >
                <div class="books-thumbnail">
                <div class="books-image" 
                style="
                    @if($book->photo)
                        background-image: url('{{ Storage::url($book->galleries->first()->photos) }}')
                    @else
                        img src="https://source.unsplash.com/1200x400? {{ $book->category->name }}"
                    @endif
                "
                ></div>
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
            @endforelse
        </div>
        <div>
            <div class="row">
                <div class="col-12 mt-14">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
