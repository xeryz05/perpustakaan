@extends('layouts.admin')

@section('title')
    Edit User | Dashboard
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
                                <li class="breadcrumb-item active" aria-current="page">Edit Tables</li>
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
                                    <form action="{{ route('user.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                                <input type="text" class="form-control" name="name"  value="{{ $item->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>NIS</label>
                                                                <input type="number" class="form-control" name="nis"  value="{{ $item->nis }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                                <input type="text" class="form-control" name="username" value="{{ $item->username }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Email User</label>
                                                                <input class="form-control {{$errors->first('email') ? "is-invalid" : ""}}" type="email" class="form-control" name="email" value="{{ $item->email }}">
                                                                <div class="invalid-feedback">
                                                                    {{$errors->first('email')}}
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Password User</label>
                                                                <input type="password" class="form-control" name="password" />
                                                                <small>Kosongkan Jika tidak ingin mengganti password</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label>Upload file avatar</label>
                                                        <input type="file" class="form-control" name="avatar" placeholder="avatar" required
                                                        <small class="text-muted">
                                                            Kosongkan jika tidak ingin mengubah avatar
                                                        </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Roles User</label>
                                                                <select name="roles" required class="form-control">
                                                                    <option value="{{ $item->roles }}" selected>tidak diganti</option>
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
{{--  @section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">User</h2>
        <p class="dashboard-subtitle">
            Edit New User
        </p>
    </div>
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
          <form action="{{ route('user.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama User</label>
                      <input type="text" class="form-control" name="name" required value="{{ $item->name }}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Email User</label>
                      <input type="email" class="form-control" name="email" required value="{{ $item->email }}">
                      <small>Biarkan saja jika tidak ingin diganti</small>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Password User</label>
                            <input type="password" class="form-control" name="password">
                        <small>Kosongkan Jika tidak ingin mengganti password</small>
                    </div>
                  </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <label>Upload file avatar</label>
                        <input type="file" class="form-control" name="avatar" placeholder="avatar" required />
                        </div>
                    </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Roles User</label>
                        <select name="roles" required class="form-control">
                            <option value="{{ $item->roles }}" selected>tidak diganti</option>
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
                      class="btn btn-outline-danger px-5"
                    ><a href="{{ route('user.index') }}">
                        Back
                    </a>
                    </button>
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Save Now
                    </button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection  --}}
