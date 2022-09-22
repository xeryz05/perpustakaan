<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body class="bg-success p-2 text-dark bg-opacity-25">
    <div class="container">
        <div class="row m-4 justify-content-center col-md-12">
            <div class="col-sm-7">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Total Pengunjung</h5>
                  {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                  <a href="#" class="btn btn-primary">{{ $totalPengunjung }}</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row m-4 justify-content-center col-md-12">
            <div class="col-sm-7">
                <div class="card">
                    <h5 class="card-header">Absen Pengunjung</h5>
                    <div class="card-body">
                      <h5 class="card-title">Masukan NIS</h5>
                      <form action="{{ url('/tamu/store') }}" method="post" id="formAbsen">
                        @csrf
                        <div class="form-group">
                                <input type="text" class="form-control" name="nis" id="NIS" placeholder="Masukkan Username atau NIS">
                        </div> 
                
                    </form>
                    <button id="submit" class="btn btn-outline-success col-12" style="margin-top: 10px">Submit</button>
                      {{-- <a href="#" class="btn btn-success">Go somewhere</a> --}}
                    </div>
                  </div>
            </div>
          </div>
        
     
    </div>
 
   

</body>
<!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="/script/navbar-scroll.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $('#submit').click(function(){
       $.ajax({
            url: `{{ url('/tamu/store') }}`,
            method: "POST",
            data: $('#formAbsen').serialize(),
            success: function(data){
                Swal.fire(
                    'Hallo {{  (auth::user()->name) }}',
                    data,
                    'info'
                    );
            },
            error: function(data)
            {
                Swal.fire(
                    'Hallo {{  (auth::user()->name) }}',
                    'Terjadi Error Pada Server',
                    'error'
                );
            }
       });
    })
    </script>

</html>


{{--  @extends('layouts.app')

@section('title')
    Tamu | Perpus
@endsection

@section('content')
<div class="page-content page-categories">
    <section class="book-trend-categories">
      <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 col-md-6 offset-mt-1">
                <h6 class="display-4">
                    Silahkan Submit Data Anda
                </h6>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS</label>
                            <input type="number" class="form-control" id="NIS" value="{{ $user->NIS }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
    </section>
</div>
@endsection  --}}
