@extends('admin-template.page')
@section('title', 'Add New Tags')
@section('activectags', 'active')
@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add New Tags</h1>

<!-- Form Create -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<a href="{{ route('tags.index') }}" class="btn btn-sm btn-primary btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-chevron-circle-left"></i>
			</span>
			<span class="text">Back</span>
		</a>	
	</div>
	<div class="card-body">
		<form method="POST" action=" {{ route('tags.store') }} ">
			@csrf
			<div class="form-group">
				<label>Tags Name</label>
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif
				@error('name')
				<div class="alert alert-danger" role="alert">
					{{ $message }}
				</div>
				@enderror
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn btn-block">
					<i class="fas fa-flag"></i>
					<span class="text">Add New Tags</span>
				</button>
			</div>
		</form>
	</div>
</div>

@endsection