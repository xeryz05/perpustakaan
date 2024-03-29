@extends('layouts.admin')

@section('title')
    Create | Dashboard
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
                            <h4>Create Users</h4>
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
                                    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                                <input type="text" class="form-control" name="name" required>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                                <select name="gender" required class="form-control">
                                                                    <option value="laki-laki">Laki-laki</option>
                                                                    <option value="perempuan">Perempuan</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>NIS<i class="wi wi-night-snow-wind"></i></label>
                                                                <input type="number" class="form-control" name="NIS">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Username<i class="wi wi-night-snow-wind"></i></label>
                                                                <input type="text" class="form-control" name="username" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                                <input type="email" class="form-control" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                                <input type="password" class="form-control" name="password" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label>Upload file avatar</label>
                                                        <input type="file" class="form-control" name="avatar" placeholder="avatar" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Roles User</label>
                                                                <select name="roles" required class="form-control">
                                                                    <option value="ADMIN">Admin</option>
                                                                    <option value="USER">User</option>
                                                                </select>
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
