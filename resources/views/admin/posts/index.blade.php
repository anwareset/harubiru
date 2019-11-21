@extends('admin-template.page')
@section('title', 'Posts')
@section('activeposts', 'active')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Posts</h1>

<!-- DataTales Posts -->
<div class="card shadow mb-4">
	@if (session('status'))
	<div class="alert alert-success my-3" role="alert">
		{{ session('status') }}
	</div>
	@endif
	<div class="card-header py-3">
		<a href="{{ route('posts.create') }}" class="btn btn-sm btn-success btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-flag"></i>
			</span>
			<span class="text">Add New Post</span>
		</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="5%" class="text-center">#</th>
						<th>Title</th>
						<th width="20%" class="text-center">Category</th>
						<th width="15%" class="text-center">Thumbnail</th>
						<th width="10%" class="text-center">Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th width="5%" class="text-center">#</th>
						<th>Title</th>
						<th width="20%" class="text-center">Category</th>
						<th width="15%" class="text-center">Thumbnail</th>
						<th width="10%" class="text-center">Action</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($posts as $result => $print)
					<tr>
						<td align="center">{{ $result + $posts->firstitem() }}</td>
						<td>{{ $print->title }}</td>
						<td>{{ $print->category->name }}</td>
						<td><img src="{{ asset($print->thumbnail) }}" alt="harubiru.me-{{ $print->slug }}"></td>
						<td align="center">
							<form method="POST" action="{{ route('posts.destroy', $print->id) }}">
								@csrf
								@method('delete')
								<a href="{{ route('posts.edit', $print->id) }}" class="btn btn-sm btn-warning btn-icon-split">
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