@extends('layouts.app')

@section('title')
    Detail | Perpus
@endsection
@push('addon-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
@endpush

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
        <div class="row justify-content-center">
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
                    <div class="owner">
                        <ul>
                            <li>
                                Author | {{ $book->author }}
                            </li>
                            <li>
                                Kategori | {{ $book->slug }}
                                {{--  Kategori | {{ $book->category->slug }}  --}}
                            </li>
                            <li>
                                View | {{ $totalPengunjung }}
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="col-lg-2" data-aos="zoom-in">
                @auth()
                    <a
                        class="btn btn-outline-success nav-link px-4 text-green btn-block mb-3"
                        type="submit"
                        href="{{ route('read', $book->slug) }}"
                        ><i class="bi bi-book-half"></i>
                        Read Book
                    </a>
                @else
                    <a
                        class="btn btn-outline-success nav-link px-4 text-green btn-block mb-3"
                        href="{{ route('login') }}"
                        ><i class="bi bi-door-open"></i>
                        Login
                    </a>
                @endauth
            </div>
          </div>
        </div>
      </section>
      <!-- Modal -->
      @auth
          <div class="modal fade"
                id="staticBackdrop"
                data-backdrop="false"
                data-keyboard="false"
                tabindex="1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
                >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Absen Pengunjung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                         <label>Name</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" >
                    </div>
                    <div class="form-group">
                         <label>Userame</label>
                            <input type="text" class="form-control" value="{{ $user->username }}">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
        </div>
      @endauth
      <!-- Button trigger modal -->
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
      <section class="books-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Komentar</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6">
                @if (count($comment) > 0)

                @foreach ($comment as $item)
                <ul class="list-unstyled">

                  <li class="media">
                    <img
                      src="{{asset('storage/'. $item->user->avatar )}}"
                      alt=""
                      style="border:1px solid; border-radius:50%; width:50px; height:50px;"
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                    <h5 class="mt-2 mb-1">{{ $item->user->name }}</h5>
                    {{ $item->comment }}
                    </div>
                  </li>
                </ul>
                @endforeach
                @auth
                       <div class="media-body my-4">
                     <form action="{{ route('commentar') }}" method="POST">
                       @csrf
                        <input type="hidden" name="books_id" value="{{ $book->id }}">
                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">

                        <textarea name="comment" placeholder="Masukan Pesan" cols="20" rows="5" class="form-control"></textarea>
                        <button type="submit" class="btn btn-success mt-2"> Send</button>
                     </form>
                    </div>
                   @endauth
                @else
                <ul class="list-unstyled">
                  <li class="media">
                   Belum Ada Comentar

                  </li>

                   @auth
                       <div class="media-body my-4">
                     <form action="{{ route('commentar') }}" method="POST">
                       @csrf
                        <input type="hidden" name="books_id" value="{{ $book->id }}">
                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">

                        <textarea name="comment" placeholder="Masukan Pesan" cols="20" rows="5" class="form-control"></textarea>
                        <button type="submit" class="btn btn-success mt-2"> Send</button>
                     </form>
                    </div>
                   @endauth

                </ul>

                @endif

              </div>
            </div>
          </div>
        </section>
    </div>
</div>
@endsection

