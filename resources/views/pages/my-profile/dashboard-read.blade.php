@extends('layouts.dashboard')

@section('title')
    Home | Perpus
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Daftar Baca</h2>
        <p class="dashboard-subtitle">
            Big result start from the small one
        </p>
        </div>
        <div class="dashboard-content">
        <ul class="nav nav-pills" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
            <a
                class="nav-link active"
                id="read-tab"
                data-toggle="tab"
                href="#read"
                role="tab"
                aria-controls="read"
                aria-selected="true"
                >Perpustakaan Pribadi</a
            >
        </ul>
        <div class="tab-content" id="myTabContent">
            <div
            class="tab-pane fade show active"
            id="read"
            role="tabpanel"
            aria-labelledby="read-tab"
            >
            <div class="row mt-3">
                <div class="col-12 mt-2">
                <a
                    class="card card-list d-block"
                    href="#"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard-icon-product-1.png"
                            alt=""
                        />
                        </div>
                        <div class="col-md-4">
                        Bahasa Inggris
                        </div>
                        <div class="col-md-3">
                        Angga Risky
                        </div>
                        <div class="col-md-3">
                        12 Januari, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                        />
                        </div>
                    </div>
                    </div>
                </a>
                <a
                    class="card card-list d-block"
                    href="{{ route('dashboard-read-details') }}"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard-icon-product-2.png"
                            alt=""
                        />
                        </div>
                        <div class="col-md-4">
                        Matematika
                        </div>
                        <div class="col-md-3">
                        Masayoshi
                        </div>
                        <div class="col-md-3">
                        11 January, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                        />
                        </div>
                    </div>
                    </div>
                </a>
                <a
                    class="card card-list d-block"
                    href="{{ route('dashboard-read-details') }}"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard-icon-product-3.png"
                            alt=""
                        />
                        </div>
                        <div class="col-md-4">
                        Bahasa arab
                        </div>
                        <div class="col-md-3">
                        Shayna
                        </div>
                        <div class="col-md-3">
                        11 January, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                        />
                        </div>
                    </div>
                    </div>
                </a>
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

@endsection
