@extends('layouts.admin')

@section('title')
    Edit User | Dashboard
@endsection

@section('content')
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
                      <label>Foto (Anda wajib mengisi ulang gambar ini)</label>
                      <input type="file" class="form-control" name="photo" placeholder="Photo"/>
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
@endsection
