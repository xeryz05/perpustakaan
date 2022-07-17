@extends('layouts.app')

@section('title')
    Favorite | Perpus
@endsection

@section('content')
    <div class="page-content page-cart">
      <section
        class="book-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Favorite
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="book-Favorite">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">


            <div class="tab-content" id="myTabContent">
            <div
            class="tab-pane fade show active"
            id="read"
            role="tabpanel"
            aria-labelledby="read-tab"
            >
            <div class="row mt-3">
                <div class="col-12 mt-2">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name Book</th>
                            <th scope="col">Name Author</th>
                            <th scope="col">Date</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Redirerct Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($favorites as $favorite)
                            {{--  <div class="card card-list">  --}}
                            <tr>
                                <td class="card card-list" style="width: 25%;">
                                    <img
                                        src="{{ Storage::url($favorite->book->photo) }}"
                                        alt=""
                                        style="height: 100px; width:150px;"
                                    />
                                </td>
                                <td style="width: 35%;">
                                    <div class="book-title">{{ $favorite->book->name }}</div>
                                    <div class="book-title">{{ $favorite->book->category->slug }}</div>
                                </td>
                                <td style="width: 35%;">
                                    <div class="book-title">{{ $favorite->book->author }}</div>
                                </td>
                                <td style="width: 35%;">
                                    <div class="book-title">{{ $favorite->book->updated_at }}</div>
                                </td>
                                <td style="width: 20%;">
                                    <form action="{{route('delete-favorite',$favorite->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                            <button type="submit" class="btn btn-remove-favorite">
                                                Remove
                                            </button>
                                    </form>
                                </td>
                                <td>
                                    <div class="col-md-1 d-none d-md-block">
                                        <a href="{{ route('detail', $favorite->book->slug) }}">
                                        <img
                                            src="/images/dashboard-arrow-right.svg"
                                            alt=""
                                        />
                                        </a>
                                    </div>
                                </td>
                            </tr>


                        @empty

                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
            </div>
            <div
            class="tab-pane fade"
            id="buy"
            role="tabpanel"
            aria-labelledby="buy-tab"
            >
            </div>
        </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection
