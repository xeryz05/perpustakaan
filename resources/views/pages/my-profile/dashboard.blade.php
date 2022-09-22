@extends('layouts.dashboard')

@section('title')
    Dahboard | Perpus
@endsection

@section('content')
<div class="content" style="padding-top: 60px">
    <div class="row">
        <div class="card card-chart">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="{{ asset('images/banner-img.png') }}" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">{{ Auth::user()->name }}!</div>
						</h4>
						<p class="font-30 max-width-600">Gali potensimu dengan perbanyak membaca buku .</p>
					</div>
				</div>
			</div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Book</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $book }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <a href="{{  route('categories') }}">Category</a></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $category }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
