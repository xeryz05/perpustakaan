@extends('layouts.dashboard')

@section('title')
    Menu Account Setting | My Profile
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Account</h2>
      <p class="dashboard-subtitle">
        Select your current profile
      </p>
    </div>
    {{--  --------------------- Start form -----------------------  --}}
    <div class="dashboard-content">
      <div class="row-center">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <center>
                    <img src="{{ asset('images/product-thumbnail-3.jpg') }}"
                        class="card-img-top"
                        alt="profile"
                        style="border-radius: 50%; width:200px; height:200px;"
                    >
                    </center>
                    <div class="card-body">
                        <div class="row">
                        <div class="col text-center">
                            <a href="#"
                                class="btn btn-primary px-5 btn-lg active"
                                role="button"
                                aria-pressed="true"
                            >
                                Ganti Foto
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pt-3">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Your Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ $user->name }}"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="email">EMail</label>
                      <input
                        type="text"
                        class="form-control"
                        id="email"
                        name="email"
                        value="{{ $user->email }}"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="address_one">Alamat</label>
                      <input
                        type="text"
                        class="form-control"
                        id="address_one"
                        name="address_one"
                        value="{{ $user->address_one }}"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="zip_code">Kode Pos</label>
                      <input
                        type="text"
                        class="form-control"
                        id="zip_code"
                        name="zip_code"
                        value="{{ $user->zip_code }}"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="country">Negara</label>
                      <input
                        type="text"
                        class="form-control"
                        id="country"
                        name="country"
                        value="{{ $user->country }}"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="phone_number">Nomer telpon</label>
                      <input
                        type="text"
                        class="form-control"
                        id="phone_number"
                        name="phone_number"
                        value="{{ $user->phone_number }}"
                        readonly
                      />
                    </div>
                  </div>
                </div>
                {{--  --------------------- End form -----------------------  --}}
                <div class="row">
                  <div class="col text-right">
                    <a href="{{ route('dashboard-account') }}"
                        class="btn btn-primary px-5 btn-lg active"
                        role="button"
                        aria-pressed="true"
                    >
                        Settings
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
