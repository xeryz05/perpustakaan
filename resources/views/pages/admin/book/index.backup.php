@extends('layouts.admin')

@section('title')
    Book | Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Book</h2>
            <p class="dashboard-subtitle">
                List of Book
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('book.create') }}" class="btn btn-primary mb-3">
                                + Tambah Buku Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Author</th>
                                        <th>kategori</th>
                                        <th>Foto</th>
                                        <th>PDF</th>
                                        <th>View</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('addon-script')
    <script>
        // AJAX DataTablenn
        var datatable = $('#crudTable').DataTable({
            processing:true,
            serverSide:true,
            ordering:true,
            ajax: {
                url:'{!! url()->current() !!}',
            },
            columns: [
                //{{--  {data: 'id', name: 'id'},  --}} (dikomen karna untuk menghilangkan kolom id)
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                {data: 'name', name: 'name'},
                {data: 'author', name: 'author'},
                {data: 'category.name', name: 'category.name'},
                {data: 'photo', name: 'photo'},
                {data: 'pdf', name: 'pdf'},
                {data: 'view', name: 'view'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        })
    </script>
@endpush
