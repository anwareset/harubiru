@extends('admin-template.page')
@section('title', 'Category Edit')
@section('activecategories', 'active')
@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Category Edit</h1>

<!-- Form Create -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-chevron-circle-left"></i>
			</span>
			<span class="text">Back</span>
		</a>	
	</div>
	<div class="card-body">
		<form action="{{ route('categories.update', $category->id) }}" method="POST">
			@csrf
			@method('patch')
			<div class="form-group">
				<label>Category Name</label>
				@error('name')
				<div class="alert alert-danger" role="alert">
					{{ $message }}
				</div>
				@enderror
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn btn-block">
					<i class="fas fa-flag"></i>
					<span class="text">Update Category</span>
				</button>
			</div>
		</form>
	</div>
</div>

@endsection