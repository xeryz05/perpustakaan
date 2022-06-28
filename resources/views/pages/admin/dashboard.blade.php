@extends('layouts.admin')

@section('title')
    Admin | Perpus
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">
                  Look what you have made today!
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Jumlah Akun terdaftar
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $akun }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Jumlah Buku
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $book }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Jumlah Categories
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $category }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">

                </div>
              </div>
            </div>
          </div>

          @endsection
