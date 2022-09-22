@extends('layouts.dashboard')

@section('title')
    Menu Account Setting | My Profile
@endsection

@section('content')
<div class="content">
    <form id="locations" method="GET" enctype="multipart/form-data">
        @csrf
    <div class="row" style="padding-top: 60px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Biodata</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        Nama
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        NIS
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->NIS }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jenis Kelamin
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->gender }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Username
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->username }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Alamat
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->address_one }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kewarganagaraan
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->country }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Provinsi
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                         <input
                                            type="text"
                                            class="form-control"
                                            id="provinces_id"
                                            name="provinces_id"
                                            value="{{ $user->provinces_id }}"
                                            readonly
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kota/Kabupaten
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->regencies_id }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        No.Telephone/HP
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        {{ $user->phone_number }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div>
                    <h4><center>Foto Profile</center></h4>
                </div>
                <div class="card-body">
                    <div class="author" style="padding-top: 65px">
                            <img class="avatar border-gray" src="{{asset('storage/'. Auth::user()->avatar )}}" alt="...">
                            <h5 class="title">{{ Auth::user()->name }}</h5>
                        <p class="description">
                            {{ Auth::user()->username }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="button-container">

                </div>
                <div class="button-container" style="margin: 0px 50px 0px 50px;">
                    <center>
                        <button class="btn btn-success btn-block" style="background-color: #05af52bd ">
                            <a href="{{ route('dashboard-account') }}" style="color:aliceblue; font-size: 20px; text-decoration: none;">
                                Update Data
                            </a>
                        </button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      var locations = new Vue({
        el: "#locations",
        mounted() {
          this.getProvincesData();
        },
        data: {
          provinces: null,
          regencies: null,
          provinces_id: null,
          regencies_id: null,
        },
        methods: {
          getProvincesData() {
            var self = this;
            axios.get('{{ route('api-provinces') }}')
              .then(function (response) {
                  self.provinces = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
              .then(function (response) {
                  self.regencies = response.data;
              })
          },
        },
        watch: {
          provinces_id: function (val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
          },
        }
      });
    </script>
@endpush

