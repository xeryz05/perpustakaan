@extends('layouts.admin')

@section('title')
    Create Poster| Perpus
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
								<h4>Poster Tables</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Poster Tables</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
                <div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Poster Table</h4>
							{{--  <p>Add class <code></code></p>  --}}
						</div>
						<div class="pull-right">
							<a href="{{ route('poster.create') }}" class="btn btn-primary btn-sm" ><i class="icon-copy fa fa-plus-circle"></i> Add Poster</a>
						</div>
					</div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="crudTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Photo Poster</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

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
@push('addon-script')
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
                {data: 'photo_poster', name: 'photo_poster'},
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

{{--  dikomen karna untuk menghilangkan kolom id  --}}

