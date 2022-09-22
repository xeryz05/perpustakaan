@extends('layouts.dashboard')

@section('title')
    Account Setting | My Profile
@endsection

@section('content')
<!-- Section Content -->

<div class="content" style="">
    <form id="locations" action="{{ route('dashboard-account-redirect','dashboard-account') }}" method="POST" enctype="multipart/form-data">
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
                                            <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="name"
                                                name="name"
                                                value="{{ $user->name }}"
                                            />
                                            </div>
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
                                            <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="email"
                                                name="email"
                                                value="{{ $user->email }}"
                                            />
                                            </div>
                                        </td>
                                    </tr>
                                    {{--  <tr>
                                        <td>
                                            Password
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <div class="form-group">
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="password"
                                                name="password"
                                                value="{{ $user->password }}"
                                            />
                                            <small>Kosongkan Jika tidak ingin mengganti password</small>
                                            </div>
                                        </td>
                                    </tr>  --}}
                                    <tr>
                                        <td>
                                            NIS
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="NIS"
                                                name="NIS"
                                                value="{{ $user->NIS }}"
                                                readonly
                                            />
                                            </div>
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
                                            <div class="form-group">
                                                <select name="gender" required class="form-control">
                                                    <option value="{{ $user->gender }}" selected>tidak diganti</option>
                                                    <option value="LAKI-LAKI">Laki-laki</option>
                                                    <option value="PEREMPUAN">Perempuan</option>
                                                </select>
                                            </div>
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
                                            <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="username"
                                                name="username"
                                                value="{{ $user->username }}"
                                            />
                                            </div>
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
                                            <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="address_one"
                                                name="address_one"
                                                value="{{ $user->address_one }}"
                                            />
                                            </div>
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
                                            <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="country"
                                                name="country"
                                                value="{{ $user->country }}"
                                            />
                                            </div>
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
                                            <div class="form-group">
                                            <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                                                <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                                            </select>
                                            <select v-else class="form-control"></select>
                                            </div>


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
                                            <div class="form-group">
                                            <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies">
                                                <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                                            </select>
                                            <select v-else class="form-control"></select>
                                            </div>
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
                                            <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="phone_number"
                                                name="phone_number"
                                                value="{{ $user->phone_number }}"
                                            />
                                            </div>
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

                        <div class="form-group">

                        <button class="btn btn-outline-secondary px-5">
                            Upload Foto
                                <input type="file" class="form-control" name="avatar" placeholder="avatar"/>
                        </button>
                        <br>
                        <small class="text-muted">
                            Maaf anda harus mengupload foto anda lagi | Only .jpg .png .jpeg allowed
                        </small>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="button-container">
                </div>
                <div class="button-container" style="margin: 0px 50px 0px 50px;">
                    <center>
                        <button
                            type="submit"
                            class="btn btn-success px-5"
                            style="background-color: #05af52bd"
                            >
                            Save Now
                        </button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

{{--  <div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
    >
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Settings Account</h2>
      <p class="dashboard-subtitle">
        Update your current profile
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form id="locations" action="{{ route('dashboard-account-redirect','dashboard-account') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Your Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ $user->name }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                        <div class="form-group">
                        <label>Upload file avatar</label>
                        <input type="file" class="form-control" name="avatar" placeholder="avatar"/>
                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengubah avatar
                        </small>
                        </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Your Email</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="{{ $user->email }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address_one">Isi alamat anda</label>
                      <input
                        type="text"
                        class="form-control"
                        id="address_one"
                        name="address_one"
                        value="{{ $user->address_one }}"
                        required
                      />
                      <small>alamat lengkap</small>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="provinces_id">Province</label>
                      <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces">
                        <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                      </select>
                      <select v-else class="form-control"></select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="regencies_id">City</label>
                      <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies">
                        <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                      </select>
                      <select v-else class="form-control"></select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="zip_code">Postal Code</label>
                      <input
                        type="text"
                        class="form-control"
                        id="zip_code"
                        name="zip_code"
                        value="{{ $user->zip_code }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">Country</label>
                      <input
                        type="text"
                        class="form-control"
                        id="country"
                        name="country"
                        value="{{ $user->country }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone_number">Mobile</label>
                      <input
                        type="text"
                        class="form-control"
                        id="phone_number"
                        name="phone_number"
                        value="{{ $user->phone_number }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>  --}}
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
