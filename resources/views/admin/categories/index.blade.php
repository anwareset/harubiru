@extends('admin-template.page')
@section('title', 'Categories')
@section('activecategories', 'active')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Categories</h1>

<!-- DataTales Categories -->
<div class="card shadow mb-4">
	@if (session('status'))
	<div class="alert alert-success my-3" role="alert">
		{{ session('status') }}
	</div>
	@endif
	<div class="card-header py-3">
		<a href="{{ route('categories.create') }}" class="btn btn-sm btn-success btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-flag"></i>
			</span>
			<span class="text">Add New Category</span>
		</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="5%" class="text-center">#</th>
						<th>Name</th>
						<th width="10%" class="text-center">Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th width="5%" class="text-center">#</th>
						<th>Name</th>
						<th width="10%" class="text-center">Action</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($categories as $result => $print)
					<tr>
						<td align="center">{{ $result + $categories->firstitem() }}</td>
						<td>{{ $print->name }}</td>
						<td align="center">
							<form method="POST" action="{{ route('categories.destroy', $print->id) }}">
								@csrf
								@method('delete')
								<a href="{{ route('categories.edit', $print->id) }}" class="btn btn-sm btn-warning btn-icon-split">
									<span class="icon text-white-50">
										<i class="fas fa-edit"></i>
									</span>
								</a>
								<button type="submit" class="btn btn-sm btn-danger btn-icon-split">
									<span class="icon text-white-50">
										<i class="fas fa-trash"></i>
									</span>
								</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection