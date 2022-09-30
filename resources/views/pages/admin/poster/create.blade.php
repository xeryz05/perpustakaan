@extends('layouts.admin')

@section('title')
    Create Poster | Dashboard
@endsection

@section('content')
{{--  <!-- Section Content -->  --}}
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Create Poster</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div
                        class="section-content section-dashboard-home"
                        data-aos="fade-up">
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('poster.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label>Upload Photo Poster</label>
                                                        <input type="file" class="form-control" name="photo_poster" placeholder="photo_poster" required />
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
