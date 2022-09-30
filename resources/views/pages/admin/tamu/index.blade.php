@extends('layouts.admin')

@section('title')
    Daftar Tamu | Perpus
@endsection

@section('content')
    <body>
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Daftar Tamu</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Daftar Tamu</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
                <div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Daftar Tamu</h4>
						</div>
					</div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="crudTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIS</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($absen as $index => $data)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->user->NIS }}</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="footer-wrap pt-3 pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
</body>
@endsection
{{-- @push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing:true,
            serverSide:true,
            ordering:true,
            ajax: {
                url:'{!! url()->current() !!}',
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                {data: 'user.name', name: 'user.name'},
                {data: 'NIS', name: 'NIS'},
                {data: 'tgl_absen', name: 'tgl_absen'},
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
@endpush --}}

